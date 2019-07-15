<?php include 'header.php';?>

<div style="margin-top: 130px;"></div>
  <hr>

  <div class="signup-wizard-header">
          <div class="container signup-wizard-header-container">
              <div class="fluid-col text-center wizard-section-link section-account-info disable">
                      <i class="fa fa-address-card-o" aria-hidden="true"></i>
                      <span class="wizard-section-name hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          <a href="addHotel.php">Add Hotel</a>                   </font></font></span>
              </div>
              <div class="fluid-col text-center wizard-section-link section-services-and-rates  enable active">
                  <i class="fa fa-home" aria-hidden="true"></i>
                   <span class="wizard-section-name hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                   <a href="services.php"> Services and rates </a>                  </font></font></span>
              </div>
              <div class="fluid-col text-center wizard-section-link section-sitter-profile disabled">
                  <i class="fa fa-edit" aria-hidden="true"></i>
                  <span class="wizard-section-name hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                       <a href="otherServices.php">Other Services</a>               </font></font></span>
              </div>
          </div>
      </div>
      </div>

  <script src="public/js/services.js"></script>
     <script>
  function daycares() {
    var dd = document.getElementById("daycar");
    if (dd.checked == true) {
      document.getElementById("dogdaycare").style.display = "block";
      document.getElementById("catdaycare").style.display = "block";

    } else {
      document.getElementById("dogdaycare").style.display = "none";
      document.getElementById("catdaycare").style.display = "none";

    }
  }
  function highSessionmX() {
    var hsm = document.getElementById("hsm");
    if (hsm.checked == true) {
      document.getElementById("highsessionM").style.display = "block";
       console.log("full ");
    } else {
      document.getElementById("highsessionM").style.display = "none";
      console.log("null");
    }
  }
     </script>
     <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  include 'includes/dbh-inic.php';
  $hot = "SELECT * FROM hotels  where  user_id= '".$_SESSION['id']."' ";
  $hotel = $pdo->prepare($hot);
  $hotel->execute();
  $hotels = $hotel-> fetchAll();
  $hotel_id = $hotels[0]['id'];
  $function_query = "SELECT * FROM services where  hotel_id='$hotel_id'";
  $function_query_result = $pdo->prepare($function_query);
  $function_query_result->execute();

  $function_query_row = $function_query_result->rowCount();
  if ($function_query_row < 1) {
      ?>

     <form action="includes/hotel/services_add-func.php" method="POST">
  <section class="services">
           <div class="container-fluid">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <div class="card">
                  <div class="card-body">
                  <label class="btn btn-outline-success"><span>Boarding</span>
                  <input type="checkbox" name="boarding" style="display:none !important" id="boarding" value="boarding" onclick="fmd();">
                  </label>
                  <div id="boardingg" style="display:none !important;">
                  <div class="container" id="dogBoarding"> <!-- Dog Boarding Container-->
                   <div class="row">
                   <div class="col-md-12">
                      <div class="card">
                       <div class="card-body">
                        <label  class="btn btn-outline-success">
                         <span>Dog Boarding</span>
                           <input type="checkbox" name="dogBoarding" id="dogpricecheck" onclick="dogprice();" style="display:none !important;">
                        </label>
                       </div>
                       <div id="dogpricing" style="display:none !important">
                       <div class="container"><!--  Dog  boarding Pricing  container start here -->
                        <div class="row dogX">
                         <div class="col-md-3 dog">
                          <h5>Dog</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>S</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>M</h5>
                         </div>
                         <div class="col-md-2">
                         <h5>L</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>XL</h5>
                         </div>
                        </div>
                        <hr>
                          <div class="row">
                          <div class="col-md-3">
                            <p>Standard price</p>
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbS" step="0.01"  placeholder="€" class="form-control" >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbM" step="0.01"  placeholder="€" class="form-control" >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbL" step="0.01"  placeholder="€" class="form-control" >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbXL" step="0.01"  placeholder="€" class="form-control" >
                          </div>
                          </div>
                          <hr>
                          <div id="highsession" style="display:none !important; margin-top:10px;">
                          <div class="row">
                          <div class="col-md-3">
                            <p>High session price</p>
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbhS" step="0.01" placeholder="€" class="form-control" value="<?php echo $row['highSession_S'] ?>" >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbhM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_M'] ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbhL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_L'] ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbhXL" step="0.01" placeholder="€" class="form-control" value="<?php echo $row['highSession_XL'] ?>">
                          </div>
                          </div>
                          </div>
                         <div class="row">
                          <div class="col-md-4">
                          <label class="btn btn-success">
                           <span style="font-size:15px;">Do you have high session price ?</span>
                           <input type="checkbox" name="dogHighsession" id="hs" onclick="highSessionX();" value="dogHigh" style="display:none !important;">
                          </label>
                       </div>
                      </div>
                     </div><!-- // End of Dog  boarding Pricing  container -->
                    </div>
                   </div>
                  </div>
                 </div><!-- // End of Dog Boarding Checkbox Row -->
                </div><!-- // End of Dog Boarding Container -->
                  <div class="container" id="catBoarding"><!-- Cat Boarding Container -->
                  <div class="row">
                   <div class="col-md-12">
                      <div class="card">
                       <div class="card-body">
                       <label  class="btn btn-outline-success">
                       <span>Cat Boarding</span>
                       <input type="checkbox" name="catBoarding" id="catboarding" onclick="catBoardingX();" style="display:none !important;">
                      </label>
                       </div>
                       <div id="catb" style="display:none !important">
                       <div class="container">
                       <div class="row justify-content-center">
                    <div class="col-md-4">
                     <h5>Cat</h5>
                    </div>
                    <div class="col-md-6">
                    <h5>Price</h5>
                    </div>
                   </div>
                   <hr>
                   <div class="row justify-content-center">
                     <div class="col-md-4">
                       <p>Standard price</p>
                     </div>
                     <div class="col-md-6">
                          <input type="number" name="cb" step="0.01"  placeholder="€" class="form-control">
                     </div>
                    </div>
                   <hr>
                   <div id="highsessioncat" style="display:none !important">
                   <div class="row justify-content-center" >
                    <div class="col-md-4">
                    High Session Price
                    </div>
                    <div class="col-md-6">
                    <input type="number" name="cbH" step="0.01"  placeholder="€" class="form-control" >
                    </div>
                   </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                    <label class="btn btn-outline-success">
                     <span>Do you have high session price?</span>
                     <input type="checkbox" name="highSessioncat" id="hscat" onclick="highSessioncatX();" style="display:none !important;">
                    </label>
                    </div>
                   </div>
                  </div>
                 </div>
                   </div>
                  </div>
                  </div>
                  </div><!-- // End of Cat Boarding Container -->
                  </div>
                  </div><!-- // End Of Main Card Body -->
                </div>
              </div>
            </div>
           </div>
   </section>
   <section class="services_daycare">
      <div class="container-fluid"><!-- Services Daycare  Container- Fluid start here -->
       <div class="row"><!-- Services Daycare Row -->
        <div class="col-md-10 offset-md-1" style="margin-top:5px;"><!-- Services Daycare col-md-10 offset-md-1 -->
         <div class="card">
         <div class="card-body">
         <label class="btn btn-outline-success">
          <span>Daycare</span>
           <input type="checkbox" name="daycare" id="daycar" style="display: none !important;" onclick="daycares();" value="daycare" style="display:none">
         </label>
         <!-- Services inline card start here -->
          <div class="container">
          <!-- Animal Choices Dog-->
          <div id="dogdaycare" style="display:none !important">
           <div class="row">
            <div class="col-md-12">
              <div class="card">
               <div class="card-body">
                 <label class="btn btn-outline-success">
                  <span>Dog Daycare</span>
                  <input type="checkbox" name="dogDaycare" id="dogdaycareP" onclick="dogdaycarepricing();"  style="display:none !important;">
                 </label>
               </div>
               <!-- Dog Daycare Pricing system -->
                <div id="ddpricing" style="display:none !important">
                 <div class="container">
                  <div class="row">
                  <div class="col-md-3 dog">
                          <h5>Dog</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>S</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>M</h5>
                         </div>
                         <div class="col-md-2">
                         <h5>L</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>XL</h5>
                         </div>
                  </div>
                  <hr>
                  <div class="row">
                          <div class="col-md-3">
                            <p>Standard price</p>
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddS" step="0.01"  placeholder="€" class="form-control"  >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddM" step="0.01"  placeholder="€" class="form-control">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddL" step="0.01"  placeholder="€" class="form-control" >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddXL" step="0.01"  placeholder="€" class="form-control"  >
                          </div>
                          </div>
                   </div>
                   <div id="highsessiondaycaredog" style="display:none !important; margin-top:10px;">
                           <hr>
                          <div class="row">
                          <div class="col-md-3">
                            <p>High session price</p>
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddhS" step="0.01"  placeholder="€" class="form-control" value="daycareH">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddhM" step="0.01"  placeholder="€" class="form-control" >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddhL" step="0.01"  placeholder="€" class="form-control"  >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddhXL" step="0.01"  placeholder="€" class="form-control" >
                          </div>
                          </div>
                          </div>
                          <hr>
                          <div class="row">
                          <div class="col-md-4">
                          <label class="btn btn-success">
                           <span style="font-size:15px;">Do you have high session price ?</span>
                           <input type="checkbox" name="hsDaycare" id="hsdaycaredog" onclick="highSessiondaycaredog();" style="display:none !important;">
                          </label>
                          </div>
                         </div>
                      </div>
                <!-- // End of Dog Daycare Pricing system -->
              </div>
            </div>
           </div>
           </div>
           <!-- // End of Animal Choices Dog -->
           <!-- Animal Choices Cat -->
           <div id="catdaycare" style="display:none !important">
           <div class="row">
             <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <label class="btn btn-outline-success">
                  <span>Cat Daycare</span>
                  <input type="checkbox" name="catDaycare" id="catdayca" onclick="catdaycares();" style="display:none !important;">
                 </label>
                </div>
                <!-- Cat Inline Card Start here -->
                <div id="catday" style="display:none !important">
                 <div class="container">
                  <div class="row">
                  <div class="container">
                       <div class="row justify-content-center">
                    <div class="col-md-4">
                     <h5>Cat</h5>
                    </div>
                    <div class="col-md-6">
                    <h5>Price</h5>
                    </div>
                   </div>
                  <hr>
                   <div class="row justify-content-center">
                   <div class="col-md-4">
                            <p>Standard price</p>
                          </div>
                          <div class="col-md-6">
                          <input type="number" name="cd" step="0.01"  placeholder="€" class="form-control" >
                          </div>
                   </div>
                   <div id="highsessioncatday" style="display:none !important">
                   <hr>
                   <div class="row justify-content-center" >
                    <div class="col-md-4">
                    High Session Price
                    </div>
                    <div class="col-md-6">
                    <input type="number" name="cdH" step="0.01"  placeholder="€" class="form-control" >
                    </div>
                   </div>
                   </div>
                   <hr>
                   <div class="row">
                    <div class="col-md-4">
                    <label class="btn btn-outline-success">
                     <span>Do you have high session price?</span>
                     <input type="checkbox" name="highSdcat" id="hscatday" onclick="highsessioncatd();" style="display:none !important;">
                    </label>
                    </div>
                   </div>
                  </div>
                 </div>
                  </div>
                 </div>
                </div>
                <!-- // End of cat inline card -->
              </div>
             </div>
           </div>
           </div>
           <!-- // End of Animal Choices Cat -->
          </div>
        <!-- // End of Services Daycare inline card -->
         </div>
         </div>
        </div><!-- // End of services Daycare col-md-10 offset-md-1 -->
       </div><!-- //End of Services Daycare Row -->
      </div><!-- // End of services daycare  Container-Fluid -->
   </section>
   <div class="container">
       <div class="row" style="margin-top:50px;">
        <div class="col-md-12">
         <input type="submit" value="Modify your services" class="btn btn-outline-success form-control" name="query" style="margin-top:20px; margin-bottom:135px;">
        </div>
       </div>
      </div>

  </form>

      <!-- This is else command start area

           Main idea if any hotel services exist then else will work and show us what's the hotel price for services
       -->

    <?php } else {?>

      <?php
  error_reporting(E_ALL);
      ini_set('display_errors', 1);
      include 'includes/dbh-inic.php';
      $userid = $_SESSION['id'];

      ?>

  <?php include 'includes/dbh-inic.php';
  $hot = "SELECT * FROM hotels  where  user_id= '".$_SESSION['id']."' ";
  $hotel = $pdo->prepare($hot);
  $hotel->execute();
  $hotels = $hotel-> fetchAll();
    $hotel_id = $hotels[0]['id'];

      $q = "SELECT * from services where hotel_id ='$hotel_id'";
      $show = $pdo->prepare($q);
      $show->execute();
      $resultShow = $show->fetchAll(PDO::FETCH_ASSOC);
      foreach ($resultShow as $row) {
          if ($row['services_boarding'] == "boarding") {
              echo "
               <script type='text/javascript'>
          $(document).ready(function(){
          $('#boarding').attr('checked',true);
          $('#boardingg').show();
          console.log('worked');
           });
              </script> ";
          } else {
              echo "<script type='text/javascript'>
            $(document).ready(function(){
                $('#boarding').attr('checked',false);
                $('#boardingg').hide();
                console.log('hide worked');
            })
        </script> ";
          }
          if ($row['s_B_s_price'] == null || $row['s_B_s_price'] == 0) {
              echo "
              <script type='text/javascript'>
             $('document').ready(function(){
             $('#dogpricecheck').attr('checked',false);
             $('#dogpricing').hide();
            });
      </script>";
          } else {
              echo "
            <script type='text/javascript'>
           $('document').ready(function(){
           $('#dogpricecheck').attr('checked',true);
           $('#dogpricing').show();
          });
    </script>";
          }
          if ($row['highSession_S'] == null || $row['highSession_S'] == 0) {
              echo "
              <script type='text/javascript'>
              $('document').ready(function(){
              $('#hsm').attr('checked',false);
              $('#highsessionM').hide();
              });
              </script>";
          } else {
              echo "<script type='text/javascript'>
              $('document').ready(function(){
                $('#hsm').attr('checked',true);
              $('#highsessionM').show();
            });
            </script>";
          }
          if ($row['s_B_cat_price'] == null || $row['s_B_cat_price'] == 0) {
              echo "<script type='text/javascript'>
              $('document').ready(function(){
                $('#catboarding').attr('checked',false);
                $('#catb').hide();
           });
           </script>";
          } else {
              echo "
              <script type='text/javascript'>
              $('document').ready(function(){
                $('#catboarding').attr('checked',true);
                $('#catb').show();
              });
      </script>";
          }
          if ($row['highSession_cat'] == null || $row['highSession_cat'] == 0) {
              echo "
              <script>
              $('document').ready(function(){
              $('#hscat').attr('checked',false);
              $('#highsessioncat').hide();
               });
      </script>";
          } else {
              echo "
              <script type='text/javascript'>
              $('document').ready(function(){
                $('#hscat').attr('checked',true);
                $('#highsessioncat').show();
                 });
        </script>";
          }
          if ($row['services_daycare'] == "daycare") {
              echo "
              <script type='text/javascript'>
              $('document').ready(function(){
              $('#daycar').attr('checked',true);
              $('#dogdaycare').show();
              $('#catdaycare').show();
               });
            </script>";
          } else {
              echo "
            <script >
            $('document').ready(function(){
            $('#daycar').attr('checked',false);
            $('#dogdaycare').hide();
            $('#catdaycare').hide();
             });
          </script>";
          }
          if ($row['s_D_s_price'] == null || $row['s_D_s_price'] == 0) {
              echo "
              <script>
              $('document').ready(function(){
              $('#dogdaycareP').attr('checked',false);
              $('#ddpricing').hide();
               });
               </script>";
          } else {
              echo "
                <script>
                $('document').ready(function(){
                  $('#dogdaycareP').attr('checked',true);
                    $('#ddpricing').show();

               });
               </script>";
          }
          if ($row['highSession_D_S'] == null || $row['highSession_D_S'] == 0) {
              echo
                  "<script type='text/javascript'>
              $('document').ready(function(){
              $('#hsdaycaredog').attr('checked',false)
              $('#highsessiondaycaredog').hide();

              });
              </script>";
          } else {
              echo "
              <script type='text/javascript'>
              $('document').ready(function(){
                $('#hsdaycaredog').attr('checked',true);
              $('#highsessiondaycaredog').show();

               });
               </script>";
          }
          if ($row['s_D_cat_price'] == null || $row['s_D_cat_price'] == 0) {
              echo "
              <script type='text/javascript'>
                $('document').ready(function(){
                $('#catdayca').attr('checked',false);
                $('#catday').hide();
                });
                </script>";
          } else {
              echo "
              <script type='text/javascript'>
              $('document').ready(function(){
                $('#catdayca').attr('checked',true)
              $('#catday').show();

              });
              </script>";
          }
          if ($row['highSession_D_cat'] == null || $row['highSession_D_cat'] == 0) {
              echo "
              <script type='text/javascript'>
              $('document').ready(function(){
              $('#hscatday').attr('checked',false);
                $('#highsessioncatday').hide();

              });
              </script>";
          } else {
              echo "
              <script type='text/javascript'>
              $('document').ready(function(){
                $('#hscatday').attr('checked',true);
              $('#highsessioncatday').show();

                });
               </script>";
          }
          ?>



  <form action="includes/hotel/modify_services-func.php" method="POST">

  <section class="services">
           <div class="container-fluid">
            <div class="row" >
              <div class="col-md-10 offset-md-1" style="margin-bottom:30px">
                <div class="card" >
                  <div class="card-body">
                  <label class="btn btn-outline-success"><span>Boarding</span>
                  <input type="checkbox" name="boarding" style="#display:none !important" id="boarding" value="boarding" class="DogBoarding" onclick="fmd();" >
                  </label>
                  <div id="boardingg" style="display:none !important;">
                  <div class="container" id="dogBoarding"> <!-- Dog Boarding Container-->
                   <div class="row">
                   <div class="col-md-12">
                      <div class="card">
                       <div class="card-body">
                        <label  class="btn btn-outline-success">
                         <span>Dog Boarding</span>
                           <input type="checkbox" name="dogBoarding" id="dogpricecheck" onclick="dogprice();" style="display:none !important;">
                        </label>
                       </div>
                       <div id="dogpricing" style="display:none !important">
                       <div class="container"><!--  Dog  boarding Pricing  container start here -->
                        <div class="row dogX">
                         <div class="col-md-3 dog">
                          <h5>Dog</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>S</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>M</h5>
                         </div>
                         <div class="col-md-2">
                         <h5>L</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>XL</h5>
                         </div>
                        </div>
                        <hr>
                          <div class="row">
                          <div class="col-md-3">
                            <p>Standard price</p>
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_B_s_price']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_B_m_price']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_B_l_price']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_B_xl_price']; ?>">
                          </div>
                          </div>
                          <hr>
                          <div id="highsessionM" style="display:none !important; margin-top:10px;">
                          <div class="row">
                          <div class="col-md-3">
                            <p>High session price</p>
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbhS" step="0.01" placeholder="€" class="form-control" value="<?php echo $row['highSession_S']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbhM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_M']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbhL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_L']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="dbhXL" step="0.01" placeholder="€" class="form-control" value="<?php echo $row['highSession_XL']; ?>">
                          </div>
                          </div>
                          </div>
                         <div class="row">
                          <div class="col-md-4">
                          <label class="btn btn-success">
                           <span style="font-size:15px;">Do you have high session price ?</span>
                           <input type="checkbox" name="dBhS" id="hsm" onclick="highSessionmX();" value="dBhS" style="#display:none !important;">
                          </label>
                          </div>
                         </div>
                       </div><!-- // End of Dog  boarding Pricing  container -->
                       </div>
                   </div>
                   </div>
                  </div><!-- // End of Dog Boarding Checkbox Row -->
                  </div><!-- // End of Dog Boarding Container -->

                  <div class="container" id="catBoarding"><!-- Cat Boarding Container -->
                  <div class="row">
                   <div class="col-md-12">
                      <div class="card">
                       <div class="card-body">
                       <label  class="btn btn-outline-success">
                       <span>Cat Boarding</span>
                       <input type="checkbox" name="cbchk" id="catboarding" onclick="catBoardingX();" style="display:none !important;">
                      </label>
                       </div>
                       <div id="catb" style="display:none !important">
                       <div class="container">
                       <div class="row justify-content-center">
                    <div class="col-md-4">
                     <h5>Cat</h5>
                    </div>
                    <div class="col-md-6">
                    <h5>Price</h5>
                    </div>
                   </div>
                   <hr>
                   <div class="row justify-content-center">
                   <div class="col-md-4">
                            <p>Standard price</p>
                          </div>
                          <div class="col-md-6">
                          <input type="number" name="cb" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_B_cat_price']; ?>" >
                          </div>
                   </div>
                   <hr>
                   <div id="highsessioncat" style="display:none !important">
                   <div class="row justify-content-center" >
                    <div class="col-md-4">
                    High Session Price
                    </div>
                    <div class="col-md-6">
                    <input type="number" name="cbH" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_cat']; ?>">
                    </div>
                   </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                    <label class="btn btn-outline-success">
                     <span>Do you have high session price?</span>
                     <input type="checkbox" name="highSessioncat" id="hscat" onclick="highSessioncatX();" style="display:none !important;">
                    </label>
                    </div>
                   </div>
                  </div>
                 </div>
                   </div>
                  </div>
                  </div>
                  </div><!-- // End of Cat Boarding Container -->
                  </div>
                  </div><!-- // End Of Main Card Body -->
                </div>
              </div>
            </div>
           </div>
   </section>

   <section class="services_daycare">
      <div class="container-fluid"><!-- Services Daycare  Container- Fluid start here -->
       <div class="row"><!-- Services Daycare Row -->
        <div class="col-md-10 offset-md-1" style="margin-top:5px;"><!-- Services Daycare col-md-10 offset-md-1 -->
         <div class="card">
         <div class="card-body">
         <label class="btn btn-outline-success">
          <span>Daycare</span>
           <input type="checkbox" name="daycare" id="daycar" style="#display: none !important;" onclick="daycares()" value="daycare" style="display:none">
         </label>
         <!-- Services inline card start here -->
          <div class="container">
          <!-- Animal Choices Dog-->
          <div id="dogdaycare" style="display:none !important">
           <div class="row">
            <div class="col-md-12">
              <div class="card">
               <div class="card-body">
                 <label class="btn btn-outline-success">
                  <span>Dog Daycare</span>
                  <input type="checkbox" name="dogDaycare" id="dogdaycareP" onclick="dogdaycarepricing();"  style="display:none !important;">
                 </label>
               </div>
               <!-- Dog Daycare Pricing system -->
                <div id="ddpricing" style="display:none !important">
                 <div class="container">
                  <div class="row">
                  <div class="col-md-3 dog">
                          <h5>Dog</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>S</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>M</h5>
                         </div>
                         <div class="col-md-2">
                         <h5>L</h5>
                         </div>
                         <div class="col-md-2">
                          <h5>XL</h5>
                         </div>
                  </div>
                  <hr>
                  <div class="row">
                          <div class="col-md-3">
                            <p>Standard price</p>
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_D_s_price']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_D_m_price']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_D_l_price']; ?>" >
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_D_xl_price']; ?>" >
                          </div>
                          </div>

                   </div>

                   <div id="highsessiondaycaredog" style="display:none !important; margin-top:10px;">
                   <hr>
                          <div class="row">
                          <div class="col-md-3">
                            <p>High session price</p>
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddhS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_D_S']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddhM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_D_M']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddhL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_D_L']; ?>">
                          </div>
                          <div class="col-md-2">
                          <input type="number" name="ddhXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_D_XL']; ?>">
                          </div>
                          </div>
                          </div>
                          <hr>
                          <div class="row">
                          <div class="col-md-4">
                          <label class="btn btn-success">
                           <span style="font-size:15px;">Do you have high session price ?</span>
                           <input type="checkbox" name="highDogdaycare" value="highDogdaycare" id="hsdaycaredog" onclick="highSessiondaycaredog();" style="display:none !important;">
                          </label>
                          </div>
                         </div>
                      </div>
                <!-- // End of Dog Daycare Pricing system -->
              </div>
            </div>
           </div>
           </div>
           <!-- // End of Animal Choices Dog -->
           <!-- Animal Choices Cat -->
           <div id="catdaycare" style="display:none !important">
           <div class="row">
             <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <label class="btn btn-outline-success">
                  <span>Cat Daycare</span>
                  <input type="checkbox" name="catDaycare" id="catdayca" onclick="catdaycares();" style="display:none !important;">
                 </label>
                </div>
                <!-- Cat Inline Card Start here -->
                <div id="catday" style="display:none !important">
                 <div class="container">
                  <div class="row">
                  <div class="container">
                       <div class="row justify-content-center">
                    <div class="col-md-4">
                     <h5>Cat</h5>
                    </div>
                    <div class="col-md-6">
                    <h5>Price</h5>
                    </div>
                   </div>
                  <hr>
                   <div class="row justify-content-center">
                   <div class="col-md-4">
                            <p>Standard price</p>
                          </div>
                          <div class="col-md-6">
                          <input type="number" name="cd" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_D_cat_price']; ?>">
                          </div>
                   </div>
                   <div id="highsessioncatday" style="display:none !important">
                   <hr>
                   <div class="row justify-content-center" >
                    <div class="col-md-4">
                    High Session Price
                    </div>
                    <div class="col-md-6">
                    <input type="number" name="cdH" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_D_cat'] ?>">
                    </div>
                   </div>
                   </div>
                   <hr>
                   <div class="row">
                    <div class="col-md-4">
                    <label class="btn btn-outline-success">
                     <span>Do you have high session price?</span>
                     <input type="checkbox" name="highSdcat" id="hscatday" onclick="highsessioncatd();" style="display:none !important;">
                    </label>
                    </div>
                   </div>
                  </div>
                  </div>
                  </div>
                 </div>
                </div>
                <!-- // End of cat inline card -->
              </div>
             </div>
           </div>
           </div>
           <!-- // End of Animal Choices Cat -->
          </div>
          <!-- // End of Services Daycare inline card -->
         </div>
         </div>
        </div><!-- // End of services Daycare col-md-10 offset-md-1 -->
       </div><!-- //End of Services Daycare Row -->
      </div><!-- // End of services daycare  Container-Fluid -->
   </section>
   <div class="container">
       <div class="row" style="margin-top:45px;">
        <div class="col-md-12">
         <input type="submit" value="Modify your services" class="btn btn-outline-success form-control" name="query" style="margin-top:20px; margin-bottom:45px;">
        </div>
       </div>
      </div>
  </form>

    <?php }}?>

    <section class="footer-directory-false" >
        <div class="container-fluid">
            <div class="row " style="justify-content:center">
                <div class="col-md-2">
                    <a href="hotelownerdashboard.php" class="form-control btn btn-outline-primary"> Go to dash board</a>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php';?>
