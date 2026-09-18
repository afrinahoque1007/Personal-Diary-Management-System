<?php
// Oracle SYSDBA connection
$username = 'YOUR_ORACLE_USERNAME';
$password = 'YOUR_ORACLE_PASSWORD';
$connection_string = 'localhost/XEXDB'; // Change this if your service name is different

// Connect with SYSDBA privilege
$connection = @oci_connect($username, $password, $connection_string, null, OCI_SYSDBA);

if (!$connection) {
    $e = oci_error();
    echo "❌ Connection failed: " . htmlspecialchars($e['message']);
} else {
    echo "✅ Oracle Connection Successful!";
    oci_close($connection);
}
?>