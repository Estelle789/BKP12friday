<?php 
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
 try{
     require '../dbh-inic.php';
 }catch(PDOException $e){
     exit('unable to connect with database  that cause you cant availible for connection');

 }
 $sql = "INSERT INTO petowneravailibility(title,start,end) VALUES ('".$title."','".$start."', '".$end."')";
$q = $pdo->prepare($sql);
$q->execute();

 
?>