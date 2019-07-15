<?php include('header.php');?>     
<?php  
    $id=$_GET['id'];
    $size=$_GET['size'];
    $services=$_GET['services'];
        try{
            include('includes/dbh-inic.php');
                $sql="SELECT * from hotels_pending inner join services_pending on hotels_pending.id=services_pending.hotel_id where services_pending.hotel_id='".$id."' and services_pending.size='".$size."' and services_pending.services_name='".$services."'";
                $result=$pdo->prepare($sql);
                $result->execute();
                $resultCheck=$result->fetchAll(PDO::FETCH_ASSOC);
                foreach($resultCheck as $r){
  ?>
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-12" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="public/images/petHotel1.jpg" style="width:750px; !important; height:600px; !important;" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="public/images/petHotel1.jpg"style="width:100% !important;" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="public/images/petHotel1.jpg"style="width:100% !important;" alt="Third slide">
                </div>
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

          </div><!-- // end of col-md-12 -->
         </div><!-- // end of row -->
         <style>
        .hotel_details{
            margin-top:10px ;
            border:none;
        }
         </style>
             <div class="row">
                <div class="col-md-10 offset-md-1">
                 <div class="card hotel_details">
                     <div class="card-header"><p><?php echo $r['name']?></p></div>
                     <div class="card-body">
                       <p>Hotel Email address: <a href="<?php echo $r['website'];?>"><?php echo $r['website'];?></a>  </p>
                        <div class="description">
                            <p>    
                              Description:  <?php echo $r['description'];?>
                            </p>
                        </div>
                    <div class="opening_hours">
                        <p>
                         Opening Hours:    <?php echo $r['opening_hours'];?>
                        </p>
                    </div>
                    <div class="association">
                        <p> 
                         Association:   <?php echo $r['association'];?>
                        </p>
                    </div>
                     <div class="certification">
                         <p>
                         Certification : <?php echo $r['certification'];?>
                         </p>
                     </div>
                     <div class="phone">
                         <p>
                            Phone: <?php echo $r['phone'];?>
                         </p>
                     </div>
                     <div class="email">
                         <p>
                             Hotel Emails: <?php echo $r['email'];?>
                         </p>
                     </div>
                     <div class="contact">
                         <p>
                             Contact Person: <?php echo $r['contact'];?>
                         </p>
                     </div>
                     <div class="country">
                         <p>
                             Country: <?php echo $r['country'];?>
                         </p>
                     </div>
                     <div class="city">
                         <p>
                             City: <?php echo $r['city'];?>
                         </p>
                     </div>
                     <div class="address">
                         <p>
                             Address of Hotel: <?php echo $r['address'];?>
                         </p>
                     </div>
                     <div class="post_code">
                         <p>
                             Post Code Of hotel: <?php echo $r['post_code'];?>
                         </p>
                     </div>
                     </div>
                 </div><!-- end of card -->
                 <div class="card hotel_details">
                    <div class="card-header"><h4>This hotel services</h4></div>
                     <div class="card-body">
                        <?php echo $r['services_name'];?> for <?php  if(!empty($r['size'])){echo "small"; }else{echo "";}?> and price <?php echo $r['price'];?><br>
                        <?php echo $r['services_name'];?> for <?php  if(!empty($r['medium'])){echo "medium"; }else{echo "";}?> and price <?php echo $r['medium_price'];?><br>
                        <?php echo $r['services_name'];?> for <?php  if(!empty($r['large'])){echo "Large"; }else{echo "";}?> and price <?php echo $r['large_price'];?><br>
                     </div>
                 </div>

                </div><!-- end of col-md-10-->
            </div><!--end of row-->
            <div class="row">
                <div class="col-md-5"> 
                    <a href="index.php" class="btn btn-outline-primary"> Turn back</a>
                </div>
            </div>
        </div><!-- // end of Container -->

<?php        }
     } catch(PDOException $e){
         echo $e->getMessage();
       
}?>


<?php include('footer.php');?>