
<?php
include '../dbh-inic.php';
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
    $dogBoarding = $_POST['dogBoarding'];
    $catBoarding = $_POST['cbchk'];
    $highSession = $_POST['dBhS'];
    $highSessioncat = $_POST['highSessioncat'];

    $dogDaycare = $_POST['dogDaycare'];
    $highDogday = $_POST['highDogdaycare'];
    $catDaycare = $_POST['catDaycare'];
    $catDaycareHigh = $_POST['highSdcat'];
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
    if ($boarding !== '') {

        $boardingQ = "UPDATE services SET services_boarding = '$boarding' where hotel_id= '$hotel_id' ";
        $boardingQr = $pdo->prepare($boardingQ);
        $boardingQr->execute();
        if ($dogBoarding !== '') {

            $boardingDog = "UPDATE services SET  s_B_s_price = '$dbS' ,s_B_m_price='$dbM' ,s_B_l_price='$dbL', s_B_xl_price='$dbXL' where hotel_id= '$hotel_id' ";
            $boardingDogqR = $pdo->prepare($boardingDog);
            $boardingDogqR->execute();
        }
        if ($dogBoarding == '') {

            $boardingDog = "UPDATE services SET  s_B_s_price = null ,s_B_m_price=null ,s_B_l_price=null, s_B_xl_price=null where hotel_id= '$hotel_id' ";
            $boardingDogqR = $pdo->prepare($boardingDog);
            $boardingDogqR->execute();
        }
        if ($catBoarding !== '') {
            $catB = "UPDATE services SET s_B_cat_price='$cb' where hotel_id= '$hotel_id' ";
            $qCatb = $pdo->prepare($catB);
            $qCatb->execute();
        }
        if ($catBoarding == '') {
            $catBn = "UPDATE services SET s_B_cat_price=null where hotel_id= '$hotel_id' ";
            $qCatbn = $pdo->prepare($catBn);
            $qCatbn->execute();
        }
        if ($highSession !== '') {
            $highS = "UPDATE services SET highSession_S='$dbhS', highSession_M='$dbhM' , highSession_L='$dbhL', highSession_XL='$dbhXL' where hotel_id='$hotel_id'";
            $positiveResult = $pdo->prepare($highS);
            $positiveResult->execute();
        }
        if ($highSession == '') {
            $highS_n = "UPDATE services SET highSession_S=null, highSession_M=null , highSession_L=null, highSession_XL=null where hotel_id='$hotel_id'";
            $positiveResult_n = $pdo->prepare($highS_n);
            $positiveResult_n->execute();
        }
        if ($highSessioncat !== '') {
            $highC = "UPDATE  services SET highSession_cat= '$cbH' where hotel_id='$hotel_id'";
            $positiveCathigh = $pdo->prepare($highC);
            $positiveCathigh->execute();
        }
        if ($highSessioncat == '') {
            $highC = "UPDATE  services SET highSession_cat= null where hotel_id='$hotel_id'";
            $positiveCathigh = $pdo->prepare($highC);
            $positiveCathigh->execute();
        }
        if ($boarding == '') {
            $nullBoarding = "UPDATE services  SET services_boarding=null , s_B_s_price=null , s_B_m_price=null, s_B_l_price=null , s_B_xl_price=null ,s_B_cat_price=null ,highSession_S=null, highSession_M=null, highSession_L=null, highSession_XL=null where hotel_id='$hotel_id'";
            $nullResult = $pdo->prepare($nullBoarding);
            $nullResult->execute();

        }

    }

    if ($daycare !== '') {
        $daycareQ = "UPDATE services SET services_daycare = '$daycare' where hotel_id= '$hotel_id' ";
        $daycareQr = $pdo->prepare($daycareQ);
        $daycareQr->execute();

        if ($dogDaycare !== '') {
            $positiveDaycare = "UPDATE services SET  s_D_s_price='$ddS' , s_D_m_price='$ddM', s_D_l_price='$ddL' , s_D_xl_price='$ddXL' where hotel_id='$hotel_id'";
            $positiveDogdaycare = $pdo->prepare($positiveDaycare);
            $positiveDogdaycare->execute();

        }

        if ($dogDaycare == '') {
            $negativeDaycare = "UPDATE services SET  s_D_s_price=null , s_D_m_price=null, s_D_l_price=null , s_D_xl_price=null where hotel_id='$hotel_id'";
            $negativeDogdaycare = $pdo->prepare($negativeDaycare);
            $negativeDogdaycare->execute();
        }
        if ($highDogday !== '') {
            $positiveDDhigh = "UPDATE services SET highSession_D_S='$ddhS' , highSession_D_M='$ddhM',highSession_D_L='$ddhL', highSession_D_XL='$ddhXL' where hotel_id='$hotel_id'";
            $positiveResultddHigh = $pdo->prepare($positiveDDhigh);
            $positiveResultddHigh->execute();

        }
        if ($highDogday == '') {
            $positiveDDhigh = "UPDATE services SET highSession_D_S=null , highSession_D_M=null ,highSession_D_L=null, highSession_D_XL=null where hotel_id='$hotel_id'";
            $positiveResultddHigh = $pdo->prepare($positiveDDhigh);
            $positiveResultddHigh->execute();
        }
        if ($catDaycare !== '') {
            $positiveCatd = "UPDATE services SET s_D_cat_price='$cd' where hotel_id='$hotel_id'";
            $positiveCatr = $pdo->prepare($positiveCatd);
            $positiveCatr->execute();
        }
        if ($catDaycare == '') {
            $negativeCatd = "UPDATE services SET s_D_cat_price=null where hotel_id='$hotel_id'";
            $negativeCatr = $pdo->prepare($negativeCatd);
            $negativeCatr->execute();
        }
        if ($catDaycareHigh !== '') {
            $positiveCatdh = "UPDATE services SET highSession_D_cat='$cdH' where hotel_id='$hotel_id'";
            $positiveCatrh = $pdo->prepare($positiveCatdh);
            $positiveCatrh->execute();
        }
        if ($catDaycareHigh == '') {
            $negativeCatdhg = "UPDATE services SET highSession_D_cat=null where hotel_id='$hotel_id'";
            $negativeCatrhg = $pdo->prepare($negativeCatdhg);
            $negativeCatrhg->execute();
        } /*
    if ($daycare == '') {
    $nullDaycare = "UPDATE services  SET services_daycare=null , s_D_s_price=null, s_D_m_price=null ,s_D_l_price=null, s_D_xl_price=null ,s_D_cat_price=null
    ,highSession_D_S=null , highSession_D_M=null ,highSession_D_L=null, highSession_D_XL=null ,highSession_D_cat=null where hotel_id='$hotel_id'";
    $setNegative = $pdo->prepare($nullDaycare);
    $setNegative->execute();

    }*/

    }

    header("Location: ../../services.php?info=completed");
    exit();

}
?>