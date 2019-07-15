<?php include 'header.php';?>

  <div style="margin-top: 100px;"></div>


<div id="body" style="margin-top: 100px">
  <form action="includes/petsitter/user.inc.php" method="POST">
  <div class="container " id="1" >
    <div class="signup-wizard-header">
      <div class="container signup-wizard-header-container" style="margin-top:30px">
        <div class="fluid-col text-center wizard-section-link section-account-info enabled active">
                <i class="fa fa-address-card-o" aria-hidden="true"></i>
                <span class="wizard-section-name hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Account                    </font></font></span>
        </div>

        <div class="fluid-col text-center wizard-section-link section-services-and-rates  disabled">
            <i class="fa fa-home" aria-hidden="true"></i>
             <span class="wizard-section-name hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Services and rates                </font></font></span>
        </div>

        <div class="fluid-col text-center wizard-section-link section-sitter-profile disabled">
            <i class="fa fa-edit" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Babysitter advertisement                </font></font></span>
        </div>

        <div class="fluid-col text-center wizard-section-link section-your-dogs disabled">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                My dogs                </font></font></span>
        </div>

        <div class="fluid-col text-center wizard-section-link section-calendar disabled">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Calendar                </font></font></span>
        </div>
      </div>
    </div>

    <style>
      .signup-wizard-header,
      .signup-wizard-header-container {
        /* display: -webkit-box; */
        display: -moz-flex;
        display: -ms-flexbox;
        display: flex;
      }

      .signup-wizard-header .wizard-section-link.enabled {
        color: #555;

      }

      .signup-wizard-header .wizard-section-link.active {
        border-bottom: 5px solid #79C8a9;
      }

      .signup-wizard-header .wizard-section-link {
        padding-top: 20px;
        padding-bottom: 20px;
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        font-size: 16px;
        font-family: inherit;
        color: inherit;
        font-weight: 700;
        line-height: 1.4;
      }

      .enabled {
        color: #519b7a;
      }

      .emsg,
      .cityEmsg {
        color: red;
      }

      .hidden,
      .cityHidden {
        visibility: hidden;
      }
    </style>


    <script type="text/javascript">
      $(document).ready(function() {
        var $regexname = /^([a-zA-Z/\s/]{3,16})$/;
        $('.name').on('keypress keydown keyup', function() {
          if (!$(this).val().match($regexname)) {
            // there is a mismatch, hence show the error message
            $('.emsg').removeClass('hidden');
            $('.emsg').show();
          } else {
            // else, do not display message
            $('.emsg').addClass('hidden');

          }
        });
      });
      $(document).ready(function() {
        var $regexname = /^([a-zA-Z/\s/]{3,16})$/;
        $('.city').on('keypress keydown keyup', function() {
          if (!$(this).val().match($regexname)) {
            // there is a mismatch, hence show the error message
            $('.cityEmsg').removeClass('cityHidden');
            $('.cityEmsg').show();

          } else {
            // else, do not display message
            $('.cityEmsg').addClass('cityHidden');

          }
        });
      });
      $(document).ready(function() {
        $('.name,.city').on('keypress keydown keyup', function() {
          var $regexname = /^([a-zA-Z/\s/]{3,16})$/;
          if (!$(this).val().match($regexname)) {
            $('#cityStreet').hide();
          } else {
            $('#cityStreet').show();
          }
        });
      });
    </script>

    <div class="container">
      <div class="row">
        <div class="col-md-12" align="center">
          <div class="form-group">
            <img class="rounded mx-auto d-block" id="blah" width="50%" src="">
            <label id="#bb" class="choosePicture"><i class="fa fa-user-o fa-5x mt-5"></i>
              <input type="file" id="imgInp" name="picture" class="babySitterspicture" size="60">
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="babySitterscity" class="babySitterslocationStreet">Street</label>
          <input type="text" name="street" class="form-control name" required>
          <p><span class="emsg hidden">Please Enter a Valid Street Name</span></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="babySitterscity" class="babySitterslocationCity">City</label>
          <input type="text" name="city" class="form-control city">
          <p><span class="cityHidden cityEmsg">Please Enter a Valid Street City</span></p>
        </div>
      </div>
    </div>

    <!--Date of birth -->
    <div class="row d-felx justify-content-right">
      <div class="col-md-3">
        <div class="form-group">
          <label for="dateOfbirth" class="labels">Birth Day</label>
          <input type="date" name="dateOfbirth" id="" class="form-control">
        </div>
      </div>


      <div class="d-flex justify-content-end">
        <div class="col-md-12">
          <div id="radiocbgen" onclick="gd(event)">
            <div class="input-group-prepend border rounded" style="margin-left:279px; margin-top:20px">
              <input type="checkbox" class="checkbox-style" name="gender[]" id="gd1" value="woman" autocomplete="off"> Woman
              <input type="checkbox" class="checkbox-style" name="gender[]" id="gd2" value="man" autocomplete="off"> Man
            </div>
          </div>
        </div>
      </div>

    </div><!-- End of Containers -->

    <div class="container-fluid">
      <div class="d-flex flex-row ml-1">
        <div class="container d-flex flex-row-reverse">
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <a href="javascript:SwapDivsWithClick('1','stepone')" id="cityStreet" class="btn btn-outline-success btn-md">Next</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-4 offset-md-3">

        <p class="text-success">Step 1 of 7</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4  d-flex justify-content-center t-5" style="margin-left: 450px;margin-top:20px;margin-bottom:30px">
    <a href="petsitterdashboard.php?info=dashboard" class="btn btn-success">Go back to dashboard</a>
  </div>
  <!-- step one starts on here-->
  <link rel="stylesheet" href="public/css/separate.css">
  <div id="stepone" style="display:none !important">
    <div class="container">
      <div class="signup-wizard-header">
        <div class="container signup-wizard-header-container">
          <div class="fluid-col text-center wizard-section-link section-account-info disabled">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Account </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-services-and-rates  enabled active">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Services and rates </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-sitter-profile disabled">
            <i class="fa fa-edit" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Babysitter advertisement </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-your-dogs disabled">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  My dogs </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-calendar disabled">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Calendar </font>
              </font>
            </span>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7">
          <ul class="nav">
            <li class="nav-item" style="margin-left:20%;">
              <p style="position:absolute; margin-left:20px;"> Services and Policy</p>
              <br>
              <i class="fa fa-check-circle-o fa-2x nav-link" id="servicesandpolicy" style="margin-left:30px; position:absolute; margin-top:2px;"></i>
            </li>
            <li class="nav-item">
              <p style="margin-left:45%; position:absolute;" id="mypreferences"> My Preferences</p>
              <br>
              <i class="fa fa-check-circle-o fa-2x nav-link" style="position:absolute; margin-left:45%; margin-top:2px;"></i>
            </li>
          </ul>
          <hr style="position:relative !important;margin-top:5%;">
        </div>
      </div>
      <div class="card border border-success">
        <div class="card-body">
          <div class="row justify-content-center ">
            <div class="col-md-7 stayAttime ">
              <h6 class="d-flex justify-content-center">How many dogs can you stay at the time at the same time? </h6>
              <div id="radiocbd" onclick="cbclic(event)">
                <div class="input-group d-flex justify-content-center">
                  <p><input type="checkbox" class="dogstayinput" id="ct1" name="dogs[]" value="1">1</p>
                  <p><input type="checkbox" class="dogstayinput" id="ct2" name="dogs[]" value="2">2</p>
                  <p><input type="checkbox" class="dogstayinput" id="ct3" name="dogs[]" value="3">3</p>
                  <p><input type="checkbox" class="dogstayinput" id="ct4" name="dogs[]" value="4">4</p>
                  <p><input type="checkbox" class="dogstayinput" id="ct5" name="dogs[]" value="5">5</p>
                </div>
              </div>
            </div>
            <div class="col-md-7 comedogdaycare">
              <h6 class="d-flex justify-content-center">How many dogs can come at the same time for day care?</h6>
              <div id="radiocb" onclick="cbclick(event)">
                <div class="input-group d-flex justify-content-center ">
                  <p><input type="checkbox" class="cancomesametime" id="cb1" name="dogdaycare[]" value="1" />1</p>
                  <p><input type="checkbox" class="cancomesametime" id="cb2" name="dogdaycare[]" value="2" />2</p>
                  <p><input type="checkbox" class="cancomesametime" id="cb3" name="dogdaycare[]" value="3" />3</p>
                  <p><input type="checkbox" class="cancomesametime" id="cb4" name="dogdaycare[]" value="4" />4</p>
                  <p><input type="checkbox" class="cancomesametime" id="cb5" name="dogdaycare[]" value="5" />5</p>
                </div>
              </div>
            </div>
            <div class="col-md-7 checkin-out-time justify-content-center">
              <h6 class="d-flex justify-content-center">What is your checkin and check out time?</h6>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <select class="custom-select" id="checkin-outtime" name="checkin">
                <option value="flexible">I'm flexible </option>
                <option value="on_monday">One</option>
                <option value="on_tuesday">Two</option>
                <option value="on_thursday">Three</option>
              </select>
            </div>
            <div class="col-md-3">
              <select class="custom-select" id="checkout-in-time" name="checkout">
                <option value="flexible">I'm flexible</option>
                <option value="tuesday">One</option>
                <option value="monday">Two</option>
                <option value="thursday">Three</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row justify-content-center collectDogs">
          <h6 class="d-flex justify-content-center">Do you want to collect dogs from multiple owners at the same time?</h6>
            <div class="col-md-7">
            <div id="radiocbyn" onclick="yesNo(event)">
              <div class="input-group justify-content-center">
                <p><input type="checkbox" id="cs1" value="yes" name="collect[]" class="collectdogsinput">YES</p>
                <p><input type="checkbox" id="cs2" value="no" name="collect[]" class="collectdogsinput">NO</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center babydogwalk">
          <div class="col-md-7">
            <h6 class=" d-flex justify-content-center">How many hours do you normally walk with baby dogs?</h6>
            <div id="radiocbh" onclick="hours(event)">
              <div class="input-group d-flex justify-content-center ">
                <p><input type="checkbox" id="ch1" value="0-2" name="walkHour[]" class="babydogwalks">0-2</p>
                <p><input type="checkbox" id="ch2" value="2-4" name="walkHour[]" class="babydogwalks">2-4</p>
                <p><input type="checkbox" id="ch3" value="4-8" name="walkHour[]" class="babydogwalks">4-8</p>
                <p><input type="checkbox" id="ch4" value="8+" name="walkHour[]" class="babydogwalks">8+</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center accommodation">
          <div class="col-md-7">
            <h6 class="d-flex justify-content-center">What is your cancellation policy for accommodation?</h6>
            <div id="radiocbf" onclick="flexible1(event)">
              <div class="input-group d-flex justify-content-center">
                <input type="checkbox" id="cf1" value="flexible" name="Ac[]" class="accommodations">Flexible
                <input type="checkbox" id="cf2" value="Avarage" name="Ac[]" class="accommodations">Average
                <input type="checkbox" id="cf3" value="strict" name="Ac[]" class="accommodations">Strict
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4" style="margin-top:25px;">
            <div class="form-group">
              <a href="javascript:BackButtonWorkStation('1','stepone')" class="btn btn-outline-success btn-md">Back</a>
            </div>
          </div>
          <div class="col-md-4 d-flex flex-row-reverse">
            <div class="form-group mt-3">
              <a href="javascript:SwapDivsWithClick('stepone','intermediate-services')" onclick="stepone();" class="btn btn-outline-success">Next</a>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4 offset-md-3">

          <p class="text-success">Step 2 of 7</p>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- // end of step one field on here -->
  <!-- intermediate services and policiy-->
  <div id="intermediate-services" style="display:none !important">
    <div class="container">
      <div class="signup-wizard-header">
        <div class="container signup-wizard-header-container">
          <div class="fluid-col text-center wizard-section-link section-account-info disabled">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Account </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-services-and-rates  enabled active">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Services and rates </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-sitter-profile disabled">
            <i class="fa fa-edit" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Babysitter advertisement </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-your-dogs disabled">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  My dogs </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-calendar disabled">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Calendar </font>
              </font>
            </span>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7">
          <ul class="nav">
            <li class="nav-item" style="margin-left:20%;">
              <p style="position:absolute; margin-left:20px;"> Services and Policy</p>
              <br>
              <i class="fa fa-check-circle-o fa-2x nav-link" id="x" style="margin-left:30px; position:absolute; margin-top:2px;"></i>
            </li>
            <li class="nav-item">
              <p style="margin-left:45%; position:absolute;"> My Preferences</p>
              <br>
              <i class="fa fa-check-circle-o fa-2x nav-link" id="Myprefrences" style="position:absolute; margin-left:45%; margin-top:2px;"></i>
            </li>
          </ul>
          <hr style="position:relative !important;margin-top:5%;">
        </div>
      </div>
      <div class="card border border-success">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-7 travelfar ">
              <h6 class="d-flex justify-content-center">How far do you want to "travel" for a home visit or a walk?(Kilometers)</h6>
              <select class="custom-select" id="kilometers" name="km">
                <option value="0">I'm flexible </option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7 manyVisit">
              <h6 class="d-flex justify-content-center">How many visits can you take a maximum of a day?</h6>
              <select class="custom-select" id="visit" name="maxVisit">
                <option value="0">I'm flexible </option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7 manyWalks">
              <h6 class="d-flex justify-content-center">How many walks can you make per day ?</h6>
              <select class="custom-select" id="walksPerday" name="walks">
                <option value="1">Flexible </option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
              </select>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7 homeVisits">
              <h6 class="d-flex justify-content-center">What time can you normally do a home visit? (Multiple choices possible)</h6>
              <div class="input-group d-flex justify-content-center">
                <input type="checkbox" name="visitTime[]" value="06:00-11:00" class="homeVisitsInput">06:00 - 11:00
                <input type="checkbox" name="visitTime[]" value="11:00-15:00" class="homeVisitsInput">11:00 - 15:00
                <input type="checkbox" name="visitTime[]" value="15:00-22:00" class="homeVisitsInput">15:00 - 22:00
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7 normalyWalking">
              <h6 class="d-flex justify-content-center">What time are you normally available for walking? (Multiple choices possible)</h6>
              <div class="input-group d-flex justify-content-center">
                <p><input type="checkbox" value="06:00-11:00" name="availible[]" class="normalyWalkingInput">06:00 - 11:00</p>
                <p><input type="checkbox" value="11:00-15:00" name="availible[]" class="normalyWalkingInput">11:00 - 15:00</p>
                <p><input type="checkbox" value="15:00-22:00" name="availible[]" class="normalyWalkingInput">15:00 - 22:00</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7 babysittingCancelation">
              <h6 class="d-flex justify-content-center">What is your cancellation policy for babysitting at home?</h6>
              <div id="radiocbft" onclick="flexible2(event)">
                <div class="input-group d-flex justify-content-center">
                  <p><input type="checkbox" id="cft1" value="flexible" name="bP[]" class="babysittingCancelationInput">Flexible</p>
                  <p><input type="checkbox" id="cft2" value="average" name="bP[]" class="babysittingCancelationInput">Average</p>
                  <p><input type="checkbox" id="cft3" value="strict" name="bP[]" class="babysittingCancelationInput">Strict</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-4" style="margin-top:25px;">
              <div class="form-group">
                <a href="javascript:BackButtonWorkStation('stepone','intermediate-services')" class="btn btn-outline-success btn-md">Back</a>
              </div>
            </div>
            <div class="col-md-4;">
              <div class="form-group">
                <a href="javascript:SwapDivsWithClick('intermediate-services','steptwo')" onclick="steptwo();" class="btn btn-outline-success btn-md mt-4">Next</a>
              </div>
            </div>
          </div><!-- Back end next Button row end here-->
        </div><!--Card Body end here -->
      </div><!-- Card div end here -->
      <hr>
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4 offset-md-3">
          <p class="text-success">Step 3 of 7</p>
          </div>
        </div>
      </div>
    </div> <!-- Container end here -->
  </div><!-- intermediate-services end here -->

  <script>

  </script>
  <!-- step Two starting on here -->
  <div id="steptwo" style="display:none !important">
    <div class="container">
      <div class="signup-wizard-header">
        <div class="container signup-wizard-header-container">
          <div class="fluid-col text-center wizard-section-link section-account-info disabled">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Account </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-services-and-rates  disabled">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Services and rates </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-sitter-profile enabled active">
            <i class="fa fa-edit" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Babysitter advertisement </font>
              </font></span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-your-dogs disabled">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  My dogs </font>
              </font></span>
          </div>
          <div class="fluid-col text-center wizard-section-link section-calendar disabled">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Calendar </font>
              </font></span>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-12">
            <ul class="nav">
              <li class="nav-item offset-md-3">
                <span>Details <br>
                  <i class="fa fa-check-circle-o nav-link fa-2x" id="details" style="position:absolute !important;" aria-hidden="true"></i>
                </span>
              </li>
              <li class="nav-item offset-md-1">
                <span>
                  Photos <br>
                  <i class="fa fa-check-circle-o nav-link fa-2x" id="photos" style="position:absolute !important;"></i>
                </span>
              </li>
              <li class="nav-item  offset-md-1">
                <span>
                  References <br>
                  <i class="fa fa-check-circle-o nav-link fa-2x" id="references" style="position:absolute !important;"></i>
                </span>
              </li>
              <li class="nav-item  offset-md-1">
                <span>
                  Verification <br>
                  <i class="fa fa-check-circle-o nav-link fa-2x" id="verifications" style="position:absolute !important;"></i>
                </span>
              </li>
            </ul>
            <hr style="margin-top:2%;">
          </div>
        </div>
      <div class="card border border-success">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-7 ">
              <h4 class="d-flex justify-content-center">Size and Age</h4>
              <h6 class="d-flex justify-content-center size">On which "size" dogs do you want to fit? (Multiple choices possible)</h6>
              <div class="input-group d-flex sizeInput" >
                <p><input type="checkbox" value="small" name="small">Small<br>(0-10 kg)</p>
                <p><input type="checkbox" value="medium" name="medium">Medium<br>(11-25 kg)</p>
                <p><input type="checkbox" value="large" name="large">Large<br>(26-45 kg)</p>
                <p><input type="checkbox" value="Xlarge" name="Xlarge">Grand<br>(45 +)</p>
              </div>
              <p class="d-flex justify-content-center" style="color:red;">Choose at least one type of dog</p>
              <h6 class="d-flex justify-content-center age" style="margin-top:15px;">At what ages do you want to fit? (Multiple choices possible)</h6>
              <div class="input-group d-flex ageInput ">
                <input type="checkbox" value="puppy" name="puppy">Puppy <br> (1< year)
                <input type="checkbox" value="adult" name="adult">Adult <br> (1-8 years)
                <input type="checkbox" value="parent" name="parent">Parent <br> (8+ years)
              </div>
            </div>
            <script src="public/js/steptwo.js"></script><!-- steptwo.js controlling to if a inputbox just suitable for one choice else not working for checkbox-->
            <div class="col-md-7">
              <h4 style="margin-top:15px;" class="d-flex justify-content-center ">Your Home</h4>
              <h6 class="d-flex justify-content-center building">What kind of property do you have?</h6>
              <div id="radiocbhome" onclick="yourHome(event)">
                <div class="input-group d-flex buildingInput">
                  <p><input type="checkbox" id="cfa1" value="residential" name="building[]">Residential Building<br><i class="fa fa-home fa-2x"></i></p>
                  <p><input type="checkbox" id="cfa2" value="apartment" name="building[]">Apartment<br><i class="fa fa-building-o fa-2x"></i></p>
                </div>
              </div>
              <h6 class="d-flex justify-content-center garden" style="margin-top:15px;">What kind of garden do you have?</h6>
              <div id="radiocbgarden" onclick="garden(event)">
                <div class="input-group d-flex gardenInput">
                  <p><input type="checkbox" id="cfg1" value="nogarden" name="garden[]">No garden</p>
                  <p><input type="checkbox" id="cfg2" value="outgarden" name="garden[]">Outdoor Garden<br><i class="fa fa-tree fa-2x"></i></p>
                  <p><input type="checkbox" id="cfg3" value="ingarden" name="garden[]">Indoor Garden<br><i class="fa fa-building-o fa-2x"></i></p>
                </div>
              </div>
              <h6 class="d-flex justify-content-center smoke" style="margin-top:15px;">Does anyone smoke inside your home?</h6>
              <div id="radiocbsmoke" onclick="smoke(event)">
                <div class="input-group d-flex smokeInput">
                  <p><input type="checkbox" id="cfsm1" value="no" name="smoke[]">NO</p>
                  <p><input type="checkbox" id="cfsm2" value="yes" name="smoke[]">YES</p>
                </div>
              </div>
              <h6 class="d-flex justify-content-center children" style="margin-top:15px;">Are there children in the house?</h6>
              <div id="radiocbchild" onclick="ccc(event)">
                <div class="input-group d-flex childrenInput">
                  <p><input type="checkbox" id="ccc1" value="nochildren" name="children[]"><i class="fa fa-child"></i><br>No Children</p>
                  <p><input type="checkbox" id="ccc2" value="0-6years" name="children[]"><i class="fa fa-child"></i><br>0-6 years</p>
                  <p><input type="checkbox" id="ccc3" value="12+" name="children[]"><i class="fa fa-child"></i><br>6-12 years</p>
                </div>
              </div>
              <h4 class="d-flex justify-content-center" style="margin-top:15px;">Races where you prefer NOT fit (not required)</h4>
              <p  align="justify" class="d-flex justify-content-center" style="margin-top:15px; font-size:15px; margin-left:30px;"> What is Lorem Ipsum?
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                  It has survived not only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged.</p>
              <h6 class="d-flex justify-content-center highRisk" style="margin-top:15px;">Do you want to fit so-called "high risk" breeds?</h6>
              <div id="radiocbhr" onclick="hrs(event)">
                <div class="input-group d-flex highRiskInput">
                  <p><input type="checkbox" id="chr1" value="yes" name="highRiskBreed[]">Yes</p>
                  <p><input type="checkbox" id="chr2" value="no" name="highRiskBreed[]">No</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 offset-md-2" style="margin-top:25px;">
              <div class="form-group">
                <a href="javascript:BackButtonWorkStation('intermediate-services','steptwo')" class="btn btn-outline-success mb-5">Back</a>
              </div>
            </div>
            <div class="col-md-4 " style="margin-top:25px;">
              <div class="form-group">
                <a href="javascript:SwapDivsWithClickk('steptwo','steptwo-separeted')" onclick="stepSeparate()" class="btn btn-outline-success mb-5">Next</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-4 offset-md-3">
        <p class="text-success">Step 4 of 7</p>
        </div>
      </div>
    </div>
  </div>
  <!--step two separate div -->
  <div id="steptwo-separeted" style="display:none !important">
    <div class="container">
      <div class="signup-wizard-header">
        <div class="container signup-wizard-header-container">
          <div class="fluid-col text-center wizard-section-link section-account-info disabled">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Account </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-services-and-rates  disabled">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Services and rates </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-sitter-profile enabled active">
            <i class="fa fa-edit" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Babysitter advertisement </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-your-dogs disabled">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  My dogs </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-calendar disabled">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Calendar </font>
              </font>
            </span>
          </div>
        </div>
      </div>
      <ul class="nav">
        <li class="nav-item offset-md-3">
          <span>Details <br>
            <i class="fa fa-check-circle-o nav-link fa-2x" id="details1" style="position:absolute !important;" aria-hidden="true"></i>
          </span>
        </li>
        <li class="nav-item offset-md-1">
          <span>
            Photos <br>
            <i class="fa fa-check-circle-o nav-link fa-2x" id="photos0" style="position:absolute !important;"></i>
          </span>
        </li>
        <li class="nav-item  offset-md-1">
          <span>
            References <br>
            <i class="fa fa-check-circle-o nav-link fa-2x" id="references" style="position:absolute !important;"></i>
          </span>
        </li>
        <li class="nav-item  offset-md-1">
          <span>
            Verification <br>
            <i class="fa fa-check-circle-o nav-link fa-2x" id="verifications" style="position:absolute !important;"></i>
          </span>
        </li>
      </ul>
      <hr style="margin-top:2%;">
      <div class="card border border-success" style="margin-top:15px;">
        <div class="card-body">
          <div class="row justify-content-center">
            <div class="col-md-5 doYouhaveCat">
              <h4 class="d-flex justify-content-center">Your Animals</h4>
              <h6 class="d-flex justify-content-center ">Do you have a cat?</h6>
              <div id="radiocbanimal" onclick="yourAnimal(event)">
                <div class="input-group d-flex justify-content-center">
                  <p><input type="checkbox" id="cfan1" value="yes" name="Cat[]">Yes</p>
                  <p><input type="checkbox" id="cfan2" value="no" name="Cat[]">No</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center cageEggs">
            <div class="col-md-5 ">
              <h6 class="d-flex justify-content-center">Do you have cage eggs?</h6>
              <div id="radiocbeggs" onclick="eggs(event)">
                <div class="input-group d-flex justify-content-center">
                  <p><input type="checkbox" id="cfe1" value="no" name="cageEggs[]">No</p>
                  <p><input type="checkbox" id="cfe2" value="yes" name="cageEggs[]">Yes</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center atHome">
            <div class="col-md-5 ">
              <h4 class="d-flex justify-content-center">At Home</h4>
              <h6 class="d-flex justify-content-center">Can a dog go on your couch?</h6>
              <div id="radiocbdogC" onclick="dogCb(event)">
                <div class="input-group d-flex justify-content-center">
                  <p><input type="checkbox" id="cfd1" value="no" name="dogCouch[]">No</p>
                  <p><input type="checkbox" id="cfd2" value="yes" name="dogCouch[]">Yes</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center yourExperience">
            <div class="col-md-7">
              <h4 class="d-flex justify-content-center">Your Experiences</h4>
              <h6 class="d-flex justify-content-center">How many years of experience do you have with caring for dogs ?</h6>
              <select class="custom-select" id="sitterExperience" name="sitterExperience">
                <option selected>1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
                <option value="4+">4+</option>
              </select>
              <div class="title">
                <h6 class="d-flex justify-content-center">Write a catch title indicate in up to 50 ...</h6>
                <input type="text" name="catchTitles" class="form-control">
              </div>
              <h6 class="d-flex justify-content-center">Description</h6>
              <p class="d-flex justify-content-center">lorem ipsum dolor sit amet</p>
              <label for="exampleFormControlTextarea1">Lorom ipsum dolor sit amet amigo </label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descriptions"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-2" style="margin-top:25px;">
              <div class="form-group">
                <a href="javascript:BackButtonWorkStation('steptwo','steptwo-separeted')" class="btn btn-outline-success btn-md">Back</a>
              </div>
            </div>
            <div class="col-md-6 " style="margin-top:25px;">
              <div class="form-group">
                <a href="javascript:SwapDivsWithClickk('steptwo-separeted','stepthree')" onclick="stepThree();" style="margin-left:330px;" class="btn btn-outline-success btn-md mb-4">Next</a>
              </div>
            </div>
          </div>
        </div>      <!--card body end on here -->
      </div><!-- Card Div end here -->
      <hr>
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4 offset-md-3">
          <p class="text-success">Step 5 of 7</p>
          </div>
        </div>
      </div>
    </div><!-- Container end  on here -->
  </div>

  <div id="stepthree" style="display:none !important">
    <div class="container-fluid">
      <div class="signup-wizard-header">
        <div class="container signup-wizard-header-container">
          <div class="fluid-col text-center wizard-section-link section-account-info disabled">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Account </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-services-and-rates disabled">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Services and rates </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-sitter-profile enabled active">
            <i class="fa fa-edit" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Babysitter advertisement </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-your-dogs disabled">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  My dogs </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-calendar disabled">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Calendar </font>
              </font>
            </span>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <ul class="nav">
            <li class="nav-item offset-md-3">
              <span>Details <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="details2" style="position:absolute !important;" aria-hidden="true"></i>
              </span>
            </li>
            <li class="nav-item offset-md-1">
              <span>
                Photos <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="photos1" style="position:absolute !important;"></i>
              </span>
            </li>
            <li class="nav-item  offset-md-1">
              <span>
                References <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="references" style="position:absolute !important;"></i>
              </span>
            </li>
            <li class="nav-item  offset-md-1">
              <span>
                Verification <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="verifications" style="position:absolute !important;"></i>
              </span>
            </li>
          </ul>
          <hr style="margin-top:2%;">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          Photos will be on the here ?
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-2" style="margin-top:25px;">
          <div class="form-group">
            <a href="javascript:BackButtonWorkStation('steptwo-separeted','stepthree')" class="btn btn-outline-success">Back</a>
          </div>
        </div>
        <div class="col-md-4" style="margin-top:25px;">
          <div class="form-group">
            <a href="javascript:SwapDivsWithClickk('stepthree','stepfour')" onclick="stepFour();" class="btn btn-outline-success">Next</a>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-4 offset-md-3">
        <p class="text-success mt-2 floa">Step 6 of 7</p>
        </div>
      </div>
    </div>
  </div><!-- container of pagination end here -->

  <div id="stepfour" style="display:none !important">
    <div class="container">
      <div class="signup-wizard-header">
        <div class="container signup-wizard-header-container">
          <div class="fluid-col text-center wizard-section-link section-account-info disabled">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Account </font>
              </font>
            </span>
          </div>
          <div class="fluid-col text-center wizard-section-link section-services-and-rates disabled">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Services and rates </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-sitter-profile enabled active">
            <i class="fa fa-edit" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Babysitter advertisement </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-your-dogs disabled">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  My dogs </font>
              </font>
            </span>
          </div>
          <div class="fluid-col text-center wizard-section-link section-calendar disabled">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Calendar </font>
              </font>
            </span>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <ul class="nav">
            <li class="nav-item offset-md-3">
              <span>Details <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="details3" style="position:absolute !important;" aria-hidden="true"></i>
              </span>
            </li>
            <li class="nav-item offset-md-1">
              <span>
                Photos <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="photosx" style="position:absolute !important;"></i>
              </span>
            </li>
            <li class="nav-item  offset-md-1">
              <span>
                References <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="referencesx" style="position:absolute !important;"></i>
              </span>
            </li>
            <li class="nav-item  offset-md-1">
              <span>
                Verification <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="verifications" style="position:absolute !important;"></i>
              </span>
            </li>
          </ul>
          <hr style="margin-top:2%;">
        </div>
      </div>
      <div class="card border border-success">
        <div class="card-body">
          <div class="row">
            <h4 class="d-flex justify-content-center" style="margin-left:25%; margin-top:25px;">Ask for a reference with your advertisement </h4>
            <div class="col-md-7 offset-md-2 d-flex justify-content-center" style="margin-top:25px;">
              <p> Not required! Ask your friends or family to write a reference for you. If you already fit or fit dogs, ask the
                owners of these dogs for a reference. This makes your profile even more familiar. </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 offset-md-2 d-flex justify-content-center" style="margin-top:25px;">
              <input type="button" value="Ask for a  reference via Facebook" class="btn btn-success btn-lg form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="margin-top:21px;">
              <hr>
            </div>
            <div class="col-md-3">
            <p class="text-center text-success font-weight-bold pt-4">OR ASK VIA EMAIL</p>
            </div>
            <div class="col-md-4" style="margin-top:21px;position:relative;">
              <hr style="width:75%;position:absolute;margin-right:25%;">
            </div>
          </div>
          <div class="row">
            <div class="col-md-7 offset-md-2">
              <div class="form-group">
                <label for="email"></label>
                <input type="email" name="email1" class="form-control" placeholder="bookingpetz@hotmail.com">
                <label for="email"></label>
                <input type="email" name="email2" class="form-control" placeholder="bookingpetz@hotmail.com">
                <label for="email"></label>
                <input type="email" name="email3" class="form-control" placeholder="bookingpetz@hotmail.com">
                <label for="email"></label>
                <input type="email" name="email4" class="form-control" placeholder="bookingpetz@hotmail.com">
                <label for="email"></label>
                <input type="email" name="email5" class="form-control" placeholder="bookingpetz@hotmail.com">
                <label for="email"></label>
                <input type="email" name="email6" class="form-control" placeholder="bookingpetz@hotmail.com">
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4 offset-md-2" style="margin-top:25px;">
              <div class="form-group">
                <a href="javascript:BackButtonWorkStation('stepthree','stepfour')" class="btn btn-outline-success">Back</a>
              </div>
            </div>
            <div class="col-md-4" style="margin-top:25px;">
              <div class="form-group">
                <a href="javascript:SwapDivsWithClicks('stepfour','stepfivee')" onclick="stepFive();" class="btn btn-outline-success">Next</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4 offset-md-3">
          <p class="text-success">Step 7 of 7</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="stepfivee" style="display:none !important">
    <div class="container-fluid">
      <div class="signup-wizard-header">
        <div class="container signup-wizard-header-container">
          <div class="fluid-col text-center wizard-section-link section-account-info disabled">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Account </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-services-and-rates  disabled">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Services and rates </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-sitter-profile active enabled">
            <i class="fa fa-edit" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Babysitter advertisement </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-your-dogs disabled">
            <i class="fa fa-paw" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  My dogs </font>
              </font>
            </span>
          </div>

          <div class="fluid-col text-center wizard-section-link section-calendar disabled">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span class="wizard-section-name hidden-xs">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                  Calendar </font>
              </font>
            </span>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <ul class="nav">
            <li class="nav-item offset-md-3">
              <span>Details <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="details4" style="position:absolute !important;" aria-hidden="true"></i>
              </span>
            </li>
            <li class="nav-item offset-md-1">
              <span>
                Photos <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="photosxy" style="position:absolute !important;"></i>
              </span>
            </li>
            <li class="nav-item  offset-md-1">
              <span>
                References <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="referencesxy" style="position:absolute !important;"></i>
              </span>
            </li>
            <li class="nav-item  offset-md-1">
              <span>
                Verification <br>
                <i class="fa fa-check-circle-o nav-link fa-2x" id="verificationsxy" style="position:absolute !important;"></i>
              </span>
            </li>
          </ul>
          <hr style="margin-top:2%;">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-7 offset-md-2">
          <div class="card border border-success">
              <h5 style="color:red;" class="d-flex justify-content-center">Verification by payment with iDeal</h5>
              <div class="card-body">
                <p style="margin-top:25px;">
                  What is Lorem Ipsum?
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown printer took
                  a galley of type and scrambled it to make a type specimen book. It has survived not
                  only five centuries, but also the leap into electronic typesetting,
                  remaining essentially unchanged. It was popularised in
                </p>
                <label for="bankInput"></label>
                <select class="custom-select" id="bankInput" name="chooseBank">
                  <option selected>Choose your bank</option>
                  <option value="rabbo_bank">One</option>
                  <option value="ing_bank">Two</option>
                  <option value="other_banks">Three</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-4 offset-md-2" style="margin-top:25px;">
                  <div class="form-group">
                    <a href="javascript:BackButtonWorkStation('stepfour','stepfivee')" class="btn btn-outline-success btn-md">Back</a>
                  </div>
                </div>
                <div class="col-md-6 " style="margin-top:25px;">
                  <div class="form-group">
                    <input type="submit" value="Send" name="stepsDone" style="width:100px;" class="btn btn-success btn-md">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row d-flex justify-content-end">
          <div class="col-md-4  d-flex justify-content-center" style="margin-top:15px;">
            <a href="petsitterdashboard.php?info=dashboard" class="btn btn-success">Go back to dashboard</a>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript">
  var preference = document.getElementById('Myprefrences');
  var services = document.getElementById('servicesandpolicy');

  function SwapDivsWithClick(div1, div2, div3, d4) {
    d1 = document.getElementById(div1);
    d2 = document.getElementById(div2);
    d3 = document.getElementById(div3);
    if (d2.style.display == "none") {
      d1.style.display = "none";
      d2.style.display = "block";
      services.style.color = "green";
    } else if (d2.style.display == "block") {
      d2.style.display = "none";
      d3.style.display = "block";
      preference.style.color = "green";
      if (!d3.style.display == "none") {
        preference.style.color = "green";
      }

    } else if (d3.style.display == "block") {
      d3.style.display = "none";
      d4.style.display = "block";
    }

    window.scrollTo({ top: 0, behavior: 'smooth'});
  }

  function SwapDivsWithClickk(div3, div5, div6) {
    d0 = document.getElementById(div3);
    d1 = document.getElementById(div5);
    d2 = document.getElementById(div6);
    if (d0.style.display = "block") {
      d0.style.display = "none";
      d1.style.display = "block";
    } else if (d1.style.display = "block") {
      d1.style.display = "none";
      d2.style.dispay = "block";
    }

    window.scrollTo({ top: 0, behavior: 'smooth'});
  }

  function SwapDivsWithClicks(div6, div7) {
    d0 = document.getElementById(div6);
    d1 = document.getElementById(div7);
    if (d0.style.display = "block") {
      d0.style.display = "none";
      d1.style.display = "block";
    }

    window.scrollTo({ top: 0, behavior: 'smooth'});

  }

  function BackButtonWorkStation(back1, back2) {
    d0 = document.getElementById(back1);
    d1 = document.getElementById(back2);
    if (d0.style.display = "none") {
      d0.style.display = "block";
      d1.style.display = "none";
    }

    window.scrollTo({ top: 0, behavior: 'smooth'});

  }

  function stepone() {
    document.getElementById('Myprefrences').style.color = "green";
    document.getElementById('x').style.color = "green";
  }

  function steptwo() {
    document.getElementById('details').style.color = "green";
  }

  function stepSeparate() {
    document.getElementById('details1').style.color = "green";
  }

  function stepThree() {
    document.getElementById('details2').style.color = "green";
    document.getElementById('photos1').style.color = "green";
  }

  function stepFour() {
    document.getElementById('details3').style.color = "green";
    document.getElementById('photosx').style.color = "green";
    document.getElementById('referencesx').style.color = "green";
  }

  function stepFive() {
    document.getElementById('details4').style.color = "green";
    document.getElementById('photosxy').style.color = "green";
    document.getElementById('referencesxy').style.color = "green";
    document.getElementById('verificationsxy').style.color = "green";
  }
</script>

<style>
  #body {
    background-color: #F3F9F0;
    overflow-x: hidden !important;
  }


  .checkbox-style {
    margin: 7px;
    font-weight: bold;
    color: red;
  }
</style>

<?php include 'footer.php';?>
