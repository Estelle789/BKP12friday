
<?php include 'header.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="public/img/bookingpetz_logo.png">
  <link rel="shortcut icon" href="public/images/bookingpetz_icon.ico" type="image/x-icon">
  <title>Bookingpetz.com</title>
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="resultPages/results.css">

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
  <script src="public/js/daterangepicker.min.js"></script>
  <script src="public/js/daterangepicker1.js"></script>
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




  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <?php
    $loc=$_REQUEST['location'];
    $date=$_REQUEST['searchDate'];
    $dog_s=$_REQUEST['dog_no_s'];
    $dog_m=$_REQUEST['dog_no_m'];
    $dog_l=$_REQUEST['dog_no_l'];
    $dog_xl=$_REQUEST['dog_no_xl'];
    $cat_no=$_REQUEST['cat_no'];
    $startdate=substr("$date",0,10);
    $enddate=substr("$date",12);
    $i=0;
    echo "  Current Results Based On:  ";
    echo "  location: $loc ";
    echo "  No_cats: $cat_no";
    echo " No_s_dogs: $dog_s";
    echo " No_m_dogs:$dog_m";
    echo " No_l_dogs:$dog_l";
    echo " No_xl_dogs:$dog_xl";

    echo " Selected date: $date ";
    echo " Start: $startdate ";
    echo " end:$enddate ";
      ?>

       <div class="container-fluid" style="margin-top:80px;padding-left: 0px;">
          <div class="row">
             <div class="col-md-5"  >
                  <div style="position:fixed;background-color: #F3F9F0 ;border: 2px solid #0eb25a;height:480px;margin-top:0px;width:320px;border-radius:10px">
                   <!-- // Services Type Select box end
                   <label for="zipCodedogNear" style="margin-bottom: 10px;margin-top: 10px;color:green;margin-left:90px"><font size="4" ><strong> Search Filter </strong> </font></label>
-->
                    <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-12">
                              <label style="margin-top:10px" for="zipCodedogNear"> Dog Boarding Near</label>
                               <input type="text" name="dogboardingnear" id="location" class="form-control" value="<?php echo $loc ?>">
                           </div>
                        </div>
                    </div>


                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>jQuery UI Datepicker - Default functionality</title>
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                    <link rel="stylesheet" href="/resources/demos/style.css">
                    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                    <script>
                    $( function() {
                    $( "#datepicker" ).datepicker();
                    } );

                    $( function() {
                    $( "#datepicker11" ).datepicker();
                    } );

                    </script>



 <div class="container-fluid">
     <div class="row">
        <div class="col-md-12">
           <label style="margin-top:10px" for="zipCodedogNear"> Duration </label>
            <p> Start Date: <input type="text" value="<?php echo $startdate ?>" id="datepicker"></p>
            <p> End Date : <input type="text" value="<?php echo $enddate ?>" id="datepicker11"></p>
        </div>
     </div>
 </div>


                               <!-- Services Type Select Box
                               <div class="container-fluid">
                                   <div class="row">
                                      <div class="col-md-12">
                                     <label for="service-type"> Pet </label>
                                     <select class="form-control" id="service-type" >
                                        <?php if ($pet=="cat"): ?>
                                          <option value=2> Cat </option>
                                         <option value=1> Dog </option>
                                     <?php endif; ?>
                                     <?php if ($pet=="dog"): ?>
                                         <option value=1> Dog </option>
                                         <option value=2> Cat </option>
                                    <?php endif; ?>
                                    <?php if ($pet== "Choose Pets"): ?>
                                        <option value=1> Dog </option>
                                        <option value=2> Cat </option>
                                   <?php endif; ?>
                                     </select>
                                   </div>
                                  </div>
                                </div> -->

<!----
                                <div class="container-fluid">
                                   <div class="row">
                                        <div class="col-md-12">
                                           <label style="margin-top:10px" for="daterangepicker1"> Duration </label>
                                               <input type="text" name="searchDate1" id="daterangepicker1" class="form-control" value="<?php echo $date ?>">
                                        </div>
                                   </div>
                                </div>

----->
                                <div class="container-fluid">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <label  style="margin-top:10px" for="price"> Price </label>
                                          <div class="range-control">
                                                  <input id="inputRange" type="range" min="50" max="250" step="5" value="150" data-thumbwidth="200">
                                                  <output style="margin-left:260px" name="rangeVal"><font size="3"> <strong>50</strong></font></output>
                                          </div>
                                       </div>
                                    </div>
                                </div>


<!---

                                <div class="container-fluid">
                                   <div class="row">
                                        <div class="col-md-12">
                                           <p>Drop off Time </p>
                                <div class="input-group clockpicker">
                                    <input type="text" class="form-control" value='<?php $dt= new DateTime();
                                                                                     echo $dt->format('H:i');?>'>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                              </div>
                          </div>
                          </div>

                                <script type="text/javascript">
                                 $('.clockpicker').clockpicker();
                                </script>

---->


<div class="container">
  <div class="row">
       <div class="col-lg-3">
         <label> Services</label>
     <div class="button-group">
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="border: 2px solid #da4980;
         box-shadow: 0 3px 6px 0 #da4980;width:280px;height:30px;margin-top:10px;margin-bottom:10px"> </button>
<ul class="dropdown-menu" style=" width:280px;margin-left: 15px" >
     <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp; Nail Clipping </a></li>
     <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp; Washing </a></li>
     <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp; Grooming </a></li>
     <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp; Requested</a></li>
