<?php include 'partials/header.php'; ?>
<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

@media (min-width: 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}

</style>


  <body class="text-center">
 
    <form class="form-signin" action="includes/identify/login.php" method="POST">
    <?php
   $info =$_GET['info'];
   if($info =="success"){ 
    echo "
     <div class='alert alert-info' role='alert' id='success_alert'>
    You can  Login 
   </div>
   ";
 }?>
   <script>
 setTimeout(function(){ document.getElementById('success_alert').style.display='none';}, 3000);
   </script>

  

  <img class="mb-4" src="../public/images/bookingpetz_logo.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Sign in As Admin</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" name="inputEmail" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me" > Remember me
    </label>
    <label>
    <a href="adminRegisteration.php">Do you need help for to be Admin ?</a>
    </label>
  </div>
   
  <input name="loginAdmin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>



<?php include 'partials/footer.php';?>