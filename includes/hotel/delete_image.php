<?php
  session_start();
  include('../dbh-inic.php');
  ob_start();
  if(isset($_SESSION['id'])){

    $sessionID=$_SESSION['id'];
    $hotelid=$_POST['hotel_id'];
    $image_name=$_POST['image_name'];
    $target_dir = "../../images2/$sessionID/$hotelid/";
    $file = $target_dir . basename($image_name);

    if (file_exists($file)){
      unlink($file);
    }

    header("Location: ../../hotelownerdashboard.php") ;
}
?>
