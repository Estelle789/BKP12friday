<?php
include("../dbh-inic.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
    $userid = $_SESSION["id"];
    $petid = $_POST["pet_id"];
    //$petimage = $_FILES["petimage"];
    $name = $_POST["name"];
    if (isset($_POST["dogsize"])) { $dogsize = $_POST["dogsize"];}
    $birthdate = $_POST["birthdate"];
    $sex = $_POST["sex"];
    $breed = $_POST["breed"];
    $chip = $_POST["chip"];
    $description = $_POST["description"];
    $sterilized = $_POST["sterilized"];
    $alongwithdogs = $_POST["alongwithdogs"];
    $alongwithchildren = $_POST["alongwithchildren"];
    $alongwithcats = $_POST["alongwithcats"];
    $walkingroutine = $_POST["walkingroutine"];
    $eatingroutine = $_POST["eatingroutine"];
    $sleep_place = $_POST["sleep_place"];
    if (isset($_POST["vaccinations"])){ $vaccinations = $_POST["vaccinations"]; }
    if (isset($_POST["kennel"])){ $kennel = $_POST["kennel"]; }
    $allergies = $_POST["allergies"];
    $medication = $_POST["medication"];
    $vetname = $_POST["vetname"];
    $vetphone = $_POST["vetphone"];
    $vetaddress = $_POST["vetaddress"];
    $insurer = $_POST["insurer"];
    $policynumber = $_POST["policynumber"];
    $emergencycontact = $_POST["emergencycontact"];

/*
    $target_dir = "../../images2/$userid/$petid/";

    if (!file_exists($target_dir)){
      mkdir($target_dir);
    } else {
      foreach ( glob($target_dir . '*') as $file ) {
        unlink($file);
      }
      rmdir($target_dir);
      mkdir($target_dir);
    }

    if ($_FILES["petimage"]["name"] != NULL) {
      $target_file = $target_dir . basename($_FILES["petimage"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      $check = getimagesize($_FILES["petimage"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }

      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["petimage"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
      } else {

        if (move_uploaded_file($_FILES["petimage"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["petimage"]["name"]). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
*/




    if (isset($_POST["dogsize"])){
        try {

            $stmt = $pdo->prepare("UPDATE pets SET name='$name',size='$dogsize',birthdate='$birthdate',
              sex='$sex',breed='$breed',chipnumber='$chip',description='$description',sterilized='$sterilized',
              vaccinations='$vaccinations',kennel_cough='$kennel',allergies='$allergies',medication='$medication',with_dogs='$alongwithdogs',
              with_children='$alongwithchildren',with_cats='$alongwithcats',walking_routine='$walkingroutine',eating_routine='$eatingroutine',
              sleep_place='$sleep_place',vetname='$vetname',vetphone='$vetphone',vetaddress='$vetaddress',insurer='$insurer',policy_number='$policynumber',emergency_contact='$emergencycontact' where id='$petid'");
            $stmt->execute();
            $stmt = null;
            //header ('Location: ../../petowner_dashboard.php');
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    if (!(isset($_POST["dogsize"]))){
        try {
            $stmt = $pdo->prepare("UPDATE pets SET name='$name',birthdate='$birthdate',
            sex='$sex',breed='$breed',chipnumber='$chip',description='$description',sterilized='$sterilized',
            allergies='$allergies',medication='$medication',with_dogs='$alongwithdogs',
            with_children='$alongwithchildren',with_cats='$alongwithcats',walking_routine='$walkingroutine',eating_routine='$eatingroutine',
            sleep_place='$sleep_place',vetname='$vetname',vetphone='$vetphone',vetaddress='$vetaddress',insurer='$insurer',policy_number='$policynumber',emergency_contact='$emergencycontact' where id='$petid'");

            $stmt->execute();
            $stmt = null;
            //header ('Location: ../../petowner_dashboard.php');
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

?>
