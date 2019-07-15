<?php 
$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
try {
 	require "../dbh-inic.php";
} catch(Exception $e) {
	exit('Unable to connect to database.');
}
$sql = "UPDATE hotelowneravailibility SET title=?, start=?, end=? WHERE id=?";
$q = $pdo->prepare($sql);
$q->execute(array($title,$start,$end,$id));

?>