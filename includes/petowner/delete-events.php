<?php error_reporting(E_ALL); ini_set('display_errors', 1);
 
include('../dbh-inic.php');
if(isset($_POST['id'])){
$sql = "DELETE from petowneravailability where id='".$_POST['id']."' ";
$q = $pdo->prepare($sql);
$q->execute();

}
    
?>
