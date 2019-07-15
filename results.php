
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="../public/images/bookingpetz_icon.ico" type="image/x-icon">
  <title>Bookingpetz.com</title>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="public/img/bookingpetz_logo.png">
  <link rel="stylesheet" href="../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="results.css">
  <!--This  Javascript File initialized  for Jquery functionlity-->
  <script type="text/javascript" src="../public/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    .none{
        display: none !important;
     }
     .w {
        width: 100%  !important;
     }
     .act{
        border:1px green;
     }
     .resultIcon{
       padding-left:0 !important;
     }
     .resultName{
        padding-left: 0 !important;
     }
     .resultId{
        padding-right: 0 !important;
     }
  </style>
</head>

<body>
<?php include 'header.php'; ?>
       <div class="container-fluid">
          <div class="row">
             <div class="col-md-3">
                <div class="container-fluid">
                  <!-- Services Type Select Box -->
                 <div class="row">
                     <div class="col-md-12">
                      <div class="form-group">
                        <label for="service-type"> Services type</label>
                        <select class="form-control" id="service-type">
                          <option value=1> Hotel Booking </option>
                          <option value=2> Pet Sitting </option>
                          <option value=3> Other </option>
                        </select>
                      </div>
                     </div>
                    </div>
                  </div>
                   <!-- // Services Type Select box end -->
                    <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-12">
                              <label for="zipCodedogNear"> Dog Boarding Near</label>
                               <input type="text" name="__dogboardingnear"     class="form-control" placeholder="Dog boarding near ?">
                           </div>
                        </div>
                    </div>
                  <div class="container-fluid">
                     <div class="row">
                          <div class="col-md-12">
                             <p>Drop off and Drop in Time </p>
                            <input type="text" name="datetimes" class="form-control" />
                          </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                       <div class="col-md-12">
                          <p>Pet Type(s)</p>
                        <div class="input-groups">
                            <label>
                                <input type="checkbox" name="dog" id="">
                                <span>dog</span>
                            </label>
                            <label>
                                 <input type="checkbox" name="cat" id="">
                                 <span>cat</span>
                             </label>

                        </div>
                       </div>
                     </div>
                  </div>

                   <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="service-type"> Services type</label>
                                <select class="form-control" id="service-type">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                        </div>
                     </div>
                   </div>
                    <div class="container-fluid">
                       <div class="row">

                         <div class="col-md-3">
                            <label class=" btn btn-info form-control smalll ">
                            <span >small</span>
                            <input type="checkbox" name="small" id="sm"  >
                          </label>
                         </div>
                         <div class="col-md-3">
                           <label class="btn btn-info  form-control m">
                             <span>medium</span>
                             <input type="checkbox" name="medium" id="med" style="display: none !important" >
                           </label>
                         </div>
                         <div class="col-md-3">
                            <label class="btn btn-info form-control l">
                                <span>large</span>
                                 <input type="checkbox" name="large" id="lar" >
                            </label>
                         </div>
                         <div class="col-md-3">
                           <label class="btn btn-info form-control xl">
                              <span>Xlarge</span>
                              <input type="checkbox" name="Xlarge" id="xlar">
                           </label>
                         </div>
                       </div>
                    </div>

                     <div class="container-fluid">
                        <span>How Many Pets ?</span>
                        <div class="row">

                         <div class="col-md-3">
                            <label class="btn btn-info form-control">
                               <span>1</span>
                               <input type="checkbox" name="one" id="">
                            </label>
                         </div>
                         <div class="col-md-3">
                            <label class="btn  btn-info form-control">
                                <span>2</span>
                                <input type="checkbox" name="one" id="">
                             </label>
                         </div>
                         <div class="col-md-3">
                            <label class="btn btn-info form-control">
                                <span>3+</span>
                                <input type="checkbox" name="one" id="">
                             </label>
                         </div>

                        </div>
                     </div>

             </div>
             <div class="col-md-5">
                <div class="container-fluid" style="margin-top:10px">
                    <div class="row">
                        <div class="col-md-12">
                        <?php
                         include '../includes/dbh-inic.php';

                              $location = $_GET['location'];
                              $dropoff = $_GET['dropoff'];
                              $pickup = $_GET['pickup'];
                              $pets  =  $_GET['pets'];
                              $p = ($pets=="cat")?"s.cat='cat'":"s.dog='dog'";
                              $resultsOnhere = "SELECT h.* from hotels as h left join services as s on h.id = s.hotel_id left join hotelowneravailibility as ho on ho.hotel_id = s.hotel_id where ho.start <= '$dropoff' and ho.end >= '$pickup' and h.country='$location' and $p  group BY h.id ";
                              $result_exec = $pdo->prepare($resultsOnhere);
                              $result_exec->execute();
                              $check = $result_exec->fetchAll(PDO::FETCH_ASSOC);
                              foreach($check as $row){
                        ?>
                            <div class="card mb-5">
                                <div class="card-body">
                                  <div class="container-fluid">
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div id="carousel_<?php echo $row['id']; ?>" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img src="../public/images/cat1.jpg" class="d-block w-100" alt="..." width="100%">
                                                  </div>
                                                  <div class="carousel-item">
                                                      <img src="../public/images/cat1.jpg" class="d-block w-100" alt="..." width="100%">
                                                  </div>
                                                  <div class="carousel-item">
                                                      <img src="../public/images/cat1.jpg" class="d-block w-100" alt="..." width="100%">
                                                  </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel_<?php echo $row['id']; ?>" role="button" data-slide="prev">
                                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel_<?php echo $row['id']; ?>" role="button" data-slide="next">
                                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                              </div>
                                        </div>
                                        <div class="col-md-8">
                                           <div class="row">
                                              <div class="col-md-1 resultId"> <?php echo $row['id']; ?> <strong>.</strong></div>

                                              <div class="col-md-3 resultName"><?php echo $row['hotel_name'] . $row['services_boarding']; ?></div>
                                              <div class="col-md-1 resultIcon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                </div>
                              </div>
                            <?php     }?>
                        </div>
                       </div>
                    </div>
             </div>
              <div class="col-md-4">
                  <div id="map"></div>
              </div>
          </div>
       </div>



  <script type="text/javsacript" src="../public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
  <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };


      function initMap() {

          function getPosition(position){
            var latitude  = position.coords.latitude;
            var longitude = position.coords.longitude;
            var location = {lat:latitude, lng:longitude};


           var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 12, center: location});

           var marker = new google.maps.Marker({position: location, map: map});

            }

         navigator.geolocation.getCurrentPosition(getPosition);

      }
          </script>

          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdiAzr_7w0AtvM6kIHeayfu1IeEJy89nA&callback=initMap">
          </script>


</body>
</html>
<script>
  $(function() {
    $('input[name="datetimes"]').daterangepicker({
      timePicker: true,
      startDate: moment().startOf('hour'),
      endDate: moment().startOf('hour').add(32, 'hour'),
      locale: {
        format: 'M/DD hh:mm A'
      }
    });
  });
  </script>
