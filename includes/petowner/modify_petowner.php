<?php
  session_start();
  include('../dbh-inic.php');
  ob_start();
  if(isset($_SESSION['id'])){
    if (isset($_POST['updateprofile'])) {



      $sessionID=$_SESSION['id'];
      $target_dir = "../../images2/$sessionID/user/";

      if ($_FILES['userimg']['name'] != NULL) {

        if (!file_exists($target_dir)){
          mkdir($target_dir);
        } else {
          foreach ( glob($target_dir . '*') as $file ) {
            unlink($file);
          }
          rmdir($target_dir);
          mkdir($target_dir);
        }
        $target_file = $target_dir . basename($_FILES['userimg']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // move_uploaded_file($_FILES["userimg"]["tmp_name"][$i], $target_file);
        $check = getimagesize($_FILES['userimg']['tmp_name']);
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
        if ($_FILES['userimg']['size'] > 5000000) {
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
           if (move_uploaded_file($_FILES['userimg']['tmp_name'], $target_file)) {
               echo "The file ". basename( $_FILES['userimg']['name']). " has been uploaded.";
           } else {
               echo "Sorry, there was an error uploading your file.";
           }
         }
       }
     }
    $first_name=$_POST['updateName'];
    $last_name =$_POST['updateSurname'];
    $username=$_POST['updateUsername'];
    $email = $_POST['updateEmail'];
    $phone = $_POST['updatePhone'];

    $updateQuery = "UPDATE users SET first_name='$first_name',last_name='$last_name',username='$last_name',email='$email',phone='$phone' where id='$sessionID'";
    $updateResult = $pdo->prepare($updateQuery);
    $updateResult->execute();
    if($updateResult==true) {
      header("Location: ../../petowner_dashboard.php") ;
      exit();
    } else {
      header("Location: ../../petownerupdate.php") ;
      exit();
    }

}
?>
