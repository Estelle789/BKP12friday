<?php  
include('../dbh-inic.php');
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$days =$_POST['days'];
$hotel_id = $_POST['hotel_id'];
$sql = "INSERT INTO hotelowneravailibility(title,start,end,days,hotel_id) VALUES ('".$title."','".$start."', '".$end."','".$days."','".$hotel_id."')";
$q = $pdo->prepare($sql);
$q->execute();

?>
