<?php
include("../dbh-inic.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
    $userid = $_SESSION["id"];
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

    $stmt = $pdo->prepare("INSERT INTO `pets` (`user_id`, `name`, `size`, `animal`, `birthdate`, `sex`, `breed`, `chipnumber`, `description`, `sterilized`, `vaccinations`, `kennel_cough`, `allergies`, `medication`, `with_dogs`, `with_children`, `with_cats`, `walking_routine`, `eating_routine`, `sleep_place`, `vetname`, `vetphone`, `vetaddress`, `insurer`, `policy_number`, `emergency_contact`) VALUES (:userid, :name, :dogsize, 'Dog', :birthdate, :sex, :breed, :chip, :description, :sterilized, :vaccinations, :kennel, :allergies, :medication, :alongwithdogs, :alongwithchildren, :alongwithcats, :walkingroutine, :eatingroutine, :sleep_place, :vetname, :vetphone, :vetaddress, :insurer, :policynumber, :emergencycontact);");
    $stmt->bindParam (":userid", $userid, PDO::PARAM_STR);
    $stmt->bindParam (":name", $name, PDO::PARAM_STR);
    $stmt->bindParam (":dogsize", $dogsize, PDO::PARAM_STR);
    $stmt->bindParam (":birthdate", $birthdate, PDO::PARAM_STR);
    $stmt->bindParam (":sex", $sex, PDO::PARAM_STR);
    $stmt->bindParam (":breed", $breed, PDO::PARAM_STR);
    $stmt->bindParam (":chip", $chip, PDO::PARAM_STR);
    $stmt->bindParam (":description", $description, PDO::PARAM_STR);
    $stmt->bindParam (":sterilized", $sterilized, PDO::PARAM_STR);
    $stmt->bindParam (":vaccinations", $vaccinations, PDO::PARAM_STR);
    $stmt->bindParam (":kennel", $kennel, PDO::PARAM_STR);
    $stmt->bindParam (":allergies", $allergies, PDO::PARAM_STR);
    $stmt->bindParam (":medication", $medication, PDO::PARAM_STR);
    $stmt->bindParam (":alongwithdogs", $alongwithdogs, PDO::PARAM_STR);
    $stmt->bindParam (":alongwithchildren", $alongwithchildren, PDO::PARAM_STR);
    $stmt->bindParam (":alongwithcats", $alongwithcats, PDO::PARAM_STR);
    $stmt->bindParam (":walkingroutine", $walkingroutine, PDO::PARAM_STR);
    $stmt->bindParam (":eatingroutine", $eatingroutine, PDO::PARAM_STR);
    $stmt->bindParam (":sleep_place", $sleep_place, PDO::PARAM_STR);
    $stmt->bindParam (":vetname", $vetname, PDO::PARAM_STR);
    $stmt->bindParam (":vetphone", $vetphone, PDO::PARAM_STR);
    $stmt->bindParam (":vetaddress", $vetaddress, PDO::PARAM_STR);
    $stmt->bindParam (":insurer", $insurer, PDO::PARAM_STR);
    $stmt->bindParam (":policynumber", $policynumber, PDO::PARAM_STR);
    $stmt->bindParam (":emergencycontact", $emergencycontact, PDO::PARAM_STR);
    $stmt->execute();
    $stmt = null;
    header ('Location: ../../petowner_dashboard.php');
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    }
    if (!(isset($_POST["dogsize"]))){
        try {
    $stmt = $pdo->prepare("INSERT INTO `pets` (`user_id`, `name`, `size`, `animal`, `birthdate`, `sex`, `breed`, `chipnumber`, `description`, `sterilized`, `vaccinations`, `kennel_cough`, `allergies`, `medication`, `with_dogs`, `with_children`, `with_cats`, `walking_routine`, `eating_routine`, `sleep_place`, `vetname`, `vetphone`, `vetaddress`, `insurer`, `policy_number`, `emergency_contact`) VALUES (:userid, :name, null, 'Cat', :birthdate, :sex, :breed, :chip, :description, :sterilized, null, null, :allergies, :medication, :alongwithdogs, :alongwithchildren, :alongwithcats, :walkingroutine, :eatingroutine, :sleep_place, :vetname, :vetphone, :vetaddress, :insurer, :policynumber, :emergencycontact);");
    $stmt->bindParam (":userid", $userid, PDO::PARAM_STR);
    $stmt->bindParam (":name", $name, PDO::PARAM_STR);
    $stmt->bindParam (":birthdate", $birthdate, PDO::PARAM_STR);
    $stmt->bindParam (":sex", $sex, PDO::PARAM_STR);
    $stmt->bindParam (":breed", $breed, PDO::PARAM_STR);
    $stmt->bindParam (":chip", $chip, PDO::PARAM_STR);
    $stmt->bindParam (":description", $description, PDO::PARAM_STR);
    $stmt->bindParam (":sterilized", $sterilized, PDO::PARAM_STR);
    $stmt->bindParam (":allergies", $allergies, PDO::PARAM_STR);
    $stmt->bindParam (":medication", $medication, PDO::PARAM_STR);
    $stmt->bindParam (":alongwithdogs", $alongwithdogs, PDO::PARAM_STR);
    $stmt->bindParam (":alongwithchildren", $alongwithchildren, PDO::PARAM_STR);
    $stmt->bindParam (":alongwithcats", $alongwithcats, PDO::PARAM_STR);
    $stmt->bindParam (":walkingroutine", $walkingroutine, PDO::PARAM_STR);
    $stmt->bindParam (":eatingroutine", $eatingroutine, PDO::PARAM_STR);
    $stmt->bindParam (":sleep_place", $sleep_place, PDO::PARAM_STR);
    $stmt->bindParam (":vetname", $vetname, PDO::PARAM_STR);
    $stmt->bindParam (":vetphone", $vetphone, PDO::PARAM_STR);
    $stmt->bindParam (":vetaddress", $vetaddress, PDO::PARAM_STR);
    $stmt->bindParam (":insurer", $insurer, PDO::PARAM_STR);
    $stmt->bindParam (":policynumber", $policynumber, PDO::PARAM_STR);
    $stmt->bindParam (":emergencycontact", $emergencycontact, PDO::PARAM_STR);


    $stmt->execute();
    $stmt = null;
    header ('Location: ../../petowner_dashboard.php');
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
    }

?>
