<?php
// Database configuration

$dbHost     = "160.153.133.211";
$dbUsername = "qcn3mopbbora";
$dbPassword = "?+6Z05[2zm&";
$dbName     = "bookingpetz";
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>