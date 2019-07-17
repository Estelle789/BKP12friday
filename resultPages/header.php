
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Claudia Luque">
    <!-- This is our Web site Icon -->
    <!--link rel="shortcut icon" href="public/images/bookingpetz_icon.ico" type="image/bookingpetz-icon"-->
    <link rel="icon" type="image/png" href="../public/img/bookingpetz_logo.png">
    <title>Bookingpetz.com</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap-grid.min.css">
    <!-- Our Custom css -->
    <link rel="stylesheet" href="../public/css/separate.css">
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/custom.css">
    <link rel="stylesheet" href="../public/css/fullcalendar.css">
    <link rel="stylesheet" href="../sidenav.css">
    <link rel="stylesheet" href="../public/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="../public/css/topbar.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/indexStylesheet.css">
    <!-- Css Finish -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<!--
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
-->
    <script type="text/javascript" src="../public/js/steptwo.js"></script>
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
    <meta name="google-signin-client_id" content="158080524411-mbe3g4v1mn2m8rrqd5n8sq3u30an1eob.apps.googleusercontent.com">
    <script type="text/javascript" src="../public/js/social_accounts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTKcmmhPISH5hKx2VEGRpRbQ8mXBTyGJE"  async defer></script>

    <script>/*
// Render Google Sign-in button
function renderButton() {
    gapi.signin2.render('gSignIn', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
    });
}

// Sign-in success callback
function onSuccess(googleUser) {
    // Get the Google profile data (basic)
    //var profile = googleUser.getBasicProfile();

    // Retrieve the Google account data
    gapi.client.load('oauth2', 'v2', function () {
        var request = gapi.client.oauth2.userinfo.get({
            'userId': 'me'
        });
        request.execute(function (resp) {
            // Display the user details
               // Save user data
               saveUserData(resp);
        });
    });
}

// Sign-in failure callback
function onFailure(error) {
    alert(error);
}

// Sign out the user
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        document.getElementsByClassName("userContent")[0].innerHTML = '';
        document.getElementsByClassName("userContent")[0].style.display = "none";
        document.getElementById("gSignIn").style.display = "block";
    });

    auth2.disconnect();
}
// Save user data to the database
function saveUserData(userData){
    $.post('userData.php', { oauth_provider:'google',"type":$('#type').val(), userData: JSON.stringify(userData) });
}*/
</script>

 <script>

 // Render Google Sign-in button
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '729607264090513', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

    // Check whether the user already logged in
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //display user data
            getFbUserData();
        }
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
        } else {
            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
}

// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,picture'},
    function (response) {

        document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
        document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
        document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
        document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
    });
}

// Logout from facebook
function fbLogout() {
    FB.logout(function() {
        document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
        document.getElementById('fbLink').innerHTML = '<img src="../public/images/facebook_login.png"/>';
        document.getElementById('userData').innerHTML = '';
        document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';

    });
}

function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,picture'},
    function (response) {
      console.log(response);
        // Save user data
        saveUserDat(response);
    });
}
// Save user data to the database
function saveUserDat(userData){
  console.log({oauth_provider:'facebook',"type":$('#type').val(),userData: JSON.stringify(userData)});
    $.ajax({
      type:"POST",
      url:"includes/social_users.php",
      data:{oauth_provider:'facebook',"type":$('#type').val(),userData: JSON.stringify(userData)},
      success:function(data){

      }
    })
}
 </script>

</head>

<body>

