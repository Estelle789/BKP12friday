<?php
$json = array();
$requete = "SELECT * FROM dogwalkeravailibility ORDER BY id";
try {
    require_once "../dbh-inic.php";
} catch(Exception $e) {
   exit('Unable to connect to database.');
}
$resultat = $pdo->query($requete) or die(print_r($pdo->errorInfo()));
echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));
?>