<?php

include('../dbh-inic.php');

  //We count all the files loaded to the system
  session_start();

  $hotelid = $_POST['hotel_id'];
  try {
      $stmt = $pdo->prepare("DELETE FROM hotels where id='$hotelid'");
      $stmt->execute();
      $stmt = null;
      header ('Location: ../../hotelownerdashboard.php');
  }catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
  }
?>