</ul>
  </div>
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





             </div>
      <!----       <div class="container-fluid" style="margin-top:400px">
                <div class="row">
                     <div class="col-md-12">
                          <input type="submit" name="go" value=" Apply " id="apply">
                     </div>
                </div>
             </div>  ----->
             </div>



             <div class="col-md-5" >
                <div class="container-fluid" style="margin-top:10px;margin-left:-250px;width:600px">
                    <div class="row">
                        <div class="col-md-12">
                        <?php
                         include 'includes/dbh-inic.php';

                              $location = $_GET['location'];
                              $dropoff = $startdate;//$_GET['dropoff'];
                              $pickup =$enddate;// $_GET['pickup'];
                              $pets  =  "dog";//$_GET['pets'];
                              $p = ($pets=="cat")?"s.cat='cat'":"s.dog='dog'";
                              $ee="Select * from hotels as h";
                              $resultsOnhere = "SELECT h.* from hotels as h left join services as s on h.id = s.hotel_id left join hotelowneravailibility as ho on ho.hotel_id = s.hotel_id where ho.start <= '$startdate' and ho.end >= '$enddate' and h.country='$location' and $p  group BY h.id ";
                              $result_exec = $pdo->prepare($ee);
                              $result_exec->execute();
                              $check = $result_exec->fetchAll(PDO::FETCH_ASSOC);
                              foreach($check as $row){
                        ?>


                            <div class="card mb-5">
                              <a href="book.php">  <div type="button" class="card-body"  id="hh" style=" background-color: #F3F9F0 ;border: 2px solid #0eb25a; height: 250px" >
                                  <div class="container-fluid">
                                     <div class="row">
                                        <div class="col-md-4">
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
                                        <div class="col-md-8" >
                                           <div class="row">
                                              <div class="col-md-9 resultName" style="width:200px"> <font size="5" ><strong><?php echo $row['id']; ?>. <?php echo $row['hotel_name'];?></strong> </font>
                                               <font size="3" style="color:blue" ><strong> <br> <?php echo $row['address'];?> </strong>  </br> </font>
                                              </div>
                                              <div class="col-md-3 resultId" style=" color:yellow" >
                                                <div> <font size="6" >  <strong> ***** </strong></font></div>
                                                <div style="padding-top:20px;color:red"> <font size="3"  >  <strong> Price: 100 € </strong></font></div>
                                              </div>
                                           </div>

                                        </div>



                                     </div>


                                </div>

                                <div class="row">
                                  <div style="margin-top:30px;padding-left:30px;
                                  padding-bottom: 10px; color: green"><strong> <font size="3" color="red"><strong>Services: </strong></font>Washing, Nail clipping, Grooming etc  </strong></div>
                               </div>
                                 <div class="row">
                                   <div style="color:blue;padding-left:30px;padding-bottom:10px;padding-right:30px"><font size="3" color="red"><strong>Description: </strong></font><strong><?php echo $row['description'];?></strong></div>
                                </div>
                              </div> </a>

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



       <style>
           #hh:hover{
             margin-top: 30px;
             margin-bottom: 30px;
             cursor:pointer;
           opacity: 1.5;
           shadow:green;
           position:inherit;
           transform: scaleY(1.3);
       }
       #mm:hover{
       opacity: 0.8;
       transform: scale(1.1);
   }
       </style>


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
#apply{
width: 100px;
margin-left: 185px;
border: 0;
color: white;
font-weight: bold;
background-color: #da4980;
border: 2px solid #da4980;
border-radius: 10px;
box-shadow: 0 3px 6px 0 #da4980;
}

#apply:hover{
background-color: #ff6747;
border: solid 1.5px #ff6747;
}

</style>








<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }

 $('#location').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

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





  		<script>

  		function openDropdowndog() {
  		  document.getElementById("Dropdowndog").classList.toggle("show");
  		  document.getElementById("Dropdowndog").classList.toggle("hide");

  		}

  		$(document).ready(function() {
  		  $(".btn-left-dogs_s").on("click", function() {
  		    if ($(".dogsNumbers").val() > 0) {
  		      $(".dogsNumbers").val(parseInt($(".dogsNumbers").val()) - 1);
  		    }
  		  });
  		  $(".btn-right-dogs_s").on("click", function() {
  		    $(".dogsNumbers").val(parseInt($(".dogsNumbers").val()) + 1);
  		  });

  		  $(".btn-left-dogs_m").on("click", function() {
  		    if ($(".dogsNumberm").val() > 0) {
  		      $(".dogsNumberm").val(parseInt($(".dogsNumberm").val()) - 1);
  		    }
  		  });
  		  $(".btn-right-dogs_m").on("click", function() {
  		    $(".dogsNumberm").val(parseInt($(".dogsNumberm").val()) + 1);
  		  });

  		  $(".btn-left-dogs_l").on("click", function() {
  		    if ($(".dogsNumberl").val() > 0) {
  		      $(".dogsNumberl").val(parseInt($(".dogsNumberl").val()) - 1);
  		    }
  		  });
  		  $(".btn-right-dogs_l").on("click", function() {
  		    $(".dogsNumberl").val(parseInt($(".dogsNumberl").val()) + 1);
  		  });

  		  $(".btn-left-dogs_xl").on("click", function() {
  		    if ($(".dogsNumberxl").val() > 0) {
  		      $(".dogsNumberxl").val(parseInt($(".dogsNumberxl").val()) - 1);
  		    }
  		  });

  		  $(".btn-right-dogs_xl").on("click", function() {
  		    $(".dogsNumberxl").val(parseInt($(".dogsNumberxl").val()) + 1);
  		  });
  					  $(".btn-left-cats").on("click", function() {
  					    if ($(".catsNumber").val() > 0) {
  					      $(".catsNumber").val(parseInt($(".catsNumber").val()) - 1);
  					    }
  					  });

  					  $(".btn-right-cats").on("click", function() {
  					    $(".catsNumber").val(parseInt($(".catsNumber").val()) + 1);
  					  });

  		});

  		</script>
























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