<header>

  <?php include '../warnings.php';?>


	<header id="indexHeader">
		<div>
			<a href="../index.php"><img src="../public/img/bookingpetz_logo.png" alt="BookingPetz logo" id="headerLogo"></a>
		</div>

		<div>
			<a href="https://www.bookingpetz.com/blog-2"><button id="headerButton1">Visit our blog</button></a>
      <a href="" data-toggle="modal" data-target="#becameOurpartner"><button id="headerButton2">Become our partner</button></a>
      <?php if (!(isset($_SESSION["username"]))) {?>
			<a href="" data-toggle="modal"  data-target='#registerform'><button id="headerButton3">Registration</button></a>
      <a href="" data-toggle="modal" data-target='#loginform'><button id="headerButton4">Log in</button></a>
      <?php }if (isset($_SESSION["username"])) {
          if ($_SESSION['type'] == '3') {?>
            <a href='../petsitterdashboard.php' ><button  id="dash"> <span><?php echo $_SESSION['username'];?> </span></button></a>
          <?php } else if ($_SESSION['type'] == "2") {?>
            <a href='../hotelownerdashboard.php' ><button  id="dash"> <span><?php echo $_SESSION['username'];?> </span></button></a>
          <?php } else if ($_SESSION['type'] == "1") {?>
            <a href='../petowner_dashboard.php' ><button  id="dash"> <span><?php echo $_SESSION['username'];?> </span></button></a>
          <?php } else { ?>
            <a href='../index.php' ><button  id="dash"> <span><?php echo $_SESSION['username'];?> </span></button></a>
          <?php }?>
          <a href='../includes/identification/logoutfunc.php' ><button  id="logout"> <span>Log out</span></button></a>
          <?php }?>
		</div>


<style>

#logout{
width: 100px;
height: 40px;
border-radius: 10px;
border: solid 2px white;
background-color: transparent;
color: white;
margin-right: 10px;
font-weight: bold;
}


#logout:hover{
background-color: #ff6747;
border: solid 1.5px #ff6747;
}


#dash{
width: 100px;
height: 40px;
border-radius: 10px;
border: solid 2px white;
background-color: transparent;
color: #37E12A;
margin-right: 10px;
font-weight: bold;
}


#dash:hover{
background-color: #737AD4;
border: solid 1.5px #ff6747;
}

</style>
         <!--
      <div class="container-fluid">
      <div class="row">
           <div class="col-md-12">

                <nav class="navbar navbar-expand-lg navbar-light  top-navbar ">
                        <a class="navbar-brand" href="#"><img src="public/images/bookingpetz_logo.png" alt="" srcset="" width="50px" height="50px"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                          <ul class="navbar-nav navbar-general nav-item-topNavbar">
                            <li class="nav-item active nav-item-topNavbar ">
                              <a class="nav-link btn btn-outline-success top-navbar-partner" href="#" data-toggle="modal" data-target="#becameOurpartner">Became our partner</a>
                            </li>

                            <li class="nav-item nav-item-topNavbar">
                              <a class="nav-link btn top-navbar-register" href="#" data-toggle="modal"  data-target='#registerform'>Register</a>
                            </li>
                            <li class="nav-item nav-item-topNavbar">
                              <a class="nav-link btn top-navbar-login" href="#" data-toggle="modal" data-target='#loginform'>Login</a>
                            </li>


                              <li class="nav-item top-nav-item">
                            <a class="nav-link top-nav-link btn">
                          </ul>
                        </div>
                      </nav>


       </div>
      </div>
     </div>
 -->
    </header>
     <script>
            function invokeregister(int){
                document.getElementById("type").value= int;
                $('#registerform').modal('show');
             }

    </script>

<!-- Became our partners routing buttons modal -->
<section class="became-our-partner">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    <div class="modal fade" id="becameOurpartner" role="dialog">
     <div class="modal-dialog">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <div class="modal-content">
         <div class="modal-body">
           <a href="#" class="btn btn-outline-primary form-control " data-toggle="modal" onclick="invokeregister(2)" data-target="#registerform" style="margin-bottom:5px !important;"><font size="4px">Register as a hotel owner</font></a>
           <a href="#" class="btn btn-outline-success form-control" data-toggle="modal" onclick="invokeregister(3)" data-target="#registerform"><font size="4px">Register as a dog sitter</font></a>
         </div>
       </div>
     </div>
   </div>
  </div>
 </div>
 </div>
</section>

