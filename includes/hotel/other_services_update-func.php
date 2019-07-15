<?php
include '../dbh-inic.php';
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['query'])) {
    // Querying
    $hot = "SELECT * FROM hotels  where  user_id= '".$_SESSION['id']."' "; 
 
    $hotel = $pdo->prepare($hot);
    $hotel->execute();
    $hotels = $hotel-> fetchAll();
     $hotel_id = $hotels[0]['id'];
     echo $hotel_id;
    /*#$ Washing Queries  */
    $washingall = $_POST['__washing'];
    $dogWashing = $_POST['__dogWashing'];
    $dogWashingH = $_POST['dogWashingh'];
    $catWashing = $_POST['__catWashing'];
    $catWashingH = $_POST['_catWashh'];
    /*# Nail Clipping Queries Equipment #*/
    $nailclipping = $_POST['__nailclipping'];
    $dogNailclipping = $_POST['_nailClippingdog'];
    $dnhighSession = $_POST['_dnhighSession'];
    $ncat = $_POST['_catNailclipping'];
    $nhcat = $_POST['_nhcat'];
    /*# Gromming And trimming Queries Equipment */
    $gt = $_POST['gt'];
    $dogGt = $_POST['dogt'];
    $dgtHigh = $_POST['gth'];
    $cgtt = $_POST['cgtt'];
    $cgthh = $_POST['cgth'];
    /* Medication Queries Equipment  */
    $medication = $_POST['medicate'];
    $dogMedic = $_POST['dogMedic'];
    $dmH = $_POST['dmH'];
    $catMedication = $_POST['catMedications'];
    $cmHigh = $_POST['cmhigh'];
    //Washing
    $dwS = $_POST['dwS'];
    $dwM = $_POST['dwM'];
    $dwL = $_POST['dwL'];
    $dwXL = $_POST['dwXL'];
    $cw = $_POST['cw'];
    //HighSession Washing
    $dwhS = $_POST['dwhS'];
    $dwhM = $_POST['dwhM'];
    $dwhL = $_POST['dwhL'];
    $dwhXL = $_POST['dwhXL'];
    $cwH = $_POST['cwH'];
    //nailclipping
    $dnS = $_POST['dnS'];
    $dnM = $_POST['dnM'];
    $dnL = $_POST['dnL'];
    $dnXL = $_POST['dnXL'];
    $cn = $_POST['cn'];
    //High Session nailclipping
    $dnhS = $_POST['dnhS'];
    $dnhM = $_POST['dnhM'];
    $dnhL = $_POST['dnhL'];
    $dnhXL = $_POST['dnhXL'];
    $cnH = $_POST['cnH'];
    //Gromming and Trimming
    $dgtS = $_POST['dgtS'];
    $dgtM = $_POST['dgtM'];
    $dgtL = $_POST['dgtL'];
    $dgtXL = $_POST['dgtXL'];
    $cgt = $_POST['cgt'];
    //High Session Gromming and trimming
    $dgthS = $_POST['dgthS'];
    $dgthM = $_POST['dgthM'];
    $dgthL = $_POST['dgthL'];
    $dgthXL = $_POST['dgthXL'];
    $cgtH = $_POST['cgtH'];
    //Medication
    $dmS = $_POST['dmS'];
    $dmM = $_POST['dmM'];
    $dmL = $_POST['dmL'];
    $dmXL = $_POST['dmXL'];
    $cm = $_POST['cm'];
    // High Session Medication
    $dmhS = $_POST['dmhS'];
    $dmhM = $_POST['dmhM'];
    $dmhL = $_POST['dmhL'];
    $dmhXL = $_POST['dmhXL'];
    $cmH = $_POST['cmH'];

    if ($washingall !== '') {
        $washingg = "UPDATE services SET services_washing='$washingall' where hotel_id='$hotel_id'";
        $execWashing = $pdo->prepare($washingg);
        //echo $washingg;
        $execWashing->execute();

        if ($dogWashing !== '') {
            $dwQ = "UPDATE services SET s_W_s_price ='$dwS' ,s_W_m_price='$dwM'  ,s_W_l_price='$dwL', s_W_xl_price='$dwXL'  where hotel_id='$hotel_id'";
            $dwQr = $pdo->prepare($dwQ);
            //echo $dwQ;
            $dwQr->execute();
        }
        if ($dogWashing == '') {
            $dwQnull = "UPDATE services SET s_W_s_price =null ,s_W_m_price=null  ,s_W_l_price=null , s_W_xl_price=null  where hotel_id='$hotel_id'";
            $dwQnull_r = $pdo->prepare($dwQnull);
            $dwQnull_r->execute();
        }
        if ($washingall == '') {
            $washing_Default = "UPDATE services SET services_washing=null , s_W_s_price=null ,s_W_m_price=null ,s_W_l_price=null , s_W_xl_price=null ,s_W_cat_price=null where hotel_id='$hotel_id' ";
            $washing_Default_r = $pdo->prepare($washing_Default);
            // echo $washing_Default;
            $washing_Default_r->execute();

        }
        if ($dogWashingH !== '') {
            $dwQh = "UPDATE services SET highSession_W_S='$dwhS', highSession_W_M='$dwhM', highSession_W_L='$dwhL', highSession_W_XL='$dwhXL' where hotel_id='$hotel_id' ";
            $dwQh_R = $pdo->prepare($dwQh);
            $dwQh_R->execute();
        }
        if ($dogWashingH == '') {
            $dwQh_null = "UPDATE services SET highSession_W_S=null, highSession_W_M=null, highSession_W_L=null, highSession_W_XL=null where hotel_id='$hotel_id' ";
            $dwQh_null_R = $pdo->prepare($dwQh_null);
            $dwQh_null_R->execute();
        }
        if ($catWashing !== '') {
            $cwQ = "UPDATE services SET s_W_cat_price='$cw'  where hotel_id='$hotel_id'";
            $cwQ_r = $pdo->prepare($cwQ);
            $cwQ_r->execute();
        }
        if ($catWashing == '') {
            $cwQ_null = "UPDATE services  SET s_W_cat_price=null  where hotel_id='$hotel_id'";
            $cwQ_r_null = $pdo->prepare($cwQ_null);
            $cwQ_r_null->execute();
        }
        if ($catWashingH !== '') {
            $cwhQ = "UPDATE services  SET highSession_W_cat='$cwH'  where hotel_id='$hotel_id'";
            $cwhQ_r = $pdo->prepare($cwhQ);
            $cwhQ_r->execute();
        }
        if ($catWashingH == '') {
            $cwhQ_null = "UPDATE services  SET highSession_W_cat=null  where hotel_id='$hotel_id'";
            $cwhQ_null_r = $pdo->prepare($cwhQ_null);
            $cwhQ_null_r->execute();
        }
        if ($washingall == '') {
            $wQ_null = "UPDATE services  SET services_washing = null , s_W_s_price=null , s_W_m_price=null, s_W_l_price=null, s_W_xl_price=null ,s_W_cat_price=null, highSession_W_S=null, highSession_W_M=null, highSession_W_L=null, highSession_W_XL=null, highSession_W_cat=null where hotel_id='$hotel_id'";
            $wQ_null_r = $pdo->prepare($wQ_null);
            $wQ_null_r->execute();
        }

    }
    /* End of all washing queries  */
    ///
    /* Nail Clipping Queires  */
    if ($nailclipping !== '') {
        $nQ = "UPDATE services  SET services_nailclipping='$nailclipping' where hotel_id='$hotel_id'";
        $nQ = $pdo->prepare($nQ);
        $nQ->execute();
        if ($dogNailclipping !== '') {
            $ndQ = "UPDATE services  SET  s_N_s_price='$dnS' , s_N_m_price='$dnM', s_N_l_price='$dnL' , s_N_xl_price='$dnXL' where hotel_id='$hotel_id'";
            $ndQ_r = $pdo->prepare($ndQ);
            $ndQ_r->execute();
        }
        if ($dogNailclipping == '') {
            $ndQ_null = "UPDATE services  SET  s_N_s_price=null , s_N_m_price=null, s_N_l_price=null , s_N_xl_price=null where hotel_id='$hotel_id'";
            $ndQ_r_null = $pdo->prepare($ndQ_null);
            $ndQ_r_null->execute();
        }
        if ($dnhighSession !== '') {
            $dnhQ = "UPDATE services  SET highSession_N_S='$dnhS', highSession_N_M = '$dnhM', highSession_N_L='$dnhL', highSession_N_XL='$dnhXL' where hotel_id='$hotel_id'";
            $dnhQ_r = $pdo->prepare($dnhQ);
            $dnhQ_r->execute();
        }
        if ($dnhighSession == '') {
            $dnhQ_null = "UPDATE services  SET highSession_N_S=null, highSession_N_M =null, highSession_N_L=null, highSession_N_XL=null where hotel_id='$hotel_id'";
            $dnhQ_r_null = $pdo->prepare($dnhQ_null);
            $dnhQ_r_null->execute();
        }
        if ($ncat !== '') {
            $nccQ = "UPDATE services  SET s_N_cat_price='$cn' where hotel_id='$hotel_id'";
            $nccQ_r = $pdo->prepare($nccQ);
            $nccQ_r->execute();
        }
        if ($ncat == '') {
            $nccQ_null = "UPDATE services  SET s_N_cat_price=null where hotel_id='$hotel_id'";
            $nccQ_r_null = $pdo->prepare($nccQ_null);
            $nccQ_r_null->execute();
        }
        if ($nhcat !== '') {
            $nhcatQ = "UPDATE services  SET highSession_N_cat='$cn' where hotel_id='$hotel_id'";
            $nhcatQ_r = $pdo->prepare($nhcatQ);
            $nhcatQ_r->execute();
        }
        if ($nhcat == '') {
            $nhcatQ_null = "UPDATE services SET highSession_N_cat=null where hotel_id='$hotel_id'";
            $nhcatQ_r_null = $pdo->prepare($nhcatQ_null);
            $nhcatQ_r_null->execute();
        }
        if ($nailclipping == '') {
            $ncdQ_null = "UPDATE services SET  services_nailclipping=null, s_N_s_price=null , s_N_m_price=null, s_N_l_price=null, s_N_xl_price=null ,s_N_cat_price=null , highSession_N_S=null , highSession_N_L=null , highSession_N_XL=null, highSession_N_cat=null where hotel_id='$hotel_id'";
            $ncdQ_null_r = $pdo->prepare($ncdQ_null);
            $ncdQ_null_r->execute();
        }
    }
    /* End of Nail Clipping */
    ///
    /* Gromming And trimming */
    if ($gt !== '') {
        $gtQ = "UPDATE  services SET services_GM='$gt' where hotel_id='$hotel_id'";
        $gtQ_r = $pdo->prepare($gtQ);
        $gtQ_r->execute();

        if ($dogGt !== '') {
            $dgtQ = "UPDATE services SET s_GM_s_price='$dgtS',  s_GM_m_price='$dgtM', s_GM_l_price='$dgtL' ,s_GM_xl_price='$dgtXL'  where hotel_id='$hotel_id'";
            $dgtQ_r = $pdo->prepare($dgtQ);
            $dgtQ_r->execute();

        }
        if ($dogGt == '') {
            $dgtQ_null = "UPDATE services SET s_GM_s_price=null,  s_GM_m_price=null, s_GM_l_price=null ,s_GM_xl_price=null  where hotel_id='$hotel_id'";
            $dgtQ_null_r = $pdo->prepare($dgtQ_null);
            $dgtQ_null_r->execute();

        }
        if ($dgtHigh !== '') {
            $dgthQ = "UPDATE services SET highSession_GM_S='$dgthS' ,highSession_GM_M='$dgthM', highSession_GM_L = '$dgthL', highSession_GM_XL='$dgthXL' where hotel_id='$hotel_id'";
            $dgthQ_r = $pdo->prepare($dgthQ);
            $dgthQ_r->execute();
        }
        if ($dgtHigh == '') {
            $gthQ_null = "UPDATE services SET highSession_GM_S=null ,highSession_GM_M=null, highSession_GM_L = null, highSession_GM_XL=null where hotel_id='$hotel_id'";
            $gthQ_null_r = $pdo->prepare($gthQ_null);
            $gthQ_null_r->execute();

        }
        if ($cgtt !== '') {
            $cgtQ = "UPDATE  services SET s_GM_cat_price='$cgt' where hotel_id='$hotel_id'";
            $cgtQ_r = $pdo->prepare($cgtQ);
            $cgtQ_r->execute();
        }
        if ($cgtt == '') {
            $cgtQ_null = "UPDATE  services SET s_GM_cat_price=null where hotel_id='$hotel_id'";
            $cgtQ_null_r = $pdo->prepare($cgtQ_null);
            $cgtQ_null_r->execute();
        }
        if ($cgthh !== '') {
            $cgthQ = "UPDATE  services SET highSession_GM_cat='$cgtH' where hotel_id='$hotel_id'";
            $cgthQ_r = $pdo->prepare($cgthQ);
            $cgthQ_r->execute();
        }
        if ($cgthh == '') {
            $cgthQ_null = "UPDATE  services SET highSession_GM_cat=null where hotel_id='$hotel_id'";
            $cgthQ_null_r = $pdo->prepare($cgthQ_null);
            $cgthQ_null_r->execute();
        }
        if ($gt == '') {
            $ctdQ_null = "UPDATE services SET  services_GM=null , s_GM_s_price=null,  s_GM_m_price=null, s_GM_l_price=null ,s_GM_xl_price=null, s_GM_cat_price=null ,
           highSession_GM_S=null ,highSession_GM_M=null, highSession_GM_L = null, highSession_GM_XL=null, highSession_GM_cat=null where hotel_id='$hotel_id'";
            $ctdQ_null_r = $pdo->prepare($ctdQ_null);
            $ctdQ_null_r->execute();

        }

    }

    if ($medication !== '') {
        $mQ = "UPDATE services SET  services_medication='$medication' where hotel_id = '$hotel_id'";
        $mQ_r = $pdo->prepare($mQ);
        $mQ_r->execute();

        if ($dogMedic !== '') {
            $dmQ = "UPDATE  services SET s_M_s_price='$dmS' ,s_M_m_price='$dmM' , s_M_l_price='$dmL', s_M_xl_price='$dmXL' where hotel_id='$hotel_id'";
            $dmQ_r = $pdo->prepare($dmQ);
            $dmQ_r->execute();
        }
        if ($dogMedic == '') {
            $dmQ_null = "UPDATE  services SET s_M_s_price=null ,s_M_m_price=null , s_M_l_price=null, s_M_xl_price=null where hotel_id='$hotel_id'";
            $dmQ_null_r = $pdo->prepare($dmQ_null);
            $dmQ_null_r->execute();
        }
        if ($dmH !== '') {
            $dmhQ = "UPDATE services SET highSession_M_S='$dmhS', highSession_M_M='$dmhM' , highSession_M_L='$dmhL', highSession_M_XL='$dmhXL' where hotel_id ='$hotel_id'";
            $dmhQ_r = $pdo->prepare($dmhQ);
            $dmhQ_r->execute();
        }
        if ($dmH == '') {
            $dmhQ_null = "UPDATE services SET highSession_M_S=null, highSession_M_M=null , highSession_M_L=null, highSession_M_XL=null where hotel_id ='$hotel_id'";
            $dmhQ_null_r = $pdo->prepare($dmhQ_null);
            $dmhQ_null_r->execute();
        }
        if ($catMedication !== '') {
            $cmQ = "UPDATE services SET s_M_cat_price ='$cm' where hotel_id='$hotel_id'";
            $cmQ_r = $pdo->prepare($cmQ);
            $cmQ_r->execute();
        }
        if ($catMedication == '') {
            $cmQ = "UPDATE services SET s_M_cat_price=null where hotel_id='$hotel_id'";
            $cmQ_r = $pdo->prepare($cmQ);
            $cmQ_r->execute();
        }
        if ($cmHigh !== '') {
            $cmhQ = "UPDATE services SET highSession_M_cat = '$cmH' where hotel_id='$hotel_id'";
            $cmhQ_r = $pdo->prepare($cmhQ);
            $cmhQ_r->execute();
        }
        if ($cmHigh == '') {
            $cmhQ_null = "UPDATE services SET highSession_M_cat=null where hotel_id='$hotel_id'";
            $cmhQ_null_r = $pdo->prepare($cmhQ_null);
            $cmhQ_null_r->execute();
        }
        if ($medication == '') {
            $mQ_null = "UPDATE services SET  services_medication=null ,s_M_s_price=null ,s_M_m_price=null , s_M_l_price=null, s_M_xl_price=null, s_M_cat_price =null,
            highSession_M_S=null, highSession_M_M=null , highSession_M_L=null, highSession_M_XL=null,highSession_M_cat=null where hotel_id = '$hotel_id'";
            $mQ_null_r = $pdo->prepare($mQ_null);
            $mQ_null_r->execute();
        }
    }

    header("Location: ../../addHotel.php?info=completed");

}



