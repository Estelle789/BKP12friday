<?php
// Load the database configuration file
include '../dbConfig.php';

// Get and decode the POST data
$userData = json_decode($_POST['userData']);

if(!empty($userData)){
    
    // The user's profile info
    $oauth_provider = $_POST['oauth_provider'];
    $first_name = !empty($userData->name->givenName)?$userData->name->givenName:'';
    $last_name  = !empty($userData->name->familyName)?$userData->name->familyName:'';
    $email      = !empty($userData->emails[0]->value)?$userData->emails[0]->value:'';
    $picture    = !empty($userData->image->url)?$userData->image->url:'';
    
    // Check whether the user data already exist in the database
    /*$query = "SELECT * FROM social_users WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'";
    $result = mysqli_query($db,$query);
    
    if($result->num_rows > 0){ 
        // Update user data if already exists
        $query = "UPDATE social_users SET  first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', link = '".$link."', modified = NOW() WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'";
        $update = mysqli_query($db,$query);
    }else{
        // Insert user data
        $query = "INSERT INTO social_users VALUES (NULL, '".$oauth_provider."', '".$oauth_uid."', '".$first_name."', '".$last_name."', '".$email."', '".$gender."', '".$locale."', '".$picture."', '".$link."', NOW(), NOW())";
        $insert = mysqli_query($db,$query);
    }
    
    return true;*/

    $query = "SELECT * FROM users WHERE email = '".$email."' ";
    echo $query;
    $result = mysqli_query($db,$query);
    
    if($result->num_rows > 0){ 
        // Update user data if already exists
        $query = "UPDATE users SET  first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."',  Image = '".$picture."', modified = NOW() WHERE email = '".$email."'";
        echo $query;
        $update = mysqli_query($db,$query);
    }else{
        // Insert user data
        $query = "INSERT INTO users (first_name, last_name,email,Image, oauth_provider,username) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$picture."', '".$oauth_provider."', '".$email."')";
        echo $query;
        $insert = mysqli_query($db,$query);
    }

    return true;
}

?>