<!-- Register Form start here -->
<section class="register_form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
<div class="modal fade" id="registerform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div  class="modal-content"  >
                      <div class="modal-header d-flex  login_modal_header">
                            <img src="../public/img/bookingpetz_logo.png" class="login_logo" alt="bookingpetz/welcome">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                            </button>
                      </div>
                       <h2 style="font-weight:bold; margin-left: 36%; margin-top: 10px; color: #0eb25a"> Registration </h2>
                      <div class="modal-body" style=" height: 400px;">

                  <div class="left">
                    <form action="includes/identification/registerfunc.php" method="post">
                    <input type="text" id="first_name" class="form-control" name="first_name" placeholder="First Name" required/>
                    <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Last Name" required/>
                    <input type="text" id="username" class="form-control" name="username" placeholder="Username" required/>
                    <input type="email" id="email" class="form-control" name="email" placeholder="E-mail" required/>
                    <input type="number" id="phone" class="form-control" name="phone" placeholder="Phone number" required/>
                    <input type="password" class="form-control" id="p1" name="password" placeholder="password" required />
                    <input type="hidden" id="type" class="form-control"  value="1" name="type" placeholder="" required/>
                    <input class="btn btn-primary" name="submit" type="submit" style="margin-left: 65%; margin-top:10px" value="Submit">
                    </form>
                  </div>
                  <div class="or">OR</div>
                  <div class="right">

                <!-- Display Google sign-in button -->
                <div id="gSignIn" class="google_login"></div>
                <!-- Show the user profile details -->
                <div class="userContent" style="display: none;"></div>
                <!-- Display login status -->
                <div id="status"></div>
                <!-- Facebook login or logout button -->
                <a href="javascript:void(0);" onclick="fbLogin()" id="fbLink"><img src="../public/images/facebook_login.png" class="facebook_login_img" /></a>
                <!-- Display user profile data -->
                <div id="userData"></div>
           </div>
          </div>
         </div>
        </div>
       </div>
       </div>
       </div>
       </div>
 </section>
<!--login form is here-->
<section class="loginform">
<div class="container">
<div class="row">
<div class="modal fade" id="loginform"  role="dialog" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header d-flex  login_modal_header">
        <img src="../public/img/bookingpetz_logo.png" class="login_logo" alt="bookingpetz/welcome">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
      </div>
        <div class="modal-body">

               </button>
                 <form action="../includes/identification/loginfunc.php" method="post" enctype="multipart/form-data">
                   <input type="text" class="form-control login_username" name="username" placeholder="E-mail / Username">
                      <input type="password" class="form-control login_password" name="password" placeholder="password">
                        <button type="submit" name="submit" class="btn btn-primary">Log in</button>

                        <!-- login controlling-->
                     <?php if ($popup == "wrongpassword") {
    echo "<div class='alert alert-danger' role='alert'> Wrong password. Try again </div>";
}if ($popup == "wronglogin") {
    echo "<div class='alert alert-danger' role='alert'> Wrong mail/username. Try again</div>";
}if ($popup == "forbidden") {
    echo "<div class='alert alert-danger' role='alert'> You need to be logged in in order to perform that action</div>";
}
?><!-- // end of login controlling -->
                          </form>
                      </div>
                      <div class="modal-footer">
                          <!--Google Login Submit button -->
                          <input type="button" class="btn btn-danger" value="Google Login" name="google" data-toggle="modal" data-target="#socialLogin">
                          <!-- Facebook Login submit Button-->
                          <input type="button" class="btn btn-primary" value="Facebook Login" name="facebook" data-toggle="modal" data-target="#socialLogin1" >
                      </div>
                    </div>
                  </div>
                </div>
           </div><!-- Login Form Row end here -->
          </div><!-- Login Form Container End here -->
</section>
<!-- Login Form Section End here -->
<section class="warnings_modals">
<!-- Successfully registered modal-->
           <div id="modreg" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-body" style="height: 82px;">
                           <button type="button" class="close" data-dismiss="modal">×</button>
                        <div class="alert alert-success" role="alert" style=" width: 382px;">
                        You registered successfully. You may now login
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<!--//Successfully registerd modal end-->
<!--Error Modal start here -->
         <div id="modregerr" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-body" style="height: 82px;">
                           <button type="button" class="close" data-dismiss="modal">×</button>
                        <div class="alert alert-danger" role="alert" style=" width: 382px;">
                        Error. Try again
                        </div>
                     </div>
                    </div>
                  </div>
                  </div>
  <!--// Error modal end here -->
  <!-- User Taken or Email taken modal start here -->
      <div id="modregerrr" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-body" style="height: 82px;">
                           <button type="button" class="close" data-dismiss="modal">×</button>
                        <div class="alert alert-danger" role="alert" style=" width: 382px;">
                        The user/email is already registered
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<!-- // User taken or email taken modal end here -->
<div id="socials" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-body" style="height: 82px;">
                           <button type="button" class="close" data-dismiss="modal">×</button>
                        <div class="alert alert-danger" role="alert">
                                Are you sure you are registered with facebook or google ?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

