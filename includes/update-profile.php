<?php 
include('dbh-inic.php');
session_start();
if(isset($_POST['update'])){
 
  $sql="SELECT * FROM users where username='".$_POST['updateUsername']."' ";
  $result=$pdo->prepare($sql);
  $result->execute(); 
  $resultCheck=$result->rowCount();
  if($resultCheck > 0) {
    header("Location: ../hotelownerdashboard.php?usernameAlreadyTaken");
    exit();
  }else{
    $password=$_POST['updatePassword'];
    $passwordHash=password_hash($password,PASSWORD_DEFAULT);
    $sql1="UPDATE users SET first_name='".$_POST['updateName']."',last_name='".$_POST['updateSurname']."',username='".$_POST['updateUsername']."',email='".$_POST['updateEmail']."',phone='".$_POST['updatePhone']."',password='".$passwordHash."',type='".$_SESSION['type']."' where id='".$_SESSION['id']."'";
    echo $sql1;
    $results=$pdo->prepare($sql1);
    $results->execute();
    if($results == true){
      header("Location: ../hotelownerdashboard.php?updateSuccess");
      exit();
    }else{
      header("Location: ../hotelownerdashboard.php?somethingisWrong");
      exit();
    }        
  }
}



?>