<?php
// Oracle SYSDBA connection
$username = 'YOUR_ORACLE_USERNAME';
$password = 'YOUR_ORACLE_PASSWORD';
$connection_string = 'localhost/XE'; // Change this if your service name is different

// Connect with SYSDBA privilege
$connection = @oci_connect($username, $password, $connection_string, null, OCI_SYSDBA);

if (!$connection) {
    $e = oci_error();
    echo json_encode(['error' => '❌ Connection failed: ' . $e['message']]);
    exit;
}
?>