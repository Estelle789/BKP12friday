<?php include 'header.php';?>


<?php
  include 'includes/dbh-inic.php';
  if (isset($_SESSION['id'])) {
      $showQueryUser = "SELECT * FROM users  where id='" . $_SESSION['id'] . "' ";
      $resultShowUser = $pdo->prepare($showQueryUser);
      $resultShowUser->execute();
      $fetchResultUser = $resultShowUser->fetch();

      $showQuery = "SELECT * FROM pets where user_id='" . $_SESSION['id'] . "' /*and status ='1'*/ ";
      $resultShow = $pdo->prepare($showQuery);
      $resultShow->execute();
      $fetchResult = $resultShow->fetchAll(PDO::FETCH_ASSOC);

      if ($fetchResult == "0") {

          ?>
    <div class="container-fluid" style="margin-top:98px">
      <div class="row d-flex d-md-block flex-nowrap wrapper">
          <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width " id="sidebar">
                  <div class="list-group border-0 card text-center text-md-left">
                  <a href="petowner_dashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                  <a href="newpet.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Add pet </span></a>
              </div>
          </div>
          <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">

          </main>
      </div>
  </div>
      <?php } else {?>
  <div class="container-fluid" style="margin-top:98px">
      <div class="row d-flex d-md-block flex-nowrap wrapper">
          <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width " id="sidebar">
                  <div class="list-group border-0 card text-center text-md-left">

                  <a href="petowner_dashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                  <a href="newpet.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Add pet </span></a>
                  <a href="messaging.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">messages</span></a>
                  <a href="availibility.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Manage availability</span></a>

              </div>
          </div>
          <?php }}?>
          <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
              <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
              <hr style="overflow:hidden;">

  <?php if (isset($_SESSION['id'])) {
        include 'includes/dbh-inic.php';
        ?>
        <div class="row justify-content-between">
          <div class="col-3">
            <h2 align="center"><?php echo $_SESSION['username']; ?></h2>
          </div>
          <div class="align-self-end" style="border-radius: 10px; border: solid 2px #0C9A4E; background-color: #0C9A4E; width:10%; text-align:center; height: 30px;">
            <a href="petownerupdate.php" style="color:white; font-weight:bold;">Edit</a>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <?php
            $folder = 'images2/' . $_SESSION['id'] .'/user/';
            if ( file_exists($folder) ) {
               foreach ( glob($folder . '*') as $file ) {
                  echo "<img src=$file width=100%>";
               }
            }
            ?>
          </div>
          <div class="col-sm-4" style="margin-top:30px;"><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?><br><br><br>
          <?php echo $_SESSION['email']; ?></div>
          <div class="col-sm-4" style="margin-top:30px;">
            Pet owned: <strong><?php
            $nbPets = count($fetchResult);
            echo $nbPets;
            ?></strong>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 50px; margin-right:15px;">
          <?php include 'managepets.php';?>

        </div>

        <?php }?>
          </main>
      </div>
  </div>


    </div>
  </div>



<?php include 'footer.php';?>
