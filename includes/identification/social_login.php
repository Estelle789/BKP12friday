<?php
include '../dbh-inic.php';
session_start();
$name = $_POST['socialEmail'];
if (isset($_POST['googleLogin'])) {
    $query = "SELECT * FROM google_users where  email='" . $name . "'";
    $result = $pdo->prepare($query);
    $result->execute();
    $resultCheck = $result->rowCount();
    if ($resultCheck < 1) {
        header("Location: ../../index.php?info=socials");
        exit();
    } else {
        if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['first_name'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['picture'] = $row['picture'];
            $_SESSION['type'] = $row['type'];
            if ($_SESSION['type'] == "1") {
                header("Location: ../../petowner_dashboard.php?social_login_success");
                exit();
            } else if ($_SESSION['type'] == "2") {
                header("Location: ../../hotelownerdashboard.php?social_login_success");
                exit();
            } else if ($_SESSION['type'] == "3") {
                header("Location: ../../petsitterdashboard.php?social_login_success");
                exit();
            } else {
                header("Location: ../../index.php?info=there_isn't_any_social_users");
                exit();
            }
        }
    }
}
