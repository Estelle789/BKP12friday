<?php
include("../dbh-inic.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$petid = $_POST['pet_id'];
try {
    $stmt = $pdo->prepare("DELETE FROM pets where id='$petid'");
    $stmt->execute();
    $stmt = null;
    header ('Location: ../../petowner_dashboard.php');
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
