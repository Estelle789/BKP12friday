<?php
include('dbh-inic.php');
$id = $_POST['id'];
if(isset($_POST['id'])){
$deleteEvent = "DELETE from hotelowneravailibility WHERE id='$id'";
$deletePrepare=$pdo->prepare($deleteEvent);
$deletePrepare->execute();
}
?>
