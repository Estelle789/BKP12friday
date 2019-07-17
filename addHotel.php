<?php include 'header.php';?>


<link rel="stylesheet" href="public/css/hotelownerdashboard.css">

  <div style="margin-top: 100px;"></div>


<?php if (isset($_SESSION['id'])): ?>

    <main class="col-md-9 col px-5 pl-md-2 pt-2 main mx-auto">
        <hr style="overflow:hidden;">

      <div class="container" id="1">
        <div class="signup-wizard-header">
          <div class="container signup-wizard-header-container">
            <div class="fluid-col text-center wizard-section-link section-account-info enabled active">
              <i class="fa fa-address-card-o" aria-hidden="true"></i>
              <span class="wizard-section-name hidden-xs">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">
                    <a href="addHotel.php">Add Hotel</a> </font>
                </font>
              </span>
            </div>
            <div class="fluid-col text-center wizard-section-link section-services-and-rates  disabled">
              <i class="fa fa-home" aria-hidden="true"></i>
              <span class="wizard-section-name hidden-xs">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">
                    <a href="services.php">Services and rates</a> </font>
                </font>
              </span>
            </div>
            <div class="fluid-col text-center wizard-section-link section-sitter-profile disabled">
              <i class="fa fa-edit" aria-hidden="true"></i>
              <span class="wizard-section-name hidden-xs">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">
                    <a href="otherServices.php">Other Services</a> </font>
                </font>
              </span>
            </div>
          </div>
        </div>
      </div>
      <span class="d-inline-block openClose" tabindex="0" data-toggle="tooltip" title="Disabled tooltip"> </span>
      <section class="add_hotel" style="margin-top:10px;">
          <form action="includes/hotel/addhotel-func.php" method="post">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-4">
                          <label for="hotelName">Hotel Name </label>
                          <input type="text" name="hotelName" class="form-control" required>
                      </div>
                      <div class="col-md-4">
                          <label for="hotelWebsite"> Website </label>
                          <input type="text" name="hotelWebsite" class="form-control">
                      </div>
                      <div class="col-md-4" style="width:100% !important">
                          <label for="hotelOpenclose">Open and close hours</label>
                          <span tabindex="0" data-toggle="tooltip" title="Please insert with correct time format" style="width:100% !important;" id="hourTooltip"> <!--padding-right:145px;-->
                          <input type="text" name="openAndclose" class="form-control openClose" placeholder=" 09:00-21:00">
                          </span>
                      </div>
                  </div><!-- //End of first Row -->
                  <div class="row">
                      <div class="col-md-12">
                          <label for="hotelDescription">Description</label>
                          <textarea class="form-control" name="hotelDescription" rows="3" placeholder="Define your description"></textarea>
                      </div>
                  </div><!-- // End of second Row -->
                  <div class="row">
                      <div class="col-md-4">
                          <label for="association">Association</label>
                          <input type="text" name="association" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <label for="Certification">Certification</label>
                          <input type="text" name="certification" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <label for="Phone">Hotel Phone</label>
                          <input type="number" name="hotelNumber" class="form-control" required>
                      </div>
                  </div><!-- // End of thirth Row -->
                  <div class="row">
                      <div class="col-md-4">
                          <label for="hotelEmail">Email Adress</label>
                          <input type="email" name="hotelEmail" class="form-control" required>
                      </div>
                      <div class="col-md-4">
                          <label for="hotelContactperson">Contact Person</label>
                          <input type="text" name="contactPerson" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <label for="Country">Country</label>
                          <input type="text" name="country" class="form-control" required>
                      </div>

                  </div><!-- // End of fourth Row -->
                  <div class="row">
                      <div class="col-md-4">
                          <label for="City">City</label>
                          <input type="text" name="city" class="form-control" required>
                      </div>
                      <div class="col-md-4">
                          <label for="address">Address</label>
                          <input type="text" name="address" class="form-control" required>
                      </div>
                      <div class="col-md-4">
                          <label for="postalCode">Postal Code </label>
                          <input type="text" name="zipCode" class="form-control" required>
                      </div>
                  </div><!-- //End of fiveth Row -->
              </div><!-- // End of the container -->
              <div class="container" style="margin-top:25px;">
                  <div class="row">
                      <div class="col-md-12">
                          <input type="submit" name="addHotel" value="Add Hotel" class="form-control btn btn-outline-success" id ="controlling">
                      </div>
                  </div>
              </div>
          </form>
      </section>
      <section class="footer-directory-false" style="margin-top:35px;">
          <div class="container-fluid">
              <div class="row " style="justify-content:center">
                  <div class="col-md-3">
                      <a href="hotelownerdashboard.php" class="form-control btn btn-outline-primary" style="text:center"> Go to dashboard</a>
                  </div>
              </div>
          </div>
      </section>

            </main>

<style>
  .warning{
    border-color:#ff6665;
    border-radius:10px;
    opacity: 0.5;
    float:auto;
  }
  .addHotelimg{
      width:25%;
      height:auto;
  }
</style>

<script>
/* Preg  Match Controlling */
$(document).ready(function(){

var reg=/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]-([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
 $('.openClose').focusout(function(){
  if(!$(this).val().match(reg)){
    $('#controlling').hide();
    $('.openClose').addClass('warning');
    $('#hourTooltip').tooltip('enable');
  }else{
    $('#controlling').show();
    $('.openClose').removeClass('warning');
    $('#hourTooltip').tooltip('disable');
  }
})

});

</script>

<?php else: ?>

  <h1 style="margin-top:300px;margin-bottom:300px"> Error: Not Logged In......!</h1>

<?php endif; ?>

<?php include 'footer.php';?>
