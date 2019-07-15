<?php

include('../dbh-inic.php');

if(isset($_POST['hotel'])){

  //We count all the files loaded to the system
  session_start();

  $countFiles=count($_FILES['hotelimg']['name']);
  $sessionID=$_SESSION['id'];
  $hotelID=$_POST['hotel_id'];
  $target_dir = "../../images2/$sessionID/$hotelID/";

  if (!file_exists($target_dir)){
    mkdir($target_dir);
  }

  if ($_FILES["hotelimg"]["name"][0] != NULL) {

    for ($i=0;$i<$countFiles;$i++){

      $target_file = $target_dir . basename($_FILES["hotelimg"]["name"][$i]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      // move_uploaded_file($_FILES["hotelimg"]["tmp_name"][$i], $target_file);
      $check = getimagesize($_FILES["hotelimg"]["tmp_name"][$i]);
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
      if ($_FILES["hotelimg"]["size"][$i] > 5000000) {
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

        if (move_uploaded_file($_FILES["hotelimg"]["tmp_name"][$i], $target_file)) {
          echo "The file ". basename( $_FILES["hotelimg"]["name"][$i]). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
  }
  $hotelname=$_POST['hotelName'];
  $hotelWebsite=$_POST['hotelWebsite'];
  $openAndclose =$_POST['openAndclose'];
  $hotelDescription=$_POST['hotelDescription'];
  $association = $_POST['association'];
  $certification = $_POST['certification'];
  $hotelNumber = $_POST['hotelNumber'];
  $hotelEmail = $_POST['hotelEmail'];
  $contactPerson = $_POST['contactPerson'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $zipCode = $_POST['zipCode'];
  $user_id=$_SESSION['id'];

  $updateQuery="UPDATE `hotels` SET  `hotel_name`='$hotelname',`website`='$hotelWebsite',`open_close_hours`='$openAndclose',`description`='$hotelDescription',
  `association`='$association',`certification`='$certification',`hotel_phone`='$hotelNumber',`email_address`='$hotelEmail',`contact_person`='$contactPerson',`country`='$country',`city`='$city',`address`='$address',
  `postal_code`='$zipCode'  WHERE user_id = '$user_id' AND id = '$hotelID'";
  $updateResult = $pdo->prepare($updateQuery);
  $updateResult->execute();
  if($updateResult==true){
    header("Location: ../../services.php?info=true");
    exit();
  }
  else{
    header("Location: ../../addHotel.php?info=false");
    exit();
  }
}


?>
