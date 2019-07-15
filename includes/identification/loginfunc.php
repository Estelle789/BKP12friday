<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../dbh-inic.php';
if (isset($_POST['submit'])) {
    try {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username) || empty($password)) {
            header("Location: .../../index.php?fields_empty");
            exit();
        } else {

            $sql = "SELECT*FROM  users where username='" . $username . "' ";
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
                    } else if($row['verified']==0){
                        header("Location: ../../index.php?info=Not_Verified_Account");
                        exit();
                    } else if ($hashedpwdCheck == true) {
                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['last_name'] = $row['last_name'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['phone'] = $row['phone'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['type'] = $row['type'];
                        if ($_SESSION['type'] == '3') {
                            header("Location: ../../petsitterdashboard.php?petsitter=loginSuccess");
                            exit();
                        } else if ($_SESSION['type'] == "2") {
                            header("Location: ../../hotelownerdashboard.php?hotelowner=loginsuccess");
                            exit();
                        } else if ($_SESSION['type'] == "1") {
                            header("Location: ../../petowner_dashboard.php?petOwner=loginsuccess");
                        } else {
                            header("Location: ../../index.php?info=wronglogin");
                            exit();
                        }
                    }
                }

            }
        }

    } catch (PDOException $e) {
        echo "error" . $e->getMessage();
    }
} //else {
//header("Location: ../index.php?server_error");
//exit();
//}
