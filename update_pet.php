<?php include 'header.php';?>
<div style="margin-top:100px;">

</div>
 <?php

//include ('header.php');
include 'includes/dbh-inic.php';
if (isset($_SESSION['id'])) {

if ($_SESSION['type'] == '1'){

  $showQuery = "SELECT * FROM pets where user_id='" . $_SESSION['id'] . "' /*and status ='1'*/ and id='" . $_POST['pet_id'] . "'";
  $resultShow = $pdo->prepare($showQuery);
  $resultShow->execute();
  $pet = $resultShow->fetch();

    ?>

    <style>
    .label{
        margin:2px 2px 2px 2px;
    }
    </style>

<script type="text/javascript">
var submitted = false;

$(document).ready(function() {
    $("form").submit(function() {
        submitted = true;
    });

    window.onbeforeunload = function() {
        if (!submitted) {
            return 'Do you really want to leave the page?';
        }
    }
});

$(window).on('load', function() {


    <?php
    $page = "";
  if (!(isset($_GET["p"]))){
      $page = "1";
  }
    if ($page=="1"){
      if ($pet['animal'] == "Cat") {
        echo "displaycat();";
      } else if ($pet['animal'] == "Dog") {
        echo "displaydog1();";
      }
    }
     if (isset($_GET["p"])){

     if ($_GET["p"]=="2"){
         $page = "2";
     }
     if ($_GET["p"]=="3"){
         $page = "3";
     }
     if ($_GET["p"]!=="2" && $_GET["p"]!=="3"){
         $page = "1";
     }
     if ($_GET["p"]=="c2"){
         $page = "c2";
     }
     if ($_GET["p"]=="c3"){
         $page = "c3";
     }}

     if ($page == "c2"){
        echo "displaycat2();";
     }
     if ($page == "c3"){
        if (isset($_POST["sterilized"])){
        echo "displaycat3();";
     }}

    if ($page == "2"){
        if (isset($_POST["name"])){
        echo "displaydog2();";
     }}

    if ($page == "3"){
        if (isset($_POST["alongwithdogs"])){
        echo "displaydog3();";
     }}
?>
})

function showbuttons() {
    var divbutt = document.getElementById("buttonsdiv");
    divbutt.style.display = "block";
}

function displaydog1() {
    var divdogs = document.getElementById("dog1");
    divdogs.style.display = "block";
    var table = document.getElementById("processtable1");
    table.style.display = "table";
}

function displaydog2() {
    var divdogs = document.getElementById("dog2");
    divdogs.style.display = "block";
    var table = document.getElementById("processtable2");
    table.style.display = "table";
}

function displaydog3() {
    var divdogs = document.getElementById("dog3");
    divdogs.style.display = "block";
    var table = document.getElementById("processtable3");
    table.style.display = "table";
}


function dogsize(a) {
    var inp = document.getElementById("dogsize");
    inp.value = a;
    if (a == "S") {
        var s = document.getElementById("dogsizeS");
        var m = document.getElementById("dogsizeM");
        var l = document.getElementById("dogsizeL");
        var xl = document.getElementById("dogsizeXL");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
        l.className = "btn btn-light";
        xl.className = "btn btn-light";
    }
    if (a == "M") {
        var s = document.getElementById("dogsizeS");
        var m = document.getElementById("dogsizeM");
        var l = document.getElementById("dogsizeL");
        var xl = document.getElementById("dogsizeXL");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
        l.className = "btn btn-light";
        xl.className = "btn btn-light";
    }
    if (a == "L") {
        var s = document.getElementById("dogsizeS");
        var m = document.getElementById("dogsizeM");
        var l = document.getElementById("dogsizeL");
        var xl = document.getElementById("dogsizeXL");
        s.className = "btn btn-light";
        m.className = "btn btn-light";
        l.className = "btn btn-success";
        xl.className = "btn btn-light";
    }
    if (a == "XL") {
        var s = document.getElementById("dogsizeS");
        var m = document.getElementById("dogsizeM");
        var l = document.getElementById("dogsizeL");
        var xl = document.getElementById("dogsizeXL");
        s.className = "btn btn-light";
        m.className = "btn btn-light";
        l.className = "btn btn-light";
        xl.className = "btn btn-success";
    }
}

function dogsex(a) {
    var inp = document.getElementById("dogsex");
    inp.value = a;
    if (a == "Male") {
        var s = document.getElementById("dogsexM");
        var m = document.getElementById("dogsexF");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "Female") {
        var s = document.getElementById("dogsexM");
        var m = document.getElementById("dogsexF");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function sterilized(a) {
    var inp = document.getElementById("sterilized");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("sterilized1");
        var m = document.getElementById("sterilized0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("sterilized1");
        var m = document.getElementById("sterilized0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function vaccinations(a) {
    var inp = document.getElementById("vaccinations");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("vaccinations1");
        var m = document.getElementById("vaccinations0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("vaccinations1");
        var m = document.getElementById("vaccinations0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function kennel(a) {
    var inp = document.getElementById("kennel");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("kennel1");
        var m = document.getElementById("kennel0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("kennel1");
        var m = document.getElementById("kennel0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function alongwithdogs(a) {
    var inp = document.getElementById("alongwithdogs");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("alongwithdogs1");
        var m = document.getElementById("alongwithdogs0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("alongwithdogs1");
        var m = document.getElementById("alongwithdogs0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function alongwithchildren(a) {
    var inp = document.getElementById("alongwithchildren");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("alongwithchildren1");
        var m = document.getElementById("alongwithchildren0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("alongwithchildren1");
        var m = document.getElementById("alongwithchildren0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function alongwithcats(a) {
    var inp = document.getElementById("alongwithcats");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("alongwithcats1");
        var m = document.getElementById("alongwithcats0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("alongwithcats1");
        var m = document.getElementById("alongwithcats0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function csterilized(a) {
    var inp = document.getElementById("csterilized");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("csterilized1");
        var m = document.getElementById("csterilized0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("csterilized1");
        var m = document.getElementById("csterilized0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}


function ckennel(a) {
    var inp = document.getElementById("ckennel");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("ckennel1");
        var m = document.getElementById("ckennel0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("ckennel1");
        var m = document.getElementById("ckennel0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function calongwithdogs(a) {
    var inp = document.getElementById("calongwithdogs");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("calongwithdogs1");
        var m = document.getElementById("calongwithdogs0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("calongwithdogs1");
        var m = document.getElementById("calongwithdogs0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function calongwithchildren(a) {
    var inp = document.getElementById("calongwithchildren");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("calongwithchildren1");
        var m = document.getElementById("calongwithchildren0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("calongwithchildren1");
        var m = document.getElementById("calongwithchildren0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function calongwithcats(a) {
    var inp = document.getElementById("calongwithcats");
    inp.value = a;
    if (a == "1") {
        var s = document.getElementById("calongwithcats1");
        var m = document.getElementById("calongwithcats0");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "0") {
        var s = document.getElementById("calongwithcats1");
        var m = document.getElementById("calongwithcats0");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }
}

function checkdog1() {
  submitted = true;
  document.getElementById("dogform1").submit();
}

function checkdog2() {
  submitted = true;
  document.getElementById("dogform2").submit();
}

function displaycat() {
    var divdogs = document.getElementById("cat1");
    divdogs.style.display = "block";
    var table = document.getElementById("processtable1");
    table.style.display = "table";
}

function displaycat2() {
    var divdogs = document.getElementById("cat2");
    divdogs.style.display = "block";
    var table = document.getElementById("processtable2");
    table.style.display = "table";
}

function displaycat3() {
    var divdogs = document.getElementById("cat3");
    divdogs.style.display = "block";
    var table = document.getElementById("processtable3");
    table.style.display = "table";
}

function catsex(a) {
    var inp = document.getElementById("catsex");
    inp.value = a;
    if (a == "Male") {
        var s = document.getElementById("catsexM");
        var m = document.getElementById("catsexF");
        s.className = "btn btn-success";
        m.className = "btn btn-light";
    }
    if (a == "Female") {
        var s = document.getElementById("catsexM");
        var m = document.getElementById("catsexF");
        s.className = "btn btn-light";
        m.className = "btn btn-success";
    }

}

function checkcat1() {
  submitted = true;
  document.getElementById("catform1").submit();
}

function checkcat2() {
  submitted = true;
  document.getElementById("catform2").submit();
}
</script>

<!-- Adding dog and cat style -->
<style>
.add-dog{
    margin-left:330px;
    cursor:pointer;
}

.add-cat{
    margin-left:250px;
    cursor:pointer;
}

.add-dog:hover{
    opacity:0.9;
}

.add-cat:hover{
    opacity:0.9;
}
</style>

<div class="container" style="margin-top:65px;">
    <div class="row">
<table id="processtable1" class="table table-striped" style="display:none;">
    <thead>
        <tr class="table-light">
            <th style="border: 1px solid; background-color:green; color:white;">Basic information</th>
            <th style="border: 1px solid;">Other information</th>
            <th style="border: 1px solid;">Health</th>
        </tr>
    </thead>
</table>
<table id="processtable2" class="table table-striped" style="display:none;">
    <thead>
        <tr style="border: 1px solid black;">
            <th style="border: 1px solid; background-color:green; color:white;">Basic information</th>
            <th style="border: 1px solid; background-color:green; color:white;">Other information</th>
            <th style="border: 1px solid; background-color:green; color:white;">Health</th>
        </tr>
    </thead>
</table>
<table id="processtable3" class="table table-striped" style="display:none;">
    <thead>
        <tr style="border: 1px solid green;">
            <th style="border: 1px solid green;">Basic information</th>
            <th style="border: 1px solid green;">Other information</th>
            <th style="border: 1px solid green;background-color:green; color:white;">Health</th>
        </tr>
    </thead>
</table>

<div id="dog1" style="display:none;" class="col-md-12 border border-success">
    <h1 class="display-4 text-success font-weight-bold">Updating your dog</h1>
    <form action="update_pet.php?p=2" method="post" id="dogform1">
        <input type="file" accept="image/*" name="petimage"><br>
        <label class="m-2 text-success font-weight-bold">Name</label>
        <input class="form-control m-2" id="name" name="name" placeholder="name" required value="<?php if (isset($pet["name"])){echo $pet["name"]; } else {} ?>">
        <label class="m-2 text-success font-weight-bold">Size*</label>
        <div role="group" aria-label="First group">
            <a onclick="dogsize('S')"><button id="dogsizeS" style="width:24%" type="button" class="btn btn-success">S
                    (0-10Kg)</button></a>
            <a onclick="dogsize('M')"><button id="dogsizeM" style="width:24%" type="button" class="btn btn-success">M
                    (11-25Kg)</button></a>
            <a onclick="dogsize('L')"><button id="dogsizeL" style="width:24%" type="button" class="btn btn-success">L
                    (26-45Kg)</button></a>
            <a onclick="dogsize('XL')"><button id="dogsizeXL" style="width:24%" type="button" class="btn btn-success">XL
                    (>45Kg)</button></a>
        </div>
        <input id="dogsize" class="form-control m-2" name="dogsize" type="hidden">
        <label class="m-2 text-success font-weight-bold">Date of birth</label>
        <input type="date" class="form-control m-2" name="birthdate" placeholder="date of birth"  value="<?php if (isset($pet["birthdate"])){echo $pet["birthdate"]; } else {} ?>">
        <label class="m-2 text-success font-weight-bold">Sex</label>
        <div role="group" aria-label="First group">
            <a onclick="dogsex('Male')"><button id="dogsexM" style="width:49%" type="button"
                    class="btn btn-light">Male</button></a>
            <a onclick="dogsex('Female')"><button id="dogsexF" style="width:49%" type="button"
                    class="btn btn-light">Female</button></a>
        </div>
        <input id="dogsex" class="form-control mt-2" name="sex" type="hidden">

        <label class="m-2 text-success font-weight-bold">Breed</label>
        <select class="form-control" name="breed">

            <option value=""><?php if (isset($pet["breed"])){echo $pet["breed"]; } else {echo "Breed";}?></option>
            <option value="Affenpinscher">Affenpinscher</option>
            <option value="Afghan Hound">Afghan Hound</option>
            <option value="Airedale Terrier">Airedale Terrier</option>
            <option value="Akita">Akita</option>
            <option value="Alaskan Klee Kai">Alaskan Klee Kai</option>
            <option value="Alaskan Malamute">Alaskan Malamute</option>
            <option value="American Bulldog">American Bulldog</option>
            <option value="American English Coonhound">American English Coonhound</option>
            <option value="American Eskimo Dog">American Eskimo Dog</option>
            <option value="American Foxhound">American Foxhound</option>
            <option value="American Pit Bull Terrier">American Pit Bull Terrier</option>
            <option value="American Staffordshire Terrier">American Staffordshire Terrier</option>
            <option value="American Water Spaniel">American Water Spaniel</option>
            <option value="Anatolian Shepherd Dog">Anatolian Shepherd Dog</option>
            <option value="Appenzeller Sennenhunde">Appenzeller Sennenhunde</option>
            <option value="Australian Cattle Dog">Australian Cattle Dog</option>
            <option value="Australian Kelpie">Australian Kelpie</option>
            <option value="Australian Shepherd">Australian Shepherd</option>
            <option value="Australian Terrier">Australian Terrier</option>
            <option value="Azawakh">Azawakh</option>
            <option value="Barbet">Barbet</option>
            <option value="Basenji">Basenji</option>
            <option value="Basset Hound">Basset Hound</option>
            <option value="Beagle">Beagle</option>
            <option value="Bearded Collie">Bearded Collie</option>
            <option value="Bedlington Terrier">Bedlington Terrier</option>
            <option value="Belgian Malinois">Belgian Malinois</option>
            <option value="Belgian Sheepdog">Belgian Sheepdog</option>
            <option value="Belgian Tervuren">Belgian Tervuren</option>
            <option value="Berger Picard">Berger Picard</option>
            <option value="Bernedoodle">Bernedoodle</option>
            <option value="Bernese Mountain Dog">Bernese Mountain Dog</option>
            <option value="Bichon Frise">Bichon Frise</option>
            <option value="Black and Tan Coonhound">Black and Tan Coonhound</option>
            <option value="Black Mouth Cur">Black Mouth Cur</option>
            <option value="Black Russian Terrier">Black Russian Terrier</option>
            <option value="Bloodhound">Bloodhound</option>
            <option value="Blue Lacy">Blue Lacy</option>
            <option value="Bluetick Coonhound">Bluetick Coonhound</option>
            <option value="Boerboel">Boerboel</option>
            <option value="Bolognese">Bolognese</option>
            <option value="Border Collie">Border Collie</option>
            <option value="Border Terrier">Border Terrier</option>
            <option value="Borzoi">Borzoi</option>
            <option value="Boston Terrier">Boston Terrier</option>
            <option value="Bouvier des Flandres">Bouvier des Flandres</option>
            <option value="Boxer">Boxer</option>
            <option value="Boykin Spaniel">Boykin Spaniel</option>
            <option value="Bracco Italiano">Bracco Italiano</option>
            <option value="Briard">Briard</option>
            <option value="Brittany">Brittany</option>
            <option value="Brussels Griffon">Brussels Griffon</option>
            <option value="Bull Terrier">Bull Terrier</option>
            <option value="Bulldog">Bulldog</option>
            <option value="Bullmastiff">Bullmastiff</option>
            <option value="Cairn Terrier">Cairn Terrier</option>
            <option value="Canaan Dog">Canaan Dog</option>
            <option value="Cane Corso">Cane Corso</option>
            <option value="Cardigan Welsh Corgi">Cardigan Welsh Corgi</option>
            <option value="Catahoula Leopard Dog">Catahoula Leopard Dog</option>
            <option value="Caucasian Shepherd Dog">Caucasian Shepherd Dog</option>
            <option value="Cavalier King Charles Spaniel">Cavalier King Charles Spaniel</option>
            <option value="Cesky Terrier">Cesky Terrier</option>
            <option value="Chesapeake Bay Retriever">Chesapeake Bay Retriever</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Chinese Crested">Chinese Crested</option>
            <option value="Chinese Shar-Pei">Chinese Shar-Pei</option>
            <option value="Chinook">Chinook</option>
            <option value="Chow Chow">Chow Chow</option>
            <option value="Clumber Spaniel">Clumber Spaniel</option>
            <option value="Cockapoo">Cockapoo</option>
            <option value="Cocker Spaniel">Cocker Spaniel</option>
            <option value="Collie">Collie</option>
            <option value="Coton de Tulear">Coton de Tulear</option>
            <option value="Curly-Coated Retriever">Curly-Coated Retriever</option>
            <option value="Dachshund">Dachshund</option>
            <option value="Dalmatian">Dalmatian</option>
            <option value="Dandie Dinmont Terrier">Dandie Dinmont Terrier</option>
            <option value="Doberman Pinscher">Doberman Pinscher</option>
            <option value="Dogo Argentino">Dogo Argentino</option>
            <option value="Dogue de Bordeaux">Dogue de Bordeaux</option>
            <option value="Dutch Shepherd">Dutch Shepherd</option>
            <option value="English Cocker Spaniel">English Cocker Spaniel</option>
            <option value="English Foxhound">English Foxhound</option>
            <option value="English Setter">English Setter</option>
            <option value="English Springer Spaniel">English Springer Spaniel</option>
            <option value="English Toy Spaniel">English Toy Spaniel</option>
            <option value="Entlebucher Mountain Dog">Entlebucher Mountain Dog</option>
            <option value="Field Spaniel">Field Spaniel</option>
            <option value="Finnish Lapphund">Finnish Lapphund</option>
            <option value="Finnish Spitz">Finnish Spitz</option>
            <option value="Flat-Coated Retriever">Flat-Coated Retriever</option>
            <option value="Fox Terrier">Fox Terrier</option>
            <option value="French Bulldog">French Bulldog</option>
            <option value="German Pinscher">German Pinscher</option>
            <option value="German Shepherd Dog">German Shepherd Dog</option>
            <option value="German Shorthaired Pointer">German Shorthaired Pointer</option>
            <option value="German Wirehaired Pointer">German Wirehaired Pointer</option>
            <option value="Giant Schnauzer">Giant Schnauzer</option>
            <option value="Glen of Imaal Terrier">Glen of Imaal Terrier</option>
            <option value="Goldador">Goldador</option>
            <option value="Golden Retriever">Golden Retriever</option>
            <option value="Goldendoodle">Goldendoodle</option>
            <option value="Gordon Setter">Gordon Setter</option>
            <option value="Great Dane">Great Dane</option>
            <option value="Great Pyrenees">Great Pyrenees</option>
            <option value="Greater Swiss Mountain Dog">Greater Swiss Mountain Dog</option>
            <option value="Greyhound">Greyhound</option>
            <option value="Harrier">Harrier</option>
            <option value="Havanese">Havanese</option>
            <option value="Ibizan Hound">Ibizan Hound</option>
            <option value="Icelandic Sheepdog">Icelandic Sheepdog</option>
            <option value="Irish Red and White Setter">Irish Red and White Setter</option>
            <option value="Irish Setter">Irish Setter</option>
            <option value="Irish Terrier">Irish Terrier</option>
            <option value="Irish Water Spaniel">Irish Water Spaniel</option>
            <option value="Irish Wolfhound">Irish Wolfhound</option>
            <option value="Italian Greyhound">Italian Greyhound</option>
            <option value="Jack Russell Terrier">Jack Russell Terrier</option>
            <option value="Japanese Chin">Japanese Chin</option>
            <option value="Japanese Spitz">Japanese Spitz</option>
            <option value="Karelian Bear Dog">Karelian Bear Dog</option>
            <option value="Keeshond">Keeshond</option>
            <option value="Kerry Blue Terrier">Kerry Blue Terrier</option>
            <option value="Komondor">Komondor</option>
            <option value="Kooikerhondje">Kooikerhondje</option>
            <option value="Korean Jindo Dog">Korean Jindo Dog</option>
            <option value="Kuvasz">Kuvasz</option>
            <option value="Labradoodle">Labradoodle</option>
            <option value="Labrador Retriever">Labrador Retriever</option>
            <option value="Lagotto Romagnolo">Lagotto Romagnolo</option>
            <option value="Lakeland Terrier">Lakeland Terrier</option>
            <option value="Lancashire Heeler">Lancashire Heeler</option>
            <option value="Leonberger">Leonberger</option>
            <option value="Lhasa Apso">Lhasa Apso</option>
            <option value="Lowchen">Lowchen</option>
            <option value="Maltese">Maltese</option>
            <option value="Maltese Shih Tzu">Maltese Shih Tzu</option>
            <option value="Maltipoo">Maltipoo</option>
            <option value="Manchester Terrier">Manchester Terrier</option>
            <option value="Mastiff">Mastiff</option>
            <option value="Miniature Pinscher">Miniature Pinscher</option>
            <option value="Miniature Schnauzer">Miniature Schnauzer</option>
            <option value="Mudi">Mudi</option>
            <option value="Mutt">Mutt</option>
            <option value="Neapolitan Mastiff">Neapolitan Mastiff</option>
            <option value="Newfoundland">Newfoundland</option>
            <option value="Norfolk Terrier">Norfolk Terrier</option>
            <option value="Norwegian Buhund">Norwegian Buhund</option>
            <option value="Norwegian Elkhound">Norwegian Elkhound</option>
            <option value="Norwegian Lundehund">Norwegian Lundehund</option>
            <option value="Norwich Terrier">Norwich Terrier</option>
            <option value="Nova Scotia Duck Tolling Retriever">Nova Scotia Duck Tolling Retriever</option>
            <option value="Old English Sheepdog">Old English Sheepdog</option>
            <option value="Otterhound">Otterhound</option>
            <option value="Papillon">Papillon</option>
            <option value="Peekapoo">Peekapoo</option>
            <option value="Pekingese">Pekingese</option>
            <option value="Pembroke Welsh Corgi">Pembroke Welsh Corgi</option>
            <option value="Petit Basset Griffon Vendeen">Petit Basset Griffon Vendeen</option>
            <option value="Pharaoh Hound">Pharaoh Hound</option>
            <option value="Plott">Plott</option>
            <option value="Pocket Beagle">Pocket Beagle</option>
            <option value="Pointer">Pointer</option>
            <option value="Polish Lowland Sheepdog">Polish Lowland Sheepdog</option>
            <option value="Pomeranian">Pomeranian</option>
            <option value="Pomsky">Pomsky</option>
            <option value="Poodle">Poodle</option>
            <option value="Portuguese Water Dog">Portuguese Water Dog</option>
            <option value="Pug">Pug</option>
            <option value="Puggle">Puggle</option>
            <option value="Puli">Puli</option>
            <option value="Pyrenean Shepherd">Pyrenean Shepherd</option>
            <option value="Rat Terrier">Rat Terrier</option>
            <option value="Redbone Coonhound">Redbone Coonhound</option>
            <option value="Rhodesian Ridgeback">Rhodesian Ridgeback</option>
            <option value="Rottweiler">Rottweiler</option>
            <option value="Saint Bernard">Saint Bernard</option>
            <option value="Saluki">Saluki</option>
            <option value="Samoyed">Samoyed</option>
            <option value="Schipperke">Schipperke</option>
            <option value="Schnoodle">Schnoodle</option>
            <option value="Scottish Deerhound">Scottish Deerhound</option>
            <option value="Scottish Terrier">Scottish Terrier</option>
            <option value="Sealyham Terrier">Sealyham Terrier</option>
            <option value="Shetland Sheepdog">Shetland Sheepdog</option>
            <option value="Shiba Inu">Shiba Inu</option>
            <option value="Shih Tzu">Shih Tzu</option>
            <option value="Siberian Husky">Siberian Husky</option>
            <option value="Silken Windhound">Silken Windhound</option>
            <option value="Silky Terrier">Silky Terrier</option>
            <option value="Skye Terrier">Skye Terrier</option>
            <option value="Sloughi">Sloughi</option>
            <option value="Small Munsterlander Pointer">Small Munsterlander Pointer</option>
            <option value="Soft Coated Wheaten Terrier">Soft Coated Wheaten Terrier</option>
            <option value="Stabyhoun">Stabyhoun</option>
            <option value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option>
            <option value="Standard Schnauzer">Standard Schnauzer</option>
            <option value="Sussex Spaniel">Sussex Spaniel</option>
            <option value="Swedish Vallhund">Swedish Vallhund</option>
            <option value="Tibetan Mastiff">Tibetan Mastiff</option>
            <option value="Tibetan Spaniel">Tibetan Spaniel</option>
            <option value="Tibetan Terrier">Tibetan Terrier</option>
            <option value="Toy Fox Terrier">Toy Fox Terrier</option>
            <option value="Treeing Tennessee Brindle">Treeing Tennessee Brindle</option>
            <option value="Treeing Walker Coonhound">Treeing Walker Coonhound</option>
            <option value="Vizsla">Vizsla</option>
            <option value="Weimaraner">Weimaraner</option>
            <option value="Welsh Springer Spaniel">Welsh Springer Spaniel</option>
            <option value="Welsh Terrier">Welsh Terrier</option>
            <option value="West Highland White Terrier">West Highland White Terrier</option>
            <option value="Whippet">Whippet</option>
            <option value="Wirehaired Pointing Griffon">Wirehaired Pointing Griffon</option>
            <option value="Xoloitzcuintli">Xoloitzcuintli</option>
            <option value="Yorkipoo">Yorkipoo</option>
            <option value="Yorkshire Terrier">Yorkshire Terrier</option>
        </select>

        <label class="m-2 text-success font-weight-bold">Chip</label>
        <input class="form-control" name="chip" placeholder="Chip number">
        <label class="text-success font-weight-bold">Description</label>
        <textarea name="description" class="mt-3 align-middle" cols="84" placeholder="Description"></textarea>
        <input type="hidden" value="<?php echo $_POST['pet_id'];?>" name="pet_id">
        <a style="margin-left:85%;" onclick="checkdog1()"><button type="button" class="btn btn-success"> Next step
            </button></a>
    </form>
</div>


<div id="cat1" style="display:none;" class="col-md-12 border border-success">
    <h1 class="display-4 text-success font-weight-bold">Updating your cat</h1>
    <form action="update_pet.php?p=c2" method="post" id="catform1">
        <input type="file" accept="image/*" name="petimage"><br>
        <label label class="m-2 text-success font-weight-bold">Name</label>
        <input class="form-control" id="catname" name="name" placeholder="name" required value="<?php if (isset($pet["name"])){echo $pet["name"]; } else {} ?>">
        <label label class="m-2 text-success font-weight-bold">Date of birth</label>
        <input type="date" class="form-control" name="birthdate" placeholder="date of birth" value="<?php if (isset($pet["birthdate"])){echo $pet["birthdate"]; } else {} ?>">
        <label label class="m-2 text-success font-weight-bold">Sex</label>
        <div role="group" aria-label="First group">
            <a onclick="catsex('Male')"><button id="catsexM" style="width:49%" type="button"
                    class="btn btn-light">Male</button></a>
            <a onclick="catsex('Female')"><button id="catsexF" style="width:49%" type="button"
                    class="btn btn-light">Female</button></a>
        </div>
        <input id="catsex" class="form-control" name="sex" value="<?php if (isset($pet["sex"])){echo $pet["sex"]; } else {} ?>">

        <label label class="m-2 text-success font-weight-bold">Breed</label>
        <select class="form-control" name="breed" value="<?php if (isset($pet["breed"])){echo $pet["breed"]; } else {}?>">

            <option value=""><?php if (isset($pet["breed"])){echo $pet["breed"]; } else {echo "Breed";}?></option>
            <option value="Abyssinian">Abyssinian</option>
            <option value="American Bobtail">American Bobtail</option>
            <option value="American Curl">American Curl</option>
            <option value="American Shorthair">American Shorthair</option>
            <option value="American Wirehair">American Wirehair</option>
            <option value="Balinese">Balinese</option>
            <option value="Bengal Cats">Bengal Cats</option>
            <option value="Birman">Birman</option>
            <option value="Bombay">Bombay</option>
            <option value="British Shorthair">British Shorthair</option>
            <option value="Burmese">Burmese</option>
            <option value="Burmilla">Burmilla</option>
            <option value="Chartreux">Chartreux</option>
            <option value="Chinese Li Hua">Chinese Li Hua</option>
            <option value="Colorpoint Shorthair">Colorpoint Shorthair</option>
            <option value="Cornish Rex">Cornish Rex</option>
            <option value="Cymric">Cymric</option>
            <option value="Devon Rex">Devon Rex</option>
            <option value="Egyptian Mau">Egyptian Mau</option>
            <option value="European Burmese">European Burmese</option>
            <option value="Exotic">Exotic</option>
            <option value="Havana Brown">Havana Brown</option>
            <option value="Himalayan">Himalayan</option>
            <option value="Japanese Bobtail">Japanese Bobtail</option>
            <option value="Javanese">Javanese</option>
            <option value="Korat">Korat</option>
            <option value="LaPerm">LaPerm</option>
            <option value="Maine Coon">Maine Coon</option>
            <option value="Manx">Manx</option>
            <option value="Nebelung">Nebelung</option>
            <option value="Norwegian Forest">Norwegian Forest</option>
            <option value="Ocicat">Ocicat</option>
            <option value="Oriental">Oriental</option>
            <option value="Persian">Persian</option>
            <option value="Pixie-Bob">Pixie-Bob</option>
            <option value="Ragamuffin">Ragamuffin</option>
            <option value="Ragdoll Cats">Ragdoll Cats</option>
            <option value="Russian Blue">Russian Blue</option>
            <option value="Savannah">Savannah</option>
            <option value="Scottish Fold">Scottish Fold</option>
            <option value="Selkirk Rex">Selkirk Rex</option>
            <option value="Siamese Cat">Siamese Cat</option>
            <option value="Siberian">Siberian</option>
            <option value="Singapura">Singapura</option>
            <option value="Snowshoe">Snowshoe</option>
            <option value="Somali">Somali</option>
            <option value="Sphynx">Sphynx</option>
            <option value="Tonkinese">Tonkinese</option>
            <option value="Turkish Angora">Turkish Angora</option>
            <option value="Turkish Van">Turkish Van</option>
        </select>

        <label label class="m-2 text-success font-weight-bold">Chip</label>
        <input class="form-control" name="chip" placeholder="Chip number" value="<?php if (isset($pet["chip"])){echo $pet["chip"]; } else {}?>">
        <label label class="m-2 text-success font-weight-bold">Description</label>
        <textarea name="description" class="mt-3 align-middle" cols="84" placeholder="Description" value="<?php if (isset($pet["description"])){echo $pet["description"]; } else {}?>"></textarea>
        <input type="hidden" value="<?php echo $_POST['pet_id'];?>" name="pet_id">
        <a style="margin-left:85%;" onclick="checkcat1()"><button type="button" class="btn btn-success"> Next step
            </button></a>
    </form>
</div>

<div id="dog2" style="display:none"; class="col-md-12 border border-success">
    <h1 class="display-4 text-success font-weight-bold">Other information</h1>
    <form action="update_pet.php?p=3" method="post" id="dogform2">
        <input type="file" accept="image/*" name="petimage" style="display:none" value="<?php if (isset($_FILES["petimage"])){$petimage=$_FILES["petimage"]; echo "<img src=$petimage />"; } ?>">
        <input name="name" placeholder="name" value="<?php if (isset($_POST["name"])){echo $_POST["name"]; } ?>" type="hidden">
        <input name="sex" placeholder="name" value="<?php if (isset($_POST["sex"])){echo $_POST["sex"]; } ?>" type="hidden">
        <input name="dogsize" placeholder="name"
            value="<?php if (isset($_POST["dogsize"])){echo $_POST["dogsize"]; } ?>" type="hidden">
        <input type="date" name="birthdate" placeholder="date of birth"
            value="<?php if (isset($_POST["birthdate"])){echo $_POST["birthdate"]; } ?>" style="display:none">
        <input name="breed" value="<?php if (isset($_POST["breed"])){echo $_POST["breed"]; } ?>" type="hidden">
        <input name="chip" placeholder="Chip number" value="<?php if (isset($_POST["chip"])){echo $_POST["chip"]; } ?>" type="hidden">
        <input name="description" placeholder="Description"
            value="<?php if (isset($_POST["description"])){echo $_POST["description"]; } ?>" type="hidden">

        <label class="m-2 text-success font-weight-bold">Has your dog been neutered or sterilized?</label>
        <div role="group" aria-label="First group">
            <a onclick="sterilized('1')"><button id="sterilized1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="sterilized('0')"><button id="sterilized0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
            <input class="form-control" name="sterilized" id="sterilized" type="hidden">
        </div>

        <label class="m-2 text-success font-weight-bold">Is your dog friendly with other dogs?</label>
        <div role="group" aria-label="First group">
            <a onclick="alongwithdogs('1')"><button id="alongwithdogs1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="alongwithdogs('0')"><button id="alongwithdogs0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
        </div>
        <input class="form-control" name="alongwithdogs" id="alongwithdogs" type="hidden">

        <label class="m-2 text-success font-weight-bold">Does your dog get along with children?</label>
        <div role="group" aria-label="First group">
            <a onclick="alongwithchildren('1')"><button id="alongwithchildren1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="alongwithchildren('0')"><button id="alongwithchildren0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
        </div>
        <input class="form-control" name="alongwithchildren" id="alongwithchildren" type="hidden">

        <label class="m-2 text-success font-weight-bold">Does your dog get along with cats?</label>
        <div role="group" aria-label="First group">
            <a onclick="alongwithcats('1')"><button id="alongwithcats1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="alongwithcats('0')"><button id="alongwithcats0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
        </div>
        <input class="form-control" name="alongwithcats" id="alongwithcats" type="hidden">
        <label class="m-2 text-success font-weight-bold">Explain your dog's walking routine</label>
        <textarea name="walkingroutine" class="m-2 align-middle" cols=84 placeholder="My dog usually..." value="<?php if (isset($_POST["eating_routine"])){echo $_POST["eating_routine"];}; ?>"></textarea>
        <label class="m-2 text-success font-weight-bold">Explain your dog's eating Routine</label>
        <textarea name="eatingroutine" class="m-2 align-middle" cols=84 placeholder="My dog usually..." value="<?php if (isset($_POST["eating_routine"])){echo $_POST["eating_routine"];}; ?>"></textarea>
        <label class="m-2 text-success font-weight-bold">Where does the dog sleep?</label>
        <textarea name="sleep_place" class="mr-6 align-middle" cols=84 placeholder="My dog usually..." value="<?php if (isset($_POST["eating_routine"])){echo $_POST["eating_routine"];}; ?>"></textarea>
        <input type="hidden" value="<?php echo $_POST['pet_id'];?>" name="pet_id">
        <a style="margin-left:85%;" onclick="checkdog2()"><button class="btn btn-success" type="button">Next step</button></a>

    </form>
</div>


<div id="cat2" style="display:none; width:800px; margin-left:20%; border:1px solid black;">
    <h1 class="display-4 text-success font-weight-bold">Other information</h1>
    <form action="update_pet.php?p=c3" method="post" id="catform2" type="hidden">
        <input type="file" accept="image/*" name="petimage" style="display:none" value="<?php if (isset($_FILES["petimage"])){$petimage=$_FILES["petimage"]; echo "<img src=$petimage />"; } ?>">
        <input name="name" placeholder="name" value="<?php if (isset($_POST["name"])){echo $_POST["name"];} ?>" type="hidden">
        <input name="sex" placeholder="name" value="<?php if (isset($_POST["sex"])){echo $_POST["sex"];} ?>" type="hidden">
        <input type="date" name="birthdate" placeholder="date of birth"
            value="<?php if (isset($_POST["birthdate"])){echo $_POST["birthdate"];} ?>" style="display:none">
        <input name="breed" value="<?php if (isset($_POST["breed"])){echo $_POST["breed"];} ?>" type="hidden">
        <input name="chip" placeholder="Chip number" value="<?php if (isset($_POST["chip"])){echo $_POST["chip"];} ?>" type="hidden">
        <input name="description" placeholder="Description"
            value="<?php if (isset($_POST["description"])){echo $_POST["description"];} ?>" type="hidden">
        <label class="m-2 text-success font-weight-bold">Has your cat been neutered or sterilized?</label>
        <div role="group" aria-label="First group">
            <a onclick="csterilized('1')"><button id="csterilized1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="csterilized('0')"><button id="csterilized0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
            <input class="form-control" name="sterilized" id="csterilized" type="hidden">
        </div>

        <label class="m-2 text-success font-weight-bold">Is your cat friendly with dogs?</label>
        <div role="group" aria-label="First group">
            <a onclick="calongwithdogs('1')"><button id="calongwithdogs1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="calongwithdogs('0')"><button id="calongwithdogs0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
        </div>
        <input class="form-control" name="alongwithdogs" id="calongwithdogs" type="hidden">

        <label class="m-2 text-success font-weight-bold">Does your cat get along with children?</label>
        <div role="group" aria-label="First group">
            <a onclick="calongwithchildren('1')"><button id="calongwithchildren1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="calongwithchildren('0')"><button id="calongwithchildren0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
        </div>
        <input class="form-control" name="alongwithchildren" id="calongwithchildren" type="hidden">

        <label class="m-2 text-success font-weight-bold">Does your cat get along with other cats?</label>
        <div role="group" aria-label="First group">
            <a onclick="calongwithcats('1')"><button id="calongwithcats1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="calongwithcats('0')"><button id="calongwithcats0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
        </div>
        <input class="form-control" name="alongwithcats" id="calongwithcats" type="hidden">
        <label class="m-2 text-success font-weight-bold">Explain your cat's eating Routine</label>
        <textarea name="eating_routine" class="m-2 align-middle" cols=84 placeholder="My cat usually..." value="<?php if (isset($_POST["eating_routine"])){echo $_POST["eating_routine"];}; ?>"></textarea>
        <label class="m-2 text-success font-weight-bold">Where does the cat sleep?</label>
        <textarea name="sleep_place" class="m-2 align-middle" cols=84 placeholder="My cat usually..." value="<?php if (isset($_POST["sleep_place"])){echo $_POST["sleep_place"];}; ?>"></textarea>
        <input type="hidden" value="<?php echo $_POST['pet_id'];?>" name="pet_id">
        <a style="margin-left:85%;" onclick="checkcat2()"><button class="btn btn-success" type="button">Next
                step</button></a>
    </form>
</div>

<div id="dog3" style="display:none; width:800px; margin-left:20%; border:1px solid black;">
    <h1 class="display-4 text-success font-weight-bold">Veterinarian and Insurance</h1>
    <form action="includes/petowner/update_pet_func.php" method="post">
        <input type="file" accept="image/*" name="petimage" style="display:none" value="<?php if (isset($_FILES["petimage"])){$petimage=$_FILES["petimage"]; echo "<img src=$petimage />"; } ?>">
        <input name="name" value="<?php if (isset($_POST["name"])){echo $_POST["name"];} ?>" type="hidden">
        <input name="sex" value="<?php if (isset($_POST["sex"])){echo $_POST["sex"];} ?>" type="hidden">
        <input name="dogsize" placeholder="name"
            value="<?php if (isset($_POST["dogsize"])){echo $_POST["dogsize"];} ?>" type="hidden">
        <input type="date" name="birthdate" value="<?php if (isset($_POST["birthdate"])){echo $_POST["birthdate"];} ?>" style="display:none">
        <input name="breed" value="<?php if (isset($_POST["breed"])){echo $_POST["breed"];} ?>" type="hidden">
        <input name="chip" value="<?php if (isset($_POST["chip"])){echo $_POST["chip"];} ?>" type="hidden">
        <input name="description" value="<?php if (isset($_POST["description"])){echo $_POST["description"];} ?>" type="hidden">
        <input name="sterilized" value="<?php if (isset($_POST["sterilized"])){echo $_POST["sterilized"];} ?>" type="hidden">
        <input name="alongwithdogs" value="<?php if (isset($_POST["alongwithdogs"])){echo $_POST["alongwithdogs"];} ?>" type="hidden">
        <input name="alongwithchildren"
            value="<?php if (isset($_POST["alongwithchildren"])){echo $_POST["alongwithchildren"];} ?>" type="hidden">
        <input name="alongwithcats" value="<?php if (isset($_POST["alongwithcats"])){echo $_POST["alongwithcats"];} ?>" type="hidden">
        <input name="walkingroutine"
            value="<?php if (isset($_POST["walkingroutine"])){echo $_POST["walkingroutine"];} ?>" type="hidden">
        <input name="sleep_place" value="<?php if (isset($_POST["sleep_place"])){echo $_POST["sleep_place"];} ?>" type="hidden">
        <input name="eatingroutine" value="<?php if (isset($_POST["eatingroutine"])){echo $_POST["eatingroutine"];} ?>" type="hidden">

        <label class="m-2 text-success font-weight-bold">Standard vaccinations up to date?</label>
        <div role="group" class="ml-2" aria-label="First group">
            <a onclick="vaccinations('1')"><button id="vaccinations1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="vaccinations('0')"><button id="vaccinations0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
        </div>
        <input class="form-control" name="vaccinations" id="vaccinations" type="hidden">

        <label class="m-2 text-success font-weight-bold">Has your dog had a kennel cough vaccination?</label>
        <div role="group" class="ml-2" aria-label="First group">
            <a onclick="kennel('1')"><button id="kennel1" style="width:49%" type="button"
                    class="btn btn-light">Yes</button></a>
            <a onclick="kennel('0')"><button id="kennel0" style="width:49%" type="button"
                    class="btn btn-light">No</button></a>
        </div>
        <input class="form-control" name="kennel" id="kennel" type="hidden">
        <label class="m-2 text-success font-weight-bold">Does the dog have any allergies?</label>
        <textarea name="allergies" class="ml-2" cols=84 placeholder="Leave empty if it is not the case" value="<?php if (isset($_POST["allergies"])){echo $_POST["allergies"];}; ?>"></textarea>
        <label class="m-2 text-success font-weight-bold">Is your dog on any medication?</label>
        <textarea name="medication" class="ml-2" cols=84 placeholder="Leave empty if it is not the case" value="<?php if (isset($_POST["medication"])){echo $_POST["medication"];}; ?>"></textarea>
        <label class="m-2 text-success font-weight-bold">Vet's name</label>
        <input class="form-control" name="vetname" placeholder="Vet's name" value="<?php if (isset($_POST["vetname"])){echo $_POST["vetname"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Vet's phone</label>
        <input class="form-control" name="vetphone" placeholder="Vet's phone" value="<?php if (isset($_POST["vetphone"])){echo $_POST["vetphone"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Vet's address</label>
        <input class="form-control" name="vetaddress" placeholder="Vet's address" value="<?php if (isset($_POST["vetaddress"])){echo $_POST["vetaddress"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Insurer</label>
        <input class="form-control" name="insurer" placeholder="Insurer" value="<?php if (isset($_POST["insurer"])){echo $_POST["insurer"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Insurer's policy number</label>
        <input class="form-control" name="policynumber" placeholder="Insurer's policy number" value="<?php if (isset($_POST["policynumber"])){echo $_POST["policynumber"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Emergency contact phone</label>
        <input class="form-control" name="emergencycontact" placeholder="Emergency contact phone" value="<?php if (isset($_POST["emergencycontact"])){echo $_POST["emergencycontact"];}; ?>">
        <input type="hidden" value="<?php echo $_POST['pet_id'];?>" name="pet_id">
        <button style="margin-left:85%;" class="btn btn-success clearfix float-right m-2" type="submit" value="Submit form">Submit form</button>
    </form>
</div>

<div id="cat3" style="display:none; width:800px; margin-left:20%; border:1px solid black;">
    <form action="includes/petowner/update_pet_func.php" method="post">
        <input type="file" accept="image/*" name="petimage" style="display:none" value="<?php if (isset($_FILES["petimage"])){$petimage=$_FILES["petimage"]; echo "<img src=$petimage />"; } ?>">
        <input name="name" value="<?php if (isset($_POST["name"])){echo $_POST["name"]; }; ?>" type="hidden">
        <input name="sex" value="<?php if (isset($_POST["sex"])){echo $_POST["sex"];}; ?>" type="hidden">
        <input name="birthdate" value="<?php if (isset($_POST["birthdate"])){echo $_POST["birthdate"];}; ?>" style="display:none">
        <input name="breed" value="<?php if (isset($_POST["breed"])){echo $_POST["breed"];}; ?>" type="hidden">
        <input name="chip" value="<?php if (isset($_POST["chip"])){echo $_POST["chip"];}; ?>" type="hidden">
        <input name="description" value="<?php if (isset($_POST["description"])){echo $_POST["description"];}; ?>" type="hidden">
        <input name="sterilized" value="<?php if (isset($_POST["sterilized"])){echo $_POST["sterilized"];}; ?>" type="hidden">
        <input name="alongwithdogs"
            value="<?php if (isset($_POST["alongwithdogs"])){echo $_POST["alongwithdogs"];}; ?>" type="hidden">
        <input name="alongwithchildren"
            value="<?php if (isset($_POST["alongwithchildren"])){echo $_POST["alongwithchildren"];}; ?>" type="hidden">
        <input name="alongwithcats"
            value="<?php if (isset($_POST["alongwithcats"])){echo $_POST["alongwithcats"];}; ?>" type="hidden">
        <input name="walkingroutine"
            value="<?php if (isset($_POST["walkingroutine"])){echo $_POST["walkingroutine"];}; ?>" type="hidden">
        <input name="eatingroutine"
            value="<?php if (isset($_POST["eatingroutine"])){echo $_POST["eatingroutine"];}; ?>" type="hidden">
        <input name="sleep_place" value="<?php if (isset($_POST["sleep_place"])){echo $_POST["sleep_place"];}; ?>" type="hidden">

        <h1 class="display-4 text-success font-weight-bold">Veterinarian and Insurance</h1>
        <label class="m-2 text-success font-weight-bold">Does the cat have any allergies?</label>
        <textarea name="allergies" class="ml-2" cols=84 placeholder="Leave empty if it is not the case" value="<?php if (isset($_POST["allergies"])){echo $_POST["allergies"];}; ?>"></textarea>
        <label class="m-2 text-success font-weight-bold">Is your cat on any medication?</label>
        <textarea name="medication" class="ml-2" cols=84 placeholder="Leave empty if it is not the case" value="<?php if (isset($_POST["medication"])){echo $_POST["medication"];}; ?>"></textarea>
        <label class="m-2 text-success font-weight-bold">Vet's name</label>
        <input class="form-control" name="vetname" placeholder="Vet's name" value="<?php if (isset($_POST["vetname"])){echo $_POST["vetname"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Vet's phone</label>
        <input class="form-control" name="vetphone" placeholder="Vet's phone" value="<?php if (isset($_POST["vetphone"])){echo $_POST["vetphone"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Vet's address</label>
        <input class="form-control" name="vetaddress" placeholder="Vet's address" value="<?php if (isset($_POST["vetaddress"])){echo $_POST["vetaddress"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Insurer</label>
        <input class="form-control" name="insurer" placeholder="Insurer" value="<?php if (isset($_POST["insurer"])){echo $_POST["insurer"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Insurer's policy number</label>
        <input class="form-control" name="policynumber" placeholder="Insurer's policy number" value="<?php if (isset($_POST["policynumber"])){echo $_POST["policynumber"];}; ?>">
        <label class="m-2 text-success font-weight-bold">Emergency contact phone</label>
        <input class="form-control" name="emergencycontact" placeholder="Emergency contact phone" value="<?php if (isset($_POST["emergencycontact"])){echo $_POST["emergencycontact"];}; ?>">
        <input type="hidden" value="<?php echo $_POST['pet_id'];?>" name="pet_id">
        <button class="btn btn-success clearfix float-right m-2" type="submit" value="Submit form">Submit form</button>
    </form>
</div>
</div>
</div>


<?php

}else{
   echo '<script language="javascript">window.location.href ="/"</script>';
}
}?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2" style="margin-bottom:40px">
            <a href="petowner_dashboard.php" class="btn btn-success mb-2"> Go back to dashboard</a>
        </div>
    </div>
</div>


<?php include 'footer.php';?>
