<?php  
include('../dbh-inic.php');
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$days =$_POST['days'];
$petownerId=$_POST['petownerid'];
$sql = "INSERT INTO petowneravailability(title,start,end,days,petowner_id) VALUES ('".$title."','".$start."', '".$end."','".$days."','".$petownerId."')";
$q = $pdo->prepare($sql);
$q->execute();

?>
