<?php  
include('dbh-inic.php');
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$days =$_POST['days'];
$sql = "INSERT INTO hotelowneravailibility(title,start,end,days) VALUES ('".$title."','".$start."', '".$end."','".$days."')";
$q = $pdo->prepare($sql);
$q->execute();

?>
