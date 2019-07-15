<?php include 'partials/header.php';

  error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
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

   <form class="form-signin" action="includes/identify/register.php" method="POST">

  <img class="mb-4" src="../public/images/bookingpetz_logo.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Sign up As Admin</h1>
   <label for="registerName" class="sr-only">First Name</label>
   <input type="text" name="registerName" class="form-control" placeholder="First Name" require>
   <label for="registerLastName" class="sr-only">First Name</label>
   <input type="text" name="registerLastName" class="form-control" placeholder="Last Name" require>
   <label for="registerUsername" class="sr-only">First Name</label>
   <input type="text" name="registerUsername" class="form-control" placeholder="Username" require>
  <label for="registerEmail" class="sr-only">Email address</label>
  <input type="email" id="registerEmail" class="form-control" name="registerEmail" placeholder="Email address" required >
  <label for="registerPassword" class="sr-only">Password</label>
  <input type="password" id="registerPassword" class="form-control" name="registerPassword" placeholder="Password" required>

<input type="submit" value="Sign Up" name="adminButton" class="btn btn-lg btn-primary btn-block">
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>



<?php include 'partials/footer.php';?>