</section>
<section class="social_accounts_login">
         <div class="container">
          <div class="row">
          <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="socialLogin" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header  d-flex justify-content-center login_modal_header">
                          <img src="../public/img/bookingpetz_logo.png" class="login_logo" >
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                    <form action="../includes/identification/social_login.php" method="POST">
                         <input type="email" name="socialEmail"  class="form-control login_username" placeholder="please insert your registered email">
                         <input type="submit" value="Login" class="btn btn-outline-danger form-control" name="googleLogin" style="margin-top:10px;">
                         </form>
                         </div>
                         <div class="modal-footer d-flex justify-content-center">

                        </div>
                  </div><!--// Modal Dialog -->
                </div><!-- // Modal -->
          </div><!-- // google Login Row -->
         </div> <!-- // google Login container -->
         <!-- Facebook Login -->
         <div class="container">
          <div class="row">
                <!-- Modal -->
                <div class="modal fade" id="socialLogin1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header d-flex justify-content-center login_modal_header ">
                       <img src="../public/img/bookingpetz_logo.png" class="login_logo" >
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                    <form action="../includes/identification/social_login_facebook.php" method="POST">
                         <input type="text" name="firstName"  class="form-control login_username" placeholder="please insert your first name ">
                         <input type="submit" value="Login" class="btn btn-outline-danger form-control" name="facebookLogin" style="margin-top:10px;">
                    </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">

                        </div>
                  </div><!--// Modal Dialog -->
                </div><!-- // Modal -->
          </div><!-- // Facebook Login Row -->
         </div> <!-- // Facebook Login container -->
</section>

<style>


  .h3{
  text-align:center;
}
  .left {
    position: absolute;
    top: 0;
    left: -7px;
    box-sizing: border-box;
    padding: 30px;
    width: 300px;
    height: 400px;
    border-radius: 10px;
  }

  .or {
    position: absolute;
    top: 77px;
    left:4px;
    margin-left: 300px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    line-height: 40px;
    text-align: center;
  }

  .right {
    position:relative;
    top: 0;
    margin-left: 355px;
    box-sizing: border-box;
    padding: 0px;
    width: 100%;
    border-radius: 0 2px 2px 0;
  }

    .right .loginwith {
      display: block;
      margin-bottom: 40px;
      font-size: 28px;
      color: #FFF;
      text-align: center;
    }

    .login_username , .login_password{
      margin-bottom:20px;
      box-shadow: 2px 3px #219f78;
    }

    .login_modal_header
    {
      background-color:#0eb25a;

    }


    .login_logo
    {
        width:100px !important;
        margin-left: 40%;
        margin-right: 30%;
        position: relative !important;
    }

    .right .facebook_login_img{
    margin-top:0px;
    width:35% !important;
    height:10%;
  }

  .google_login{
    margin-top:55px !important;
  }

  .btn-primary{
    margin-left: 85%;
  }

  .btn-outline-danger{
    width: 100px;
    border: 0;
    color: white;
    font-weight: bold;
    margin-left: 79%;
    background-color: #da4980;
    border: 2px solid #da4980;
    border-radius: 10px;
    box-shadow: 0 3px 6px 0 #da4980;
  }
  .btn-outline-danger:hover{
    width: 100px;
    border: 0;
    color: white;
    font-weight: bold;
    margin-left: 79%;
    background-color: red;
    border: 2px solid #da4980;
    border-radius: 10px;
    box-shadow: 0 3px 6px 0 #da4980;
  }


</style>
