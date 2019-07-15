<?php include 'header.php';?>

<link rel="stylesheet" href="public/css/hotelownerdashboard.css">

<?php
  include 'includes/dbh-inic.php';
  $i=0;
  if (isset($_SESSION['id']))
  {
    $showQuery = "SELECT * FROM hotels where user_id='" . $_SESSION['id'] . "' and status ='1' ";
    $resultShow = $pdo->prepare($showQuery);
    $resultShow->execute();
    $fetchResult = $resultShow->fetch();

    /*$userQuery = "SELECT * FROM users where id='" . $_SESSION['id'] . "'";
    $resultShowUser = $pdo->prepare($userQuery);
    $resultShowUser->execute();
    $fetchResultUser = $resultShowUser->fetch();*/

    if ($fetchResult == "0")
    {?>
      <div class="container-fluid"style="margin-top:100px">
        <div class="row d-flex d-md-block flex-nowrap wrapper" >
          <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width" style="position:inherit" id="sidebar">
            <div class="list-group border-0 card text-center text-md-left" >
              <a href="hotelownerdashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Dashboard</span></a>
              <a href="addHotel.php?info=welcome" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Add hotel</span></a>
            </div>
          </div>
        <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
        </main>
        </div>
      </div>
      <?php }

    else {?>
      <div class="container-fluid" style="margin-top:100px">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
          <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width " style="position:inherit;" id="sidebar">
            <div class="list-group border-0 card text-center text-md-left">
              <a href="hotelownerdashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Dashboard</span></a>
              <a href="addHotel.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Add hotel</span></a>
              <a href="messaging.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">messages</span></a>
              <a href="hotelowneravailability.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Manage availability</span></a>
            </div>
          </div>
    <?php }}?>

        <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
          <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
          <hr style="overflow:hidden;">

  <?php function checkFolderIsEmptyOrNot ( $folderName ){ // the folder must exist; returns TRUE if empty
        $files = array ();
        if ( $handle = opendir ( $folderName ) ) {
            while ( false !== ( $file = readdir ( $handle ) ) ) {
                if ( $file != "." && $file != ".." )
                    $files[] = $file;
                if(count($files) >= 1)
                    break;
            }
            closedir ( $handle );
        }
        return ( count ( $files ) > 0 ) ? FALSE: TRUE;
    }
    ?>
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imgInp").change(function() {
    readURL(this);
  });
</script>


    <form action="includes/hotelowner/modify_hotelowner.php" method="POST" enctype="multipart/form-data">
      <div class="card">
        <div class="card-body">
          <img class="rounded mx-auto d-block col-md-3" align="center" id="blah" width="200" src="">
          <label for="userimg">User Image</label>
          <br>
          <?php
          $prefolder = 'images2/' . $_SESSION['id'] .'/';
          $folder = 'images2/' . $_SESSION['id'] .'/user/';
          if (!file_exists($prefolder)) {mkdir($prefolder);}
          if (!file_exists ($folder)) {
            mkdir($folder);
          }
          if(!checkFolderIsEmptyOrNot($folder)) {
            foreach ( glob($folder . '*') as $file ) {
               echo "<img src=$file width=200>";
             }
          } ?>
            <input class="row justify-content-center form-control" type="file" id="imgInp" name="userimg" value="User Image" size="60" multiple="NO" >
          <!--<label id="#bb" class="choosePicture"><i class="fa fa-user-o fa-5x mt-5"></i>
            <input type="file" id="imgInp" name="picture" class="hotelOwnerPicture" size="60">
          </label>-->
          <br>
          <label for="name">Name</label>
          <input type="text" name="updateName" value="<?php echo $_SESSION['first_name']; ?>" class="form-control">
          <label for="surname">Surname</label>
          <input type="text" name="updateSurname"  value="<?php echo $_SESSION['last_name']; ?>" class="form-control">
          <label for="username">Username</label>
          <input type="text" name="updateUsername"  value="<?php echo $_SESSION['username']; ?>"  class="form-control">
          <label for="email">Email</label>
          <input type="email" name="updateEmail"  value="<?php echo $_SESSION['email']; ?>"  class="form-control">
          <label for="phone">Phone</label>
          <input type="number" name="updatePhone"  value="<?php echo $_SESSION['phone']; ?>"  class="form-control">
          <label for="updatePassword">Password</label>
          <input type="text" name="updatePassword"  value="<?php echo $_SESSION['password']; ?>"  class="form-control">
        </div><!-- Card Body end here -->
        <div class="card-footer d-flex justify-content-end x ">
           <input type="submit" value="update" name="updateprofile" class=" btn btn-outline-danger ">
        </div>
      </div><!-- Card End here -->
    </form>

  <?php ?>

        </main>
      </div>
</div>

<?php include 'footer.php';?>
