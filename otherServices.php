<?php include 'header.php';?>



  <section class="head">
  <div class="container" style="margin-top:130px;margin-bottom:50px"  id="1">
  <div class="signup-wizard-header">
         <div class="container signup-wizard-header-container">
             <div class="fluid-col text-center wizard-section-link section-account-info disabled">
                     <i class="fa fa-address-card-o" aria-hidden="true"></i>
                     <span class="wizard-section-name hidden-xs">
                       <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                         <a href="addHotel.php">Add Hotel</a>
                       </font>
                     </font>
                   </span>
             </div>
             <div class="fluid-col text-center wizard-section-link section-services-and-rates  disabled">
                 <i class="fa fa-home" aria-hidden="true"></i>
                  <span class="wizard-section-name hidden-xs">
                    <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                   <a href="services.php"> Services and rates </a>
                 </font>
                </font>
               </span>
             </div>
             <div class="fluid-col text-center wizard-section-link section-sitter-profile active enabled">
                 <i class="fa fa-edit" aria-hidden="true"></i>
                 <span class="wizard-section-name hidden-xs">
                   <font style="vertical-align: inherit;">
                   <font style="vertical-align: inherit;">
                      <a href="otherServices.php">Other Services</a>
                    </font>
                   </font>
                 </span>
             </div>
         </div>
     </div>
     </div>
     </section>
  <script type="text/javascript" src="public/js/other_services.js"></script>

   <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  include 'includes/dbh-inic.php';
    // Querying
    $hot = "SELECT * FROM hotels  where  user_id= '".$_SESSION['id']."' ";
    $hotel = $pdo->prepare($hot);
    $hotel->execute();
    $hotels = $hotel-> fetchAll();
     $hotel_id = $hotels[0]['id'];
  $q = "SELECT * from services where hotel_id ='$hotel_id'";
  $show = $pdo->prepare($q);
  $show->execute();
  $resultShow = $show->fetchAll(PDO::FETCH_ASSOC);
  foreach ($resultShow as $row) {?>
  <?php
  /* services washing functionality */
     if ($row['services_washing'] == 'washing') {
         echo "
                 <script>
                   $(document).ready(function(){
                      $('#wash').attr('checked',true);
                     $('#washingDiv').show();
                     console.log('washing full fetched');
                   });
                 </script>  ";
     } else {
         echo "
       <script>
         $(document).ready(function(){
            $('#wash').attr('checked',false);
           $('#washingDiv').hide();
           console.log('washing null fetched');
         });
       </script> ";
     }
     if ($row['s_W_s_price'] == null || $row['s_W_s_price'] == 0) {
         echo "
       <script>
         $(document).ready(function(){
            $('#dogWashpriceCheck').attr('checked',false);
           $('#dogWashingPricetable').hide();
           console.log('washing dog null updated');
         });
       </script>";
     } else {
         echo "
       <script>
         $(document).ready(function(){
            $('#dogWashpriceCheck').attr('checked',true);
           $('#dogWashingPricetable').show();
           console.log('washing dog   full updated');
         });
       </script> ";
     }
     if ($row['highSession_W_S'] == null || $row['highSession_W_S'] == 0) {
         echo "
         <script>
         $(document).ready(function(){
           $('#washinghs').attr('checked',false);
          $('#washinghighDiv').hide();
          console.log('washing high session dog null updated');
        });
         </script>
       ";
     } else {
         echo "
       <script>
       $(document).ready(function(){
         $('#washinghs').attr('checked',true);
        $('#washinghighDiv').show();
        console.log('washing high session dog full updated');
      });
       </script> ";
     }
     if ($row['s_W_cat_price'] == null || $row['s_W_cat_price'] == 0) {
         echo "
        <script>
          $(document).ready(function(){
           $('#catWashing').attr('checked',false);
           $('#catWashingdiv').hide();
           console.log('cat washing empty fetched');
         });
        </script>";
     } else {
         echo "
       <script>
         $(document).ready(function(){
          $('#catWashing').attr('checked',true);
          $('#catWashingdiv').show();
          console.log('cat washing full fetched');
        });
       </script>";
     }
     if ($row['highSession_W_cat'] == null || $row['highSession_W_cat'] == 0) {
         echo "
        <script>
             $(document).ready(function(){
                 $('#washingCathigh').attr('checked',false);
                 $('#highsessioncatWash').hide();
                 console.log('cat high session empty fetched');
             });
       </script>";
     } else {
         echo "
       <script>
            $(document).ready(function(){
                $('#washingCathigh').attr('checked',true);
                $('#highsessioncatWash').show();
                console.log('cat high session full fetched');
            });
      </script>";
     }

  /*-- End of  Services washing functionality --*/
  ////////////////////////////////////////////////
     /* Services Nail Clipping */
     if ($row['services_nailclipping'] == 'nailclipping') {
         echo "
       <script>
         $(document).ready(function(){
             $('#nailclipping').attr('checked',true);
             $('#nailClippingDiv').show();
             $('#catNailClipping').show();
             console.log(' nail clipping services enabled');
         });
       </script> ";
     } else {
         echo "
       <script>
         $(document).ready(function(){
             $('#nailclipping').attr('checked',false);
             $('#nailClippingDiv').hide();
             $('#catNailClipping').hide();
             console.log(' nail clipping services disabled');
         });
       </script> ";
     }
     if ($row['s_N_s_price'] == null || $row['s_N_s_price'] == 0) {
         echo "
              <script>
               $(document).ready(function(){
                 $('#nailClippingDog').attr('checked',false);
                 $('#dogNailclippingDiv').hide();
                 console.log('dog nail clipping empty fetched');
               });
              </script> ";
     } else {
         echo "
       <script>
        $(document).ready(function(){
          $('#nailClippingDog').attr('checked',true);
          $('#dogNailclippingDiv').show();
          console.log('dog nail clipping full fetched');
        });
       </script> ";
     }
     if ($row['highSession_N_S'] == null || $row['highSession_N_S'] == 0) {
         echo "
         <script>
             $(document).ready(function(){
                $('#hsnailclippingdog').attr('checked',false);
                $('#highsessionNailclippingDiv').hide();
                console.log('dog nail clipping high session empty fetched');
             })
         </script>";
     } else {
         echo "
       <script>
           $(document).ready(function(){
              $('#hsnailclippingdog').attr('checked',true);
              $('#highsessionNailclippingDiv').show();
              console.log('dog high session nail clipping full fetched');
           })
       </script>";
     }
     if ($row['s_N_cat_price'] == null || $row['s_N_cat_price'] == 0) {
         echo "
         <script>
          $(document).ready(function(){
           $('#catNailX').attr('checked',false);
           $('#catNailclippingDiv').hide();
           console.log('cat nail clipping empty fetched');
          })
         </script>
         ";
     } else {
         echo "
       <script>
        $(document).ready(function(){
         $('#catNailX').attr('checked',true);
         $('#catNailclippingDiv').show();
         console.log('cat nail clipping full fetched');
        })
       </script>
       ";
     }
     if ($row['highSession_N_cat'] == null || $row['highSession_N_cat'] == 0) {
         echo "
          <script>
            $(document).ready(function(){
               $('#hsnailclippingCat').attr('checked',false);
               $('#highsessioncatNail').hide();
               console.log('cat nail clipping high session empty fetched');
            })
          </script>";
     } else {
         echo "
       <script>
         $(document).ready(function(){
            $('#hsnailclippingCat').attr('checked',true);
            $('#highsessioncatNail').show();
            console.log('cat nail clipping high session full fetched');
         })
       </script>";

     }
     /*-- End of  Services Nail Clipping functionality --*/
  ////////////////////////////////////////////////
     /* Services Gromming And Trimming Clipping */
     if ($row['services_GM'] == 'grommingtrimming') {
         echo "
          <script>
           $(document).ready(function(){
             $('#GT').attr('checked',true);
             $('#grommingTrimmingDiv').show();
             console.log('gromming and trimming services enabled');
           })
          </script>";
     } else {
         echo "
       <script>
        $(document).ready(function(){
          $('#GT').attr('checked',false);
          $('#grommingTrimmingDiv').hide();
          console.log('gromming and trimming services disabled');
        })
       </script>";
     }
     if ($row['s_GM_s_price'] == null || $row['s_GM_s_price'] == 0) {
         echo "
          <script>
              $(document).ready(function(){
                 $('#dogGT').attr('checked',false);
                 $('#dogGTramming').hide();
                 console.log('dog gromming and trimming empty fetched');
              })
          </script>
        ";
     } else {
         echo "
       <script>
           $(document).ready(function(){
              $('#dogGT').attr('checked',true);
              $('#dogGTramming').show();
              console.log('dog gromming and trimming full fetched');
           })
       </script> ";
     }
     if ($row['highSession_GM_S'] == null || $row['highSession_GM_S'] == 0) {
         echo "
         <script>
          $(document).ready(function(){
             $('#hsGT').attr('checked',false);
             $('#gtHighSession').hide();
             console.log('dog high session g-t empty fetched');
          })
         </script>
        ";
     } else {
         echo "
       <script>
        $(document).ready(function(){
           $('#hsGT').attr('checked',true);
           $('#gtHighSession').show();
           console.log('dog high session g-t full fetched');
        })
       </script>
      ";
     }
     if ($row['s_GM_cat_price'] == null || $row['s_GM_cat_price'] == 0) {
         echo "
        <script>
           $(document).ready(function(){
               $('#catGrommingtrimming').attr('checked',false);
               $('#catGtdiv').hide();
               console.log('cat gromming trimming emtpy fetched');
           })
         </script> ";
     } else {
         echo "
       <script>
          $(document).ready(function(){
              $('#catGrommingtrimming').attr('checked',true);
              $('#catGtdiv').show();
              console.log('cat gromming trimming full fetched');
          })
        </script> ";
     }
     if ($row['highSession_GM_cat'] == null || $row['highSession_GM_cat'] == 0) {
         echo "
          <script>
            $(document).ready(function(){
               $('#hsCatgt').attr('checked',false);
               $('#highCatgt').hide();
               console.log('cat high session g-t empty fetched');
            })
          </script>
       ";

     } else {
         echo "
       <script>
         $(document).ready(function(){
            $('#hsCatgt').attr('checked',true);
            $('#highCatgt').show();
            console.log('cat high session g-t full fetched');
         })
       </script>";

     }
     /*-- End of  Services Gromming And Trimming functionality --*/
  ////////////////////////////////////////////////
     /* Services   Medication Clipping */
     if ($row['services_medication'] == 'medication') {
         echo "
          <script>
          $(document).ready(function(){
           $('#medic').attr('checked',true);
           $('#medicationDiv').show();
           $('#catMedicationdiv').show()
           console.log('medication full fetched');
          })
          </script>";
     } else {
         echo "
       <script>
       $(document).ready(function(){
        $('#medic').attr('checked',false);
        $('#medicationDiv').hide()
        $('#catMedicationdiv').hide()
        console.log('medication empty fetched');
       })
       </script>";
     }
     if ($row['s_M_s_price'] == null || $row['s_M_s_price'] == 0) {
         echo "
        <script>
          $(document).ready(function(){
             $('#dogmedic').attr('checked',false);
             $('#dogMedicationdiv').hide();
             console.log('medication dog empty fetched');
          })
        </script>
       ";
     } else {
         echo "
       <script>
         $(document).ready(function(){
            $('#dogmedic').attr('checked',true);
            $('#dogMedicationdiv').show();
            console.log('medication dog full fetched');
         })
       </script>
      ";
     }
     if ($row['highSession_M_S'] == null || $row['highSession_M_S'] == 0) {
         echo "
        <script>
           $(document).ready(function(){
              $('#hsDogmedication').attr('checked',false);
              $('#highSessiondogmedication').hide();
              console.log('high session medicaiton empty fetched');
           })
         </script>
       ";
     } else {
         echo "
       <script>
          $(document).ready(function(){
             $('#hsDogmedication').attr('checked',true);
             $('#highSessiondogmedication').show();
             console.log('high session medicaiton full fetched');
          })
        </script>
      ";
     }
     if ($row['s_M_cat_price'] == null || $row['s_M_cat_price'] == 0) {
         echo "
        <script>
          $(document).ready(function(){
             $('#catMedic').attr('checked',false);
             $('#catMedicationd').hide();
             console.log('cat medication empty fetched');
          })
        </script>
       ";
     } else {
         echo "
       <script>
         $(document).ready(function(){
            $('#catMedic').attr('checked',true);
            $('#catMedicationd').show();
            console.log('cat medication full fetched');
         })
       </script>
      ";
     }
     if ($row['highSession_M_cat'] == null || $row['highSession_M_cat'] == 0) {
         echo "
        <script>
         $(document).ready(function(){
            $('#hscatMedication').attr('checked',false);
            $('#highsessioncatmedication').hide();
            console.log('cat medication high session empty fetched')
         })
        </script>
       ";
     } else {
         echo "
       <script>
        $(document).ready(function(){
           $('#hscatMedication').attr('checked',true);
           $('#highsessioncatmedication').show();
           console.log('cat medication high session full fetched')
        })
       </script>
      ";
     }
     ?>

     <form action="includes/hotel/other_services_update-func.php" method="POST">
  <section class="services">
          <div class="container-fluid">
           <div class="row">
             <div class="col-md-10 offset-md-1">
               <div class="card">
                 <div class="card-body">
                 <label class="btn btn-outline-success"><span>Washing</span>
                 <input type="checkbox" name="__washing" style="display:none !important" value="washing" id="wash" onclick="serviceWashing();">
                 </label>
                 <div id="washingDiv" style="display:none !important;">
                 <div class="container"> <!-- Dog washingeve Container-->
                  <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                      <div class="card-body">
                       <label  class="btn btn-outline-success">
                        <span>Dog Washing</span>
                          <input type="checkbox"  name="__dogWashing" id="dogWashpriceCheck" value="dogWashing" onclick="dogWashprice();">
                       </label>
                      </div>
                      <div id="dogWashingPricetable" class="__dogWashingT" style="display:none ">
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
                         <input type="number" name="dwS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_W_s_price'] ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dwM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_W_m_price'] ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dwL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_W_l_price'] ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dwXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_W_xl_price'] ?>">
                         </div>
                         </div>
                         <hr>
                         <div id="washinghighDiv" style="display:none !important; margin-top:10px;">
                         <div class="row">
                         <div class="col-md-3">
                           <p>High session price</p>
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dwhS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_W_S']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dwhM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_W_M']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dwhL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_W_L']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dwhXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_W_XL']; ?>">
                         </div>
                         </div>
                         </div>
                        <div class="row">
                         <div class="col-md-4">
                         <label class="btn btn-success">
                          <span style="font-size:15px;">Do you have high session price ?</span>
                          <input type="checkbox" name="dogWashingh" id="washinghs" value="dogWashingh"   onclick="dogWashhighSessionprice();" style="display:none !important;">
                         </label>
                         </div>
                        </div>
                      </div><!-- // End of Dog  boarding Pricing  container -->
                      </div>
                  </div>
                  </div>
                 </div><!-- // End of Dog washing Checkbox Row -->
                 </div><!-- // End of Dog washing Container -->
                 <div class="container"><!-- Cat washing Container -->
                 <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                      <div class="card-body">
                      <label  class="btn btn-outline-success">
                      <span>Cat Washing</span>
                      <input type="checkbox" name="__catWashing" value="catWashing" id="catWashing" onclick="catWashingX();">
                     </label>
                      </div>
                      <div id="catWashingdiv" style="display:none !important">
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
                        <input type="number" name="cw" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_W_cat_price']; ?>">
                   </div>
                  </div>
                  <hr>
                  <div id="highsessioncatWash" style="display:none !important">
                  <div class="row justify-content-center" >
                   <div class="col-md-4">
                   High Session Price
                   </div>
                   <div class="col-md-6">
                   <input type="number" name="cwH" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_W_cat'] ?>">
                   </div>
                  </div>
                  </div>
                  <div class="row">
                   <div class="col-md-4">
                   <label class="btn btn-outline-success">
                    <span>Do you have high session price?</span>
                    <input type="checkbox" name="_catWashh" value="catWashh" id="washingCathigh" onclick="catWashingH();" style="display:none !important;">
                   </label>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div><!-- // End of Cat Washing Container -->
           </div>
          </div><!-- // End Of Main Card Body -->
         </div>
        </div>
       </div>
      </div>
  </section>
  <section class="servicesNailclipping">
   <!--Services Nail clipping  Container-Fluid start here-->
     <div class="container-fluid">
       <!-- Services nail clipping Row -->
       <div class="row">
         <!-- Services Daycare col-md-10 offset-md-1 -->
        <div class="col-md-10 offset-md-1" style="margin-top:5px;">
         <div class="card">
         <div class="card-body">
         <label class="btn btn-outline-success">
          <span>Nail Clipping</span>
           <input type="checkbox" name="__nailclipping" id="nailclipping" onclick="nailClipping();" value="nailclipping" style="display:none">
         </label>
        <!-- Services inline card start here -->
         <div class="container">
         <!-- Animal Choices Dog-->
         <div id="nailClippingDiv" style="display:none !important">
          <div class="row">
           <div class="col-md-12">
             <div class="card">
              <div class="card-body">
                <label class="btn btn-outline-success">
                 <span>Dog NailClipping</span>
                 <input type="checkbox" name="_nailClippingdog" id="nailClippingDog" onclick="dogNailclipping();">
                </label>
              </div>
              <!-- Dog Daycare Pricing system -->
               <div id="dogNailclippingDiv" style="display:none !important">
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
                         <input type="number" name="dnS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_N_s_price']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dnM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_N_m_price']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dnL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_N_l_price']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dnXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_N_xl_price']; ?>">
                         </div>
                         </div>
                  </div>
                  <div id="highsessionNailclippingDiv" style="display:none !important; margin-top:10px;">
                  <hr>
                         <div class="row">
                         <div class="col-md-3">
                           <p>High session price</p>
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dnhS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_N_S']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dnhM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_N_M']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dnhL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_N_L']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dnhXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_N_XL']; ?>">
                         </div>
                         </div>
                         </div>
                         <hr>
                         <div class="row">
                         <div class="col-md-4">
                         <label class="btn btn-success">
                          <span style="font-size:15px;">Do you have high session price ?</span>
                          <input type="checkbox" name="_dnhighSession" id="hsnailclippingdog" onclick="highSessionNailclippingDog();" style="display:none !important;">
                         </label>
                         </div>
                        </div>
                     </div>
               <!-- // End of Dog Daycare Pricing system -->
             </div>
           </div>
          </div>
              <!-- // End of Animal Choices Dog -->
          </div>
          <!-- Animal Choices Cat -->
          <div id="catNailClipping" style="display:none !important">
          <div class="row">
            <div class="col-md-12">
             <div class="card">
               <div class="card-body">
                 <label class="btn btn-outline-success">
                 <span>Cat Nailclipping</span>
                 <input type="checkbox" name="_catNailclipping" id="catNailX" value="catNail" onclick="catNailclippingX();">
                </label>
               </div>
               <!-- Cat Inline Card Start here -->
               <div id="catNailclippingDiv" style="display:none !important">
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
                   <input type="number" name="cn" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_N_cat_price']; ?>">
                   </div>
                  </div>
                  <div id="highsessioncatNail" style="display:none !important">
                  <hr>
                  <div class="row justify-content-center" >
                   <div class="col-md-4">
                   High Session Price
                   </div>
                   <div class="col-md-6">
                   <input type="number" name="cnH" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_N_cat']; ?>">
                   </div>
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                   <div class="col-md-4">
                   <label class="btn btn-outline-success">
                    <span>Do you have high session price?</span>
                    <input type="checkbox" name="_nhcat" id="hsnailclippingCat" onclick="catNailclippingHigh();" style="display:none !important;">
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
       <!-- // End of Services Nail Clipping inline card -->
        </div>
        </div>
        <!-- // End of Nail Clipping col-md-10 offset-md-1 -->
       </div>
       <!-- // End of services Nail Clipping col-md-10 offset-md-1 -->
      </div>
      <!-- //End of Services Daycare Row -->
     </div>
     <!--// End of services Nail clipping  Container-Fluid -->
     </section>
  <section class="gromming_tramming">
    <!-- Services Gromming And Trimming Container-Fluid Start here -->
          <div class="container-fluid">
           <div class="row">
             <div class="col-md-10 offset-md-1">
               <div class="card">
                 <div class="card-body">
                 <label class="btn btn-outline-success"><span>Gromming and Tramming</span>
                 <input type="checkbox" name="gt" style="display:none !important" id="GT" value="grommingtrimming"  onclick="grommingTrimming();">
                 </label>
                 <div id="grommingTrimmingDiv"  style="display:none !important;">
                 <!-- Gromming Trimming Container-->
                 <div class="container">
                  <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                      <div class="card-body">
                       <label  class="btn btn-outline-success">
                        <span>Dog Gromming Trimming</span>
                          <input type="checkbox" name="dogt" value="dog_grming_trimming" id="dogGT" onclick="dogGrommingtrimmingX();">
                       </label>
                      </div>
                      <div id="dogGTramming" style="display:none !important">
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
                         <input type="number" name="dgtS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_GM_s_price']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dgtM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_GM_m_price']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dgtL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_GM_l_price']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dgtXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_GM_xl_price']; ?>">
                         </div>
                         </div>
                         <hr>
                         <div id="gtHighSession" style="display:none !important; margin-top:10px;">
                         <div class="row">
                         <div class="col-md-3">
                           <p>High session price</p>
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dgthS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_GM_S']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dgthM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_GM_M']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dgthL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_GM_L']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dgthXL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_GM_XL']; ?>">
                         </div>
                         </div>
                         </div>
                        <div class="row">
                         <div class="col-md-4">
                         <label class="btn btn-success">
                          <span style="font-size:15px;">Do you have high session price ?</span>
                          <input type="checkbox" name="gth" id="hsGT" onclick="gtHigh();" value="dog_grm_trimming_high" style="display:none !important;">
                         </label>
                         </div>
                        </div>
                      </div><!-- // End of Dog  boarding Pricing  container -->
                      </div>
                  </div>
                  </div>
                 </div><!-- // End of Dog Gromming Trimming Checkbox Row -->
                 </div><!-- // End of Dog Gromming Trimming Container -->
                 <div class="container"><!-- Cat Gromming Trimming  Container -->
                 <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                      <div class="card-body">
                      <label  class="btn btn-outline-success">
                      <span>Cat Gromming Trimming</span>
                      <input type="checkbox" name="cgtt" id="catGrommingtrimming" value="cgt"  vale onclick="catGt();">
                     </label>
                      </div>
                      <div id="catGtdiv" style="display:none !important">
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
                    <input type="number" name="cgt" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_GM_cat_price']; ?>">
                   </div>
                  </div>
                  <hr>
                  <div id="highCatgt" style="display:none !important">
                  <div class="row justify-content-center" >
                   <div class="col-md-4">
                   High Session Price
                   </div>
                   <div class="col-md-6">
                   <input type="number" name="cgtH" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_GM_cat']; ?>">
                   </div>
                  </div>
                  </div>
                  <div class="row">
                   <div class="col-md-4">
                   <label class="btn btn-outline-success">
                    <span>Do you have high session price?</span>
                    <input type="checkbox" name="cgth" id="hsCatgt" onclick="catGtH();" value="cgthh" style="display:none !important;">
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
  <section class="medicaiton">
  <!-- Services  medication  Container-Fluid start here -->
     <div class="container-fluid">
       <!-- Services Daycare Row -->
      <div class="row">
        <!-- Services Daycare col-md-10 offset-md-1 -->
       <div class="col-md-10 offset-md-1" style="margin-top:5px;">
        <div class="card">
        <div class="card-body">
        <label class="btn btn-outline-success">
         <span>Medication</span>
          <input type="checkbox" name="medicate" id="medic" onclick="medication();" value="medication" style="display:none">
        </label>
        <!-- Services inline card start here -->
         <div class="container">
         <!-- Animal Choices Dog-->
         <div id="medicationDiv" style="display:none !important">
          <div class="row">
           <div class="col-md-12">
             <div class="card">
              <div class="card-body">
                <label class="btn btn-outline-success">
                 <span>Dog medication</span>
                 <input type="checkbox" name="dogMedic" value="dogMedication" id="dogmedic" onclick="dogMedication();">
                </label>
              </div>
              <!-- Dog Daycare Pricing system -->
               <div id="dogMedicationdiv" style="display:none !important">
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
                         <input type="number" name="dmS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_M_s_price'] ?>" >
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dmM" step="0.01"  placeholder="€" class="form-control"  value="<?php echo $row['s_M_m_price'] ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dmL" step="0.01"  placeholder="€" class="form-control"  value="<?php echo $row['s_M_l_price'] ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dmXL" step="0.01"  placeholder="€" class="form-control"  value="<?php echo $row['s_M_xl_price'] ?>">
                         </div>
                         </div>

                  </div>

                  <div id="highSessiondogmedication" style="display:none !important; margin-top:10px;">
                  <hr>
                         <div class="row">
                         <div class="col-md-3">
                           <p>High session price</p>
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dmhS" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_M_S']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dmhM" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_M_M']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dmhL" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_M_L']; ?>">
                         </div>
                         <div class="col-md-2">
                         <input type="number" name="dmhXL" step="0.01"  placeholder="€" class="form-control"value="<?php echo $row['highSession_M_XL']; ?>" >
                         </div>
                         </div>
                         </div>
                         <hr>
                         <div class="row">
                         <div class="col-md-4">
                         <label class="btn btn-success">
                          <span style="font-size:15px;">Do you have high session price ?</span>
                          <input type="checkbox" name="dmH" id="hsDogmedication" onclick="dogHighmedication();" value="medicationDhigh" style="display:none !important;">
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
          <div id="catMedicationdiv" style="display:none !important">
          <div class="row">
            <div class="col-md-12">
             <div class="card">
               <div class="card-body">
                 <label class="btn btn-outline-success">
                 <span>Cat Medication</span>
                 <input type="checkbox" name="catMedications" id="catMedic" value="CatMedication" onclick="catMedication();">
                </label>
               </div>
               <!-- Cat Inline Card Start here -->
               <div id="catMedicationd" style="display:none !important">
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
                         <input type="number" name="cm" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['s_M_cat_price']; ?>">
                         </div>
                  </div>
                  <div id="highsessioncatmedication" style="display:none !important">
                  <hr>
                  <div class="row justify-content-center" >
                   <div class="col-md-4">
                   High Session Price
                   </div>
                   <div class="col-md-6">
                   <input type="number" name="cmH" step="0.01"  placeholder="€" class="form-control" value="<?php echo $row['highSession_M_cat']; ?>">
                   </div>
                  </div>
                  </div>
                  <hr>
                  <div class="row">
                   <div class="col-md-4">
                   <label class="btn btn-outline-success">
                    <span>Do you have high session price?</span>
                    <input type="checkbox" name="cmhigh" id="hscatMedication" onclick="catMedicationhigh();" value="cathighmedication" style="display:none !important;">
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
  <section class="footer">
    <!--footer button -->
  <div class="container">
      <div class="row">
       <div class="col-md-12">
        <input type="submit" value="Send Choices" class="btn btn-outline-success form-control" name="query" style="margin-top:20px">
       </div>
      </div>
     </div>
      <!--footer button -->
     </section>

     </form>
  <?php }?>

  <section class="footer-directory-false" style="margin-top:35px">
     <div class="container-fluid">
         <div class="row " style="justify-content:center">
             <div class="col-md-2">
                 <a href="hotelownerdashboard.php" class="form-control btn btn-outline-primary"> Go to dash board</a>
             </div>
         </div>
     </div>
  </section>



<?php include 'footer.php';?>
