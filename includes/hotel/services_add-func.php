<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../dbh-inic.php';
$hot = "SELECT * FROM hotels  where  user_id= '".$_SESSION['id']."' "; 
echo $hot;
$hotel = $pdo->prepare($hot);
$hotel->execute();
$hotels = $hotel-> fetchAll();
 $hotel_id = $hotels[0]['id'];
 echo $hotel_id;
if (isset($_POST['query'])) {
    $boarding = $_POST['boarding'];
    $daycare = $_POST['daycare'];
  
    //Boarding
    $dbS = $_POST['dbS'];
    $dbM = $_POST['dbM'];
    $dbL = $_POST['dbL'];
    $dbXL = $_POST['dbXL'];
    $cb = $_POST['cb'];
    //Daycare
    $ddS = $_POST['ddS'];
    $ddM = $_POST['ddM'];
    $ddL = $_POST['ddL'];
    $ddXL = $_POST['ddXL'];
    $cd = $_POST['cd'];
    //High Session boarding
    $dbhS = $_POST['dbhS'];
    $dbhM = $_POST['dbhM'];
    $dbhL = $_POST['dbhL'];
    $dbhXL = $_POST['dbhXL'];
    $cbH = $_POST['cbH'];
    //High Session daycare
    $ddhS = $_POST['ddhS'];
    $ddhM = $_POST['ddhM'];
    $ddhL = $_POST['ddhL'];
    $ddhXL = $_POST['ddhXL'];
    $cdH = $_POST['cdH'];
    // Animal Choosing
    $dog = "";
    $cat = "";
    if (!empty($dbs) || $dbS == on) {$dog = "Dog";} else { $dog = "";}
    if (!empty($cb) || $cb == on) {$cat = "Cat";} else { $cat = "";}
    if (empty($cb) && empty($dbs)) {$dog = "";
        $cat = "";}
    $insertQuery = "INSERT INTO `services`(
 `hotel_id`,
 `dog`,
 `cat`,
 `services_boarding`,
 `services_daycare`,
 `s_B_s_price`,
 `s_B_m_price`,
 `s_B_l_price`,
 `s_B_xl_price`,
 `s_B_cat_price`,
 `s_D_s_price`,
 `s_D_m_price`,
 `s_D_l_price`,
 `s_D_xl_price`,
 `s_D_cat_price`,
 `highSession_S`,
 `highSession_M`,
 `highSession_L`,
 `highSession_XL`,
 `highSession_cat`,
 `highSession_D_S`,
 `highSession_D_M`,
 `highSession_D_L`,
 `highSession_D_XL`,
 `highSession_D_cat`)
        VALUES ('$hotel_id','$dog','$cat','$boarding','$daycare',
        '$dbS', '$dbM','$dbL','$dbXL', '$cb',
        '$ddS','$ddM','$ddL','$ddXL','$cd',
        '$dbhS', '$dbhM','$dbhL','$dbhXL','$cbH',
        '$ddhS','$ddhM','$ddhL','$ddhXL','$cdH') ";
    $prepare = $pdo->prepare($insertQuery);
    $prepare->execute();
    if ($prepare == true) {
        header("Location: ../../otherServices.php?info=query_success");
        exit();
    } else {
        header("Location: ../../services.php?info=query_failled");
        exit();
    }
}


