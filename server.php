<?php
error_reporting(E_ERROR | E_PARSE);
header('Content-Type: application/json');
require 'db.php'; // Oracle connection

$data = json_decode(file_get_contents('php://input'), true);
$sql = $data['sql'] ?? '';

if (!$sql) {
    echo json_encode(['error' => '❌ No SQL provided']);
    exit;
}

// Allow only safe query types
$allowed = ['SELECT', 'INSERT', 'UPDATE', 'DELETE'];
$command = strtoupper(explode(' ', trim($sql))[0]);

if (!in_array($command, $allowed)) {
    echo json_encode(['error' => '❌ Only SELECT, INSERT, UPDATE, DELETE allowed']);
    exit;
}

// Parse query
$stid = oci_parse($connection, $sql); // Changed from $conn to $connection
if (!$stid) {
    $e = oci_error($connection);
    echo json_encode(['error' => '❌ SQL parse error: ' . $e['message']]);
    exit;
}

// Execute query
if (!oci_execute($stid)) {
    $e = oci_error($stid);
    echo json_encode(['error' => '❌ SQL execution error: ' . $e['message']]);
    exit;
}

// Return results if SELECT
if ($command === 'SELECT') {
    $results = [];
    while ($row = oci_fetch_assoc($stid)) {
        $results[] = $row;
    }
    echo json_encode(['data' => $results]);
} else {
    echo json_encode(['message' => '✅ Query executed successfully']);
}

// Cleanup
oci_free_statement($stid);
oci_close($connection); // Changed from $conn to $connection
?>