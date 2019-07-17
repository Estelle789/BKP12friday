<?php include 'header.php';?>

  <div style="margin-top: 100px;"></div>
  <?php
  include 'includes/dbh-inic.php';
  $i=0;
  if (isset($_SESSION['id']))
  {
    $showQuery = "SELECT * FROM hotels where user_id='" . $_SESSION['id'] . "' /*and status ='1'*/ ";
    $resultShow = $pdo->prepare($showQuery);
    $resultShow->execute();
    $fetchResult = $resultShow->fetchAll(PDO::FETCH_ASSOC);

    /*$userQuery = "SELECT * FROM users where id='" . $_SESSION['id'] . "'";
    $resultShowUser = $pdo->prepare($userQuery);
    $resultShowUser->execute();
    $fetchResultUser = $resultShowUser->fetchAll(PDO::FETCH_ASSOC); */

    if ($fetchResult == "0")
    {?>
      <div class="container-fluid" style="margin-top:98px">
        <div class="row d-flex d-md-block flex-nowrap wrapper" >
          <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width" style="position:inherit;height:100%" id="sidebar">
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
        <div class="container-fluid" style="margin-top:98px">
          <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width " style="position:inherit;" id="sidebar">
              <div class="list-group border-0 card text-center text-md-left">
                <a href="hotelownerdashboard.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                <a href="addHotel.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-th"></i> <span class="d-none d-md-inline">Add hotel</span></a>
                <a href="messaging.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">messages</span></a>
                <a href="hotelowneravailability.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Manage availability</span></a>
              </div>
            </div>
          </div>
        </div>
        <?php }}?>

        <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
          <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
          <hr style="overflow:hidden;">

          <?php

          function checkFolderIsEmptyOrNot ( $folderName ){ // the folder must exist; returns TRUE if empty
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



        if (isset($_SESSION['id'])) {
          include 'includes/dbh-inic.php';
          ?>
          <div class="row justify-content-between" style="margin-top:60px">
            <div class="col-3">
              <h2 align="center"><?php echo $_SESSION['username']; ?></h2>
            </div>
            <div class="align-self-end" style="border-radius: 10px; border: solid 2px #0C9A4E; background-color: #0C9A4E; width:10%; text-align:center; height: 30px;">
              <a href="hotelownerupdate.php" style="color:white; font-weight:bold;">Edit</a>
            </div>
          </div>

          <div class="row" style="margin-top:60px">
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
            <div class="col-sm-4" style="margin-top:30px;">Properties owned: <strong><?php
            $nbProperty = count($fetchResult);
            echo $nbProperty;
            /*
            $answer = $pdo->query("SELECT COUNT(*) AS nbProperty FROM hotels WHERE user_id='" . $_SESSION['id'] . "'");
            $data = $answer->fetch();
            echo $data['nbProperty'];
            $nbProperty = $data['nbProperty'];
            $answer->closeCursor();*/

            ?></strong>
            <br><br><br>

               Most popular hotel: <?php ?>
            </div>
          </div>

          <?php if($nbProperty == 1) { ?>
            <h2 class="row justify-content-center" style="color:#097a3d;"><?php echo $fetchResult[0]['hotel_name']; ?></h2>
            <br />
            <div class="row justify-content-center">
              <div class="col-8">
                <?php
                $folder = 'images2/' . $_SESSION['id'] .'/' . $fetchResult[0]['id'] . '/';
                if ( file_exists($folder) ) {
                  $files = glob($folder . '*');
                  $nbimages = count($files);

                  if ($nbimages == 0) {} elseif ($nbimages == 1) {
                    echo "<img src=$files[0] width=100%>";
                  } else {
                  ?>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <?php for ($j=1; $j < $nbimages; $j++) { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $j; ?>"></li>
                    <?php } ?>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                    <?php echo "<img class='d-block w-100' src=$files[0] style='width:100%;' alt='Main picture' />" ;?>
                    </div>
                    <?php foreach ( $files as $file ) {
                      if ($file != $files[0]) { ?>
                    <div class="carousel-item">
                      <?php echo "<img class='d-block w-100' src=$file style='width:100%; !important;' />" ;?>
                    </div>
                  <?php } }?>
                  </div>
                  <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
              </div>
            <?php
              } else {
                mkdir($folder);
              }
            ?>
            </div>
            <br />
          <div class="row justify-content-center">
            <form action="hotelupdate.php" method="post" enctype="multipart/form-data">
              <input type="hidden" value="<?php echo $fetchResult[0]['id'];?>" name="hotel_id">
              <input type="submit" value="Edit" name="submit" class="form-control" style="border-radius: 10px; border: solid 2px #0C9A4E; background-color: #0C9A4E; text-align:center; height: 30px; color:white; font-weight:bold;" id="controlling">
            </form>
          </div>

          <?php } else if ($nbProperty == 0) { ?>
              <br />
              <a class="row justify-content-center" href="addHotel.php" id=button style="margin-top:60px;margin-bottom:225px">Add a hotel here</a>
          <?php } else { ?>
            <br />
            <div class="bs">
              <div class="accordion" id="accordion">
                <?php for ($i=0; $i < $nbProperty; $i++) {
                $hotel_i = $fetchResult[$i];?>
                <div class="card">
                  <div class="card-header" id="heading<?php echo $i;?>">
                    <h2 class="mb-0" align="center">
                      <button type="button" class="btn btn-link" style="font-weight: bold; color:#0C9A4E;" data-toggle="collapse" data-target="#collapse<?php echo $i;?>"><?php echo $hotel_i['hotel_name'];?></button>
                    </h2>
                  </div>
                  <div id="collapse<?php echo $i;?>" class="collapse" aria-labelledby="heading<?php echo $i;?>" data-parent="#accordion">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="row col-12">
                          <div class="col-md-10 offset-md-1">
                            <div class="card hotel_details">
                                <div class="card-header">
                                  <h4>Information</h4>
                                </div>
                                <div class="card-body">
                                  <p>Hotel Email address: <a href="<?php  if(!empty($hotel_i['website'])) {echo $hotel_i['website'];} else {echo '';}?>"><?php if(!empty($hotel_i['website'])) {echo $hotel_i['website'];} else {echo '';} ?></a>  </p>
                                   <div class="description">
                                       <p>
                                         Description:  <?php if(!empty($hotel_i['description'])) {echo $hotel_i['description'];} else {echo '';} ?>
                                       </p>
                                   </div>
                               <div class="opening_hours">
                                   <p>
                                    Opening Hours:    <?php if(!empty($hotel_i['opening_hours'])) {echo $hotel_i['opening_hours'];} else {echo '';} ?>
                                   </p>
                               </div>
                               <div class="association">
                                   <p>
                                    Association:   <?php if(!empty($hotel_i['association'])) {echo $hotel_i['association'];} else {echo '';} ?>
                                   </p>
                               </div>
                                <div class="certification">
                                    <p>
                                    Certification : <?php if(!empty($hotel_i['certification'])) {echo $hotel_i['certification'];} else {echo '';} ?>
                                    </p>
                                </div>
                                <div class="phone">
                                    <p>
                                       Phone: <?php if(!empty($hotel_i['phone'])) {echo $hotel_i['phone'];} else {echo '';} ?>
                                    </p>
                                </div>
                                <div class="email">
                                    <p>
                                        Hotel Emails: <?php if(!empty($hotel_i['email'])) {echo $hotel_i['email'];} else {echo '';} ?>
                                    </p>
                                </div>
                                <div class="contact">
                                    <p>
                                        Contact Person: <?php if(!empty($hotel_i['contact'])) {echo $hotel_i['contact'];} else {echo '';} ?>
                                    </p>
                                </div>
                                <div class="country">
                                    <p>
                                        Country: <?php if(!empty($hotel_i['country'])) {echo $hotel_i['country'];} else {echo '';} ?>
                                    </p>
                                </div>
                                <div class="city">
                                    <p>
                                        City: <?php if(!empty($hotel_i['city'])) {echo $hotel_i['city'];} else {echo '';} ?>
                                    </p>
                                </div>
                                <div class="address">
                                    <p>
                                        Address of Hotel: <?php if(!empty($hotel_i['address'])) {echo $hotel_i['address'];} else {echo '';} ?>
                                    </p>
                                </div>
                                <div class="post_code">
                                    <p>
                                        Post Code Of hotel: <?php if(!empty($hotel_i['post_code'])) {echo $hotel_i['post_code'];} else {echo '';} ?>
                                    </p>
                                </div>
                                </div>
                                <div class="row justify-content-center">
                                  <form action="hotelupdate.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $hotel_i['id'];?>" name="hotel_id">
                                    <input type="submit" value="Edit" name="submit" style="border-radius: 10px; border: #0C9A4E; background-color: #0C9A4E; text-align:center; height: 30px; color:white; font-weight:bold;" id="controlling">
                                  </form>
                                </div>
                                <br />
                            </div><!-- end of card -->

                            <div class="card">
                               <div class="card-header"><h4>Services</h4></div>
                                <div class="card-body">
                                  <?php
                                  $showQueryServices = "SELECT * FROM services where hotel_id='" . $hotel_i['id'] . "' /*and status ='1'*/ ";
                                  $resultShowServices = $pdo->prepare($showQueryServices);
                                  $resultShowServices->execute();
                                  $fetchResultServices = $resultShowServices->fetchAll(PDO::FETCH_ASSOC);

                                  foreach ($fetchResultServices as $service_i) {
                                  print_r($service_i);
                                 } ?>
                                </div>
                                <div class="row justify-content-center">
                                  <form action="services.php?info=true" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $hotel_i['id'];?>" name="hotel_id">
                                    <input type="submit" value="Edit services" name="submit" style="border-radius: 10px; border: #0C9A4E; background-color: #0C9A4E; text-align:center; height: 30px; color:white; font-weight:bold;" id="controlling">
                                  </form>
                                </div>
                                <br />
                            </div>

                          </div><!-- end of col-md-10-->
                        </div>
                        <div class="col-8">
                           <br />

                          <?php
                          $folder = 'images2/' . $_SESSION['id'] .'/' . $hotel_i['id'] . '/';
                          if ( file_exists($folder) ) {
                            $files = glob($folder . '*');
                            $nbimages = count($files);

                            if ($nbimages == 0) {
                              echo "No pictures found for your hotel, add one <a href='hotelupdate.php'>Here</a>";
                            } elseif ($nbimages == 1) {
                              echo "<img src=$files[0] width=100%>";
                            } else {
                            ?>
                          <div id="carouselIndicators<?php echo $i;?>" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselIndicators<?php echo $i;?>" data-slide-to="0" class="active"></li>
                              <?php for ($j=1; $j < $nbimages; $j++) { ?>
                              <li data-target="#carouselIndicators<?php echo $i;?>" data-slide-to="<?php echo $j; ?>"></li>
                              <?php } ?>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                              <?php echo "<img class='d-block w-100' src=$files[0] style='width:100%;' alt='Main picture' />" ;?>
                              </div>
                              <?php foreach ( $files as $file ) {
                                if ($file != $files[0]) { ?>
                              <div class="carousel-item">
                                <?php echo "<img class='d-block w-100' src=$file style='width:100%; !important;' />" ;?>
                              </div>
                            <?php } }?>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselIndicators<?php echo $i;?>" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselIndicators<?php echo $i;?>" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        <?php } } else {
                          mkdir($folder);
                        }
                        ?>
                      </div>
                    <br />
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
              <?php } ?>
          <?php } ?>

          </main>
        </div>
        </div>
      </div>



<?php include 'footer.php';?>
