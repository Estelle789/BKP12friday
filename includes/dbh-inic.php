<?php

$servername = "160.153.133.211";
$username = "qcn3mopbbora";
$password = "?+6Z05[2zm&";
$dbname = "bookingpetz";
$charset = "utf8mb4";
 /*
$servername = "localhost";
$username = "gepettox";
$password = "f=mx+d123";
$dbname = "bookingpetz";
$charset = "utf8mb4";
*/
try {

    $dsn = "mysql:host=" . $servername . ";dbname=" . $dbname . ";charset=" . $charset;
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Connection Failed due to" . $e->getMessage();
}
