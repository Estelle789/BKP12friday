<?php
include '../dbh-inic.php';
 
// check first if record exists
$query = "SELECT id FROM users WHERE verification_code = ? and verified = '0'";
$stmt = $pdo->prepare( $query );
$stmt->bindParam(1, $_GET['code']);
$stmt->execute();
$num = $stmt->rowCount();
 
if($num>0){
 
    // update the 'verified' field, from 0 to 1 (unverified to verified)
    $query = "UPDATE users
                set verified = '1'
                where verification_code = :verification_code";
 
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':verification_code', $_GET['code']);
 
    if($stmt->execute()){
        // tell the user
         header("Location: ../../index.php?info=activated");
         exit();
    }else{
        echo "<div>Unable to update verification code.</div>";
        //print_r($stmt->errorInfo());
    }
 
}else{
    // tell the user he should not be in this page
    echo "<div>We can't find your verification code.</div>";
}
?>