<?php
include '../dbh-inic.php';
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['addHotel'])) {

    $hotelname = $_POST['hotelName'];
    $hotelWebsite = $_POST['hotelWebsite'];
    $openAndclose = $_POST['openAndclose'];
    $hotelDescription = $_POST['hotelDescription'];
    $association = $_POST['association'];
    $certification = $_POST['certification'];
    $hotelNumber = $_POST['hotelNumber'];
    $hotelEmail = $_POST['hotelEmail'];
    $contactPerson = $_POST['contactPerson'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zipCode = $_POST['zipCode'];
    $user_id = $_SESSION['id'];
    $insertHotel = "INSERT INTO hotels( user_id, hotel_name, website, open_close_hours, description, association, certification, hotel_phone, email_address, contact_person, country, city, address, postal_code) VALUES ('$user_id','$hotelname','$hotelWebsite','$openAndclose','$hotelDescription','$association','$certification','$hotelNumber','$hotelEmail','$contactPerson','$country','$city','$address','$zipCode')";
    $result = $pdo->prepare($insertHotel);
    $result->execute();
    if ($result == true) {
        header("Location: ../../services.php?query_success");
        exit();
    } else {
        header("Location: .../../addHotel.php?query_failed");
        exit();
    }
}
