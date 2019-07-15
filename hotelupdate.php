<?php include 'header.php';?>

<link rel="stylesheet" href="public/css/hotelownerdashboard.css">

<?php if (isset($_SESSION['id'])): ?>

  <?php
  include 'includes/dbh-inic.php';
  $i=0;
  if (isset($_SESSION['id']))
  {
    $showQuery = "SELECT * FROM hotels where user_id='" . $_SESSION['id'] . "' /*and status ='1'*/ and id='" . $_POST['hotel_id'] . "'";
    $resultShow = $pdo->prepare($showQuery);
    $resultShow->execute();
    $fetchResult = $resultShow->fetch();
    $resultRow = $resultShow->rowCount();

    //$resultCheck = $result->fetchAll(PDO::FETCH_ASSOC);
    //$resultRow = $result->rowCount();


    /*$userQuery = "SELECT * FROM users where id='" . $_SESSION['id'] . "'";
    $resultShowUser = $pdo->prepare($userQuery);
    $resultShowUser->execute();
    $fetchResultUser = $resultShowUser->fetch();*/

    if ($fetchResult == "0")
    {?>
      <div class="container-fluid"style="margin-top:98px">
        <div class="row d-flex d-md-block flex-nowrap wrapper" >
          <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width" style="position:inherit;" id="sidebar">
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



<form action="includes/hotel/modify_hotel-func.php" method="post" enctype="multipart/form-data">

  <div class="container-fluid card card-body">
    <div class="row">
      <div class="col-md-12">
        <label for="hotelimg[]">Hotel Images</label>
        <br />
        <input type="file" class="fileupload col-md-2" name="hotelimg[]" accept="image/x-png,image/gif,image/jpeg">
        <div class="col-md-3">
          <div class="dvPreview"></div>
        </div>
        <img class="rounded mx-auto d-block addHotelimg" id="blah"src="" >
        <img class="rounded mx-auto d-block col-md-3" align="center" id="blah" width="200" src="">
        <br>
        <div class="col-md-4">

        <?php
        $folder = 'images2/' . $_SESSION['id'] .'/' . $fetchResult['id'] . '/';
        if (!file_exists ($folder)) {
          mkdir($folder);
        }
        if(!checkFolderIsEmptyOrNot($folder)) {
          foreach ( glob($folder . '*') as $file ) {
             echo "<img src=$file width=200>";
           }
        } ?>
        <!--<input class="form-control" type="file" id="imgInp" name="hotelimg[]" value="Hotel Images" size="60" multiple >-->
        <!--<label id="#bb" class="choosePicture"><i class="fa fa-user-o fa-5x mt-5"></i>
          <input type="file" id="imgInp" name="picture" class="hotelOwnerPicture" size="60">
        </label>-->
      </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <label for="hotelName">Hotel Name </label>
        <input type="text" name="hotelName" class="form-control" value="<?php echo $fetchResult['hotel_name']; ?>">
      </div>
      <div class="col-md-4">
        <label for="hotelWebsite"> Website </label>
        <input type="text" name="hotelWebsite" class="form-control" value="<?php echo $fetchResult['website']; ?>">
      </div>
      <div class="col-md-4" style="width:100% !important">
        <label for="hotelOpenclose">Open and close hours</label>
        <span tabindex="0" data-toggle="tooltip" title="Please insert with correct time format" style="width:100% !important; " id="hourTooltip"> <!--padding-right:145px !important;-->
        <input type="text" name="openAndclose" class="form-control openClose" placeholder=" 09:00 - 21:00 " value="<?php echo $fetchResult['open_close_hours']; ?>">
        </span>
      </div>
    </div><!-- //End of first Row -->
    <div class="row">
      <div class="col-md-12">
        <label for="hotelDescription">Description</label>
        <textarea class="form-control" name="hotelDescription" rows="3" placeholder="<?php echo $fetchResult['description']; ?>"></textarea>
      </div>
    </div><!-- // End of second Row -->
    <div class="row">
      <div class="col-md-4">
        <label for="association">Association</label>
        <input type="text" name="association" class="form-control" value="<?php echo $fetchResult['association']; ?>">
      </div>
      <div class="col-md-4">
        <label for="Certification">Certification</label>
        <input type="text" name="certification" class="form-control" value="<?php echo $fetchResult['certification']; ?>">
      </div>
      <div class="col-md-4">
        <label for="Phone">Hotel Phone</label>
        <input type="number" name="hotelNumber" class="form-control" value="<?php echo $fetchResult['hotel_phone']; ?>">
      </div>
    </div><!-- // End of thirth Row -->
    <div class="row">
      <div class="col-md-4">
        <label for="hotelEmail">Email Adress</label>
        <input type="email" name="hotelEmail" class="form-control" value="<?php echo $fetchResult['email_address']; ?>">
      </div>
      <div class="col-md-4">
        <label for="hotelContactperson">Contact Person</label>
        <input type="text" name="contactPerson" class="form-control" value="<?php echo $fetchResult['contact_person']; ?> ">
      </div>
      <div class="col-md-4">
        <label for="Country">Country</label>
        <input type="text" name="country" class="form-control" value="<?php echo $fetchResult['country']; ?>">
      </div>
    </div><!-- // End of fourth Row -->
    <div class="row">
      <div class="col-md-4">
        <label for="City">City</label>
        <input type="text" name="city" class="form-control" value="<?php echo $fetchResult['city']; ?>">
      </div>
      <div class="col-md-4">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" value="<?php echo $fetchResult['address']; ?>">
      </div>
      <div class="col-md-4">
        <label for="postalCode">Postal Code</label>
        <input type="text" name="zipCode" class="form-control" value="<?php echo $fetchResult['postal_code']; ?>">
      </div>
    </div><!-- //End of fiveth Row -->
  </div>
  <div class="container" style="margin-top:15px;">
    <div class="row">
      <div class="col-md-12">
        <input type="hidden" value="<?php echo $fetchResult['id'];?>" name="hotel_id">
        <input type="submit" value="Modify You Hotel" name="hotel" class="form-control btn btn-outline-success" id="controlling">
      </div>
    </div>
  </div>
</div>
</form>

        </main>
      </div>
<script>
jQuery(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img width=200>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    jQuery(document).on('change','.fileupload',function() {
        imagesPreview(this, 'div.dvPreview');
    });
});
</script>
<?php else: ?>

  <h1 style="margin-top:300px;margin-bottom:300px"> Error: Not Logged In......!</h1>

<?php endif; ?>

<?php include 'footer.php';?>
