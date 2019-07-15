<?php
 include '../dbh-admin-inic.php';
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 if (isset($_POST['loginAdmin'])) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
     try {
         $username = $_POST["inputEmail"];
         $password = $_POST["inputPassword"];
 
         if (empty($username) || empty($password)) {
             header("Location: .../../index.php?fields_empty");
             exit();
         } else {
 
             $sql = "SELECT * FROM  adminUser where email='$username'";
             $result = $pdo->prepare($sql);
             $result->execute();
             $resultCheck = $result->rowCount();
             if ($resultCheck < 1) {
                 header("Location: ../../index.php?info=wronglogin");
                 exit();
             } else {
                 if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                     $hashedpwdCheck = password_verify($password, $row['password']);
                     if ($hashedpwdCheck == false) {
                         header('Location: ../../index.php?info=wrongpassword');
                         exit();
                     }else if($row['verified']==0){
                        header("Location: ../../index.php?info=Not_Verified_Account");
                        exit();
                    } else if ($hashedpwdCheck == true) {
                         session_start();   
                         $_SESSION['id'] = $row['id'];
                         $_SESSION['first_name'] = $row['first_name'];
                         $_SESSION['last_name'] = $row['last_name'];
                         $_SESSION['username'] = $row['username'];
                         $_SESSION['email'] = $row['email'];
                         $_SESSION['password'] = $row['password'];
                       
                             header("Location: ../../dashboard.php?login=loginSuccess");
                             exit();
                         
                     }
                 }
 
             }
         }
 
     } catch (PDOException $e) {
         echo "error" . $e->getMessage();
     }
 }
?>