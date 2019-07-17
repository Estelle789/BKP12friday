
<?php include 'header.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="public/img/bookingpetz_logo.png">
  <link rel="shortcut icon" href="../public/images/bookingpetz_icon.ico" type="image/x-icon">
  <title>Bookingpetz.com</title>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="results.css">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <!--This  Javascript File initialized  for Jquery functionlity-->
  <script type="text/javascript" src="../public/js/jquery-3.2.1.min.js"></script>
  <script src="clockpicker.js"></script>
  <link rel="stylesheet" href="clockpicker.css">
  <script src="../public/js/daterangepicker.min.js"></script>
  <script src="../public/js/daterangepicker1.js"></script>
  <link rel="stylesheet" href="../public/css/daterangepicker.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
  #map
   {
      height: 100%;
      width:100%;
      border-radius: 20px;
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


       <div class="container-fluid" style="margin-top:100px;padding-left: 0px;">
          <div class="row">
             <div class="col-md-5" >
                <div class="container-fluid" style=" margin-top:10px;margin-left:0px;width:920px">
                    <div class="row">
                        <div class="col-md-12">
                        <?php
                         include 'includes/dbh-inic.php';
                          //    $location = $_GET['location'];
                        //      $dropoff = $startdate;//$_GET['dropoff'];
                      //        $pickup =$enddate;// $_GET['pickup'];
                    //          $pets  =  "dog";//$_GET['pets'];
                      //        $p = ($pets=="cat")?"s.cat='cat'":"s.dog='dog'";
                                $ee="Select * from hotels as h where h.id=5";
                            //  $resultsOnhere = "SELECT h.* from hotels as h left join services as s on h.id = s.hotel_id left join hotelowneravailibility as ho on ho.hotel_id = s.hotel_id where ho.start <= '$startdate' and ho.end >= '$enddate' and h.country='$location' and $p  group BY h.id ";
                              $result_exec = $pdo->prepare($ee);
                              $result_exec->execute();
                              $check = $result_exec->fetchAll(PDO::FETCH_ASSOC);
                              foreach($check as $row){
                        ?>

                            <div class="card mb-5">
                           <div type="button" class="card-body"  id="hh" style=" padding:20px;background-color: #F3F9F0 ;border: 2px solid #0eb25a; height: 1300px" >
                                  <div class="container-fluid">
                                     <div class="row" >
                                       <div class="col-md-9 resultName" style="margin-left:20px" > <font size="6" ><strong><?php echo $row['id']; ?>. <?php echo $row['hotel_name'];?></strong> </font>
                                        <font size="4" style="color:blue;margin-left:20px;margin-bottom:20px" ><strong> <br> <?php echo $row['address'];?> </strong>  </br> </font>
                                       </div>
                                       <div class="col-md-2">
                                           <div  style=" color:yellow"> <font size="8" >  <strong> ***** </strong></font></div>
                                       </div>
                                       <?php
                                        $hotel_id=$row['id'];
                                         ?>
                                        <div class="col-md-13" style="margin-top:30px;">
                                            <div id="carousel_<?php echo $row['id']; ?>" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img src="public/img/im1.jpg" class="d-block w-100" alt="..." width="100%">
                                                  </div>
                                                  <div class="carousel-item">
                                                      <img src="public/img/im2.jpg" class="d-block w-100" alt="..." width="100%">
                                                  </div>
                                                  <div class="carousel-item">
                                                      <img src="public/img/im3.jpg" class="d-block w-100" alt="..." width="100%">
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


                                     </div>


                                </div>

                                <div class="row">
                                    <div style="margin-left:800px;padding-top:30px;color:red"> <font size="3"  >  <strong> Price: 100 € </strong></font></div>
                                  <div style="margin-top:30px;padding-left:30px;
                                  padding-bottom: 10px; color: green"><strong> <font size="3" color="red"><strong>Services: </strong></font><p style="margin-left:80px">Washing: <font size="3"  >  <strong> Price: 20 € </strong></font></p> <p style="margin-left:80px">Nail clipping:<font size="3"  >  <strong> Price: 20 € </strong></font></p> <p style="margin-left:80px">Grooming: <font size="3"  >  <strong> Price: 20 € </strong></font></p>  </strong></div>
                               </div>


                               <form method="POST" action="book.php" >
                                      <div class="row">
                                              <input type="submit" name="go" value=" BOOK..!!" id="goButton">
                                     </div>
                               </form>

                       <?php

                               if(isset($_POST['go']) )
                               {

                                 if (isset($_SESSION['id']))
                                 {
                                   $user=$_SESSION['id'];
                                   $conn=mysqli_connect("localhost","root","","bookingpetz");
                                   $sql = "INSERT INTO `booking_details`(`booking_start_date`, `booking_end_date`, `booked_date`, `booking_price`, `booking_payment_id`, `user_id`, `hotel_id`) VALUES ('2019-07-11','2019-07-18',current_timestamp(),'100','12345','$user','$hotel_id');";
                                   mysqli_query($conn,$sql);
                                 }
                                 else {
                                   echo "Please Login";
                                 }
                              }
                       ?>






                                 <div class="row" style="margin-top:20px;">
                                   <div style="color:blue;padding-left:30px;padding-bottom:10px;padding-right:30px"><font size="3" color="red"><strong>Description: </strong></font><strong>If you're booking at least two days in advance and need time to decide, take an option on the room for up to 24 hours. Exclusively for NH Rewards members booking any NH Rewards flexible rate on our website.
                                   If you're booking at least two days in advance and need time to decide, take an option on the room for up to 24 hours. Exclusively for NH Rewards members booking any NH Rewards flexible rate on our website.If you're booking at least two days in advance and need time to decide, take an option on the room for up to 24 hours. Exclusively for NH Rewards members booking any NH Rewards flexible rate on our website.</strong></div>
                                </div>

                              </div>

                              </div>
                            <?php     }?>

                            <script>

                            $(".card-body").click(function() {
                              window.location=$(this).find("a").attr("href");

                            })

                            </script>

                        </div>
                       </div>
                    </div>
             </div>
              <div class="col-md-5" style="padding: 0px;margin-left:930px;background-color: #F3F9F0 ;height:480px;position:fixed;border: 2px solid #0eb25a;border-radius:10px;width:">
                  <div id="map"></div>
              </div>
          </div>
       </div>


       <script>

       var options = [];

       $( '.dropdown-menu a' ).on( 'click', function( event ) {

          var $target = $( event.currentTarget ),
              val = $target.attr( 'data-value' ),
              $inp = $target.find( 'input' ),
              idx;

          if ( ( idx = options.indexOf( val ) ) > -1 ) {
             options.splice( idx, 1 );
             setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
          } else {
             options.push( val );
             setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
          }

          $( event.target ).blur();

          console.log( options );
          return false;
       });

       </script>
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







<style>
#goButton{
width: 100px;
height:40px;
border: 0;
color: white;
font-weight: bold;
margin-left: 750px;
margin-bottom: 20px;
background-color: #da4980;
border: 2px solid #da4980;
border-radius: 10px;
box-shadow: 0 3px 6px 0 #da4980;
}

#goButton:hover{
background-color: #ff6747;
border: solid 1.5px #ff6747;
}
</style>







  <script>
  $('input[type="range"]').on('input', function() {

    var control = $(this),
      controlMin = control.attr('min'),
      controlMax = control.attr('max'),
      controlVal = control.val(),
      controlThumbWidth = control.data('thumbwidth');

    var range = controlMax - controlMin;

    var position = ((controlVal - controlMin) / range) * 100;
    var positionOffset = Math.round(controlThumbWidth * position / 100) - (controlThumbWidth / 2);
    var output = control.next('output');

    output
      .css('left', 'calc(' + position + '% - ' + positionOffset + 'px)')
      .text(controlVal);

  });

  </script>


  <?php include 'footer.php' ?>
