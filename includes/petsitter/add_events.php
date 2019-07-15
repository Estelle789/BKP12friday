<?php  
include('../dbh-inic.php');
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$days =$_POST['days'];
$petsitterId=$_POST['petsitterid'];
$sql = "INSERT INTO petsitteravailability(title,start,end,days,petsitter_id) VALUES ('".$title."','".$start."', '".$end."','".$days."','".$petsitterId."')";
$q = $pdo->prepare($sql);
$q->execute();

?>
