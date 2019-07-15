<?php
include('../dbh-inic.php');
$json = array();
$requete = "SELECT * FROM petsitteravailability ORDER BY id";

$resultat = $pdo->query($requete) or die(print_r($pdo->errorInfo()));
echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
?>
