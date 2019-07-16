<?php
include("../dbh-inic.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
    $userid = $_SESSION["id"];
    $petid = $_POST["pet_id"];
    $petimage = $_POST["petimage"];
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

    if (isset($_POST["dogsize"])){
        try {

            $stmt = $pdo->prepare("UPDATE pets SET name='$name',size='$size',birthdate='$birthdate',
              sex='$sex',breed='$breed',chipnumber='$chip',description='$description',sterilized='$sterilized',
              vaccinations='$vaccinations',kennel_cough='$kennel',allergies='$allergies',medication='$medication',with_dogs='$alongwithdogs',
              with_children='$alongwithchildren',with_cats='$alongwithcats',walking_routine='$walkingroutine',eating_routine='$eatingroutine',
              sleep_place='$sleep_place',vetname='$vetname',vetphone='$vetphone',vetaddress='$vetaddress',insurer='$insurer',policy_number='$policynumber',emergency_contact='$emergencycontact' where id='$petid'");
            $stmt->execute();
            $stmt = null;
            header ('Location: ../../petowner_dashboard.php');
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
            header ('Location: ../../petowner_dashboard.php');
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

?>
