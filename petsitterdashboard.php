<?php include 'header.php';?>




  <div style="margin-top: 100px;"></div>

  <?php
  include 'includes/dbh-inic.php';
  if (isset($_SESSION['id'])) {
      $showQuery = "SELECT * FROM sitter_pending  where user_id='" . $_SESSION['id'] . "' and rejected ='1'";
      $resultShow = $pdo->prepare($showQuery);
      $resultShow->execute();
      $fetchResult = $resultShow->fetch();
      if ($fetchResult == "0") {

          ?>
              <div class="container-fluid" style="margin-top: 98px">
      <div class="row d-flex d-md-block flex-nowrap wrapper">
          <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width" style="position:inherit;" id="sidebar">
                  <div class="list-group border-0 card text-center text-md-left">
                  <a href="petsitterdashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                  <a href="dogsittersteps.php?info=welcome" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Add Petsitter data</span></a>
              </div>
          </div>
          <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">

          </main>
      </div>
  </div>
      <?php } else {?>
        <div class="container-fluid" style="margin-top: 98px">
      <div class="row d-flex d-md-block flex-nowrap wrapper">
          <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width " style="position:inherit;" id="sidebar">
                  <div class="list-group border-0 card text-center text-md-left">

                  <a href="petsitterdashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                  <a href="dogsittersteps.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Add Petsitter data</span></a>
                  <a href="messaging.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">messages</span></a>
                  <a href="availibility.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Manage availability</span></a>

              </div>
          </div>
          <?php }}?>
          <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
              <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
           <hr>
           <?php if (isset($_SESSION['id'])) {

      include 'includes/dbh-inic.php';
      if (isset($_POST['updateprofile'])) {

          $updateQuery = "UPDATE users SET first_name='" . $_POST['updateName'] . "',last_name='" . $_POST['updateSurname'] . "',username='" . $_POST['updateUsername'] . "',email='" . $_POST['updateEmail'] . "',phone='" . $_POST['updatePhone'] . "' where id='" . $_SESSION['id'] . "'";
          $r = $pdo->prepare($updateQuery);
          $r->execute();
          if ($r == true) {
              echo "<script type='text/javascript'>alert('updatesuccess');</script> ";
          } else {
              echo "<script type='text/javascript'>alert('somethings wrong');</script>";
          }
      }
      ?>

  <form action="petsitterdashboard.php" method="POST">


           <div class="card">
           <div class="card-body">
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
           <?php }?>
          </main>
      </div>
  </div>


    </div>
  </div>







<?php include 'footer.php';?>
