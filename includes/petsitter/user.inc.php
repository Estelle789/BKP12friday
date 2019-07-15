<?php include '../dbh-inic.php';?>
<?php
session_start();
if (isset($_POST['stepsDone'])) {
    $city = $_POST['city'];
    $street = $_POST['street'];
    $picture = $_POST['picture'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $genderStiuation = "";
    if (!empty($gender)) {foreach ($gender as $sex) {$genderStiuation .= $sex;}}
    $dogs = $_POST['dogs'];
    $dogStiuation = "";
    if (!empty($dogs)) {foreach ($dogs as $dog) {$dogStiuation .= $dog;}}
    $km = $_POST['km'];
    $dogdaycare = $_POST['dogdaycare'];
    $dogdaycares = "";
    $maxVisit = $_POST['maxVisit'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $wlk = $_POST['walks'];
    $collect = $_POST['collect'];
    $collected = "";
    $visittime = $_POST['visitTime'];
    $visited = "";
    $walks = $_POST['walkHour'];
    $walked = "";
    $accomocancelation = $_POST['Ac'];
    $accomoStiuation = "";
    $babySittercancelation = $_POST['bP'];
    $babysitterStiuation = "";
    $fitSmall = $_POST['small'];
    $fitMedium = $_POST['medium'];
    $fitLarge = $_POST['large'];
    $fitXlarge = $_POST['Xlarge'];
    $building = $_POST['building'];
    $buildingType = "";
    $animal = $_POST['Cat'];
    $animalexist = "";
    $pupy = $_POST['pupy'];
    $adult = $_POST['adult'];
    $parent = $_POST['parent'];
    $gardentype = $_POST['garden'];
    $gardenchoiced = "";
    $availible = $_POST['availible'];
    $availibled = "";
    $cageeggs = $_POST['cageEggs'];
    $cageEggsexist = "";
    $highriskbreed = $_POST['highRiskBreed'];
    $breeded = "";
    $smoke = $_POST['smoke'];
    $smoked = "";
    $children = $_POST['children'];
    $childrenexist = "";
    $dogcouch = $_POST['dogCouch'];
    $isdogCouch = "";
    $sitterExper = $_POST['sitterExperience'];
    $title = $_POST['catchTitles'];
    $description = $_POST['descriptions'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $email3 = $_POST['email3'];
    $email4 = $_POST['email4'];
    $email5 = $_POST['email5'];
    $email6 = $_POST['email6'];
    $bank = $_POST['chooseBank'];
    if (!empty($dogcouch)) {foreach ($dogcouch as $dogcouched) {$isdogCouch .= $dogcouched;}}
    if (!empty($children)) {foreach ($children as $childed) {$childrenexist .= $childed;}}
    if (!empty($smoke)) {foreach ($smoke as $smoking) {$smoked .= $smoking;}}
    if (!empty($highriskbreed)) {foreach ($highriskbreed as $breeding) {$breeded .= $breeding;}}
    if (!empty($cageeggs)) {foreach ($cageeggs as $iscageEggs) {$cageEggsexist .= $iscageEggs;}}
    if (!empty($gardentype)) {foreach ($gardentype as $gardenchoice) {$gardenchoiced .= $gardenchoice;}}
    if (!empty($animal)) {foreach ($animal as $animall) {$animalexist .= $animall;}}
    if (!empty($building)) {foreach ($building as $builded) {$buildingType .= $builded;}}
    if (!empty($dogdaycare)) {foreach ($dogdaycare as $dogdayCare) {$dogdaycares .= $dogdayCare;}}
    if (!empty($collect)) {foreach ($collect as $collections) {$collected .= $collections;}}
    if (!empty($visittime)) {foreach ($visittime as $visiting) {$visited .= $visiting . ",";}}
    if (!empty($walks)) {foreach ($walks as $walking) {$walked .= $walking;}}
    if (!empty($wlk)) {foreach ($wlk as $wlkpr) {$walkper .= $wlkpr;}}
    if (!empty($availible)) {foreach ($availible as $availibling) {$availibled .= $availibling . ",";}}
    if (!empty($accomocancelation)) {foreach ($accomocancelation as $stiuated) {$accomoStiuation .= $stiuated;}}
    if (!empty($babySittercancelation)) {foreach ($babySittercancelation as $babyStiuation) {$babysitterStiuation .= $babyStiuation;}}
    $dogsitterspendingquery = ("INSERT into sitter_pending(user_id,street,city,picture,day,month,yearr,gender,sametimedogs,howfartravel,howmanydogdaycare,maxiumumvisit,checkin,checkout,howmanywalkperday,wantdogcollectmultipleowner,whattimenormalyhomevisit,howmanyhourbabydogwalking,whattimeavailibleforwalking,accomodationcancelationpolicy,homesittingcancelationpolicy,whichsizedogS,whichsizedogM,whichsizedogL,whichsizedogXL,propertyType,animalchoice,fitdogPupy,fitdogAdult,fitdogParent,gardentype,doyouhavecage,highriskbreed,anyonesmoke,childrenexist,dogcouch,experienceyear,experiencetitle,experienceDescription,email1,email2,email3,email4,email5,email6,bank)
    values('" . $_SESSION["id"] . "','" . $street . "','" . $city . "','" . $picture . "','" . $day . "','" . $month . "','" . $year . "','" . $genderStiuation . "','" . $dogStiuation . "','" . $km . "','" . $dogdaycares . "','" . $maxVisit . "','" . $checkin . "','" . $checkout . "','" . $wlk . "','" . $collected . "','" . $visited . "','" . $walked . "','" . $availibled . "','" . $accomoStiuation . "','" . $babysitterStiuation . "','" . $_POST['small'] . "','" . $_POST['medium'] . "','" . $_POST['large'] . "','" . $_POST['Xlarge'] . "','" . $buildingType . "','" . $animalexist . "','" . $pupy . "','" . $adult . "','" . $parent . "','" . $gardenchoiced . "','" . $cageEggsexist . "','" . $breeded . "','" . $smoked . "','" . $childrenexist . "','" . $isdogCouch . "','" . $sitterExper . "','" . $title . "','" . $description . "','" . $email1 . "','" . $email2 . "','" . $email3 . "','" . $email4 . "','" . $email5 . "','" . $email6 . "','" . $bank . "')");
    $stepsdone = $pdo->prepare($dogsitterspendingquery);
    $stepsdone->execute();
    if ($stepsdone == true) {
        header('location:  ../../availibilitiy.php');
        exit();

    } else {
        header('Location: ../../petsitterdata.php?somethings_wrong');
        exit();
    }
}
