<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bookingpetz.com</title>
	<link rel="shortcut icon" href="public/images/bookingpetz_icon.ico" type="image/bookingpetz-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/test_css.css">   
	<link rel="stylesheet" href="boarding.css">
    <!-- that's controlling the condition of input box just check one -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/popper.min.js"></script>
	<script src="public/datepicker_js2.js"></script>
	<script src="public/datepicker_js1.js"></script>
	<script src="public/js/custom.js"></script>
	<style>
	 #map{
		 width:100%;
		  height:750px;
  	 
	   }
	   .google_maps{
		padding-right:0% !important;
		margin-right:0% !important;
	   }
	   .service_selecting{
		   border-color: #63AA8A;
		   border-width:2px;
	   }
	   .how-many{
        padding-right:35px;
		padding-left:35px;
	   }
       .maps_shown{
           width:100% !important;
           height:30% !important;
           overflow:hidden !important;
       }
	</style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 px-1 "><!-- Fixed Left Side Bar col-md-3 -->
            <div class="py-2 sticky-top flex-grow-1">
                <div class="nav flex-sm-column">
                 <h6>Service type</h6>
				 <!-- Service Type selection on started  here -->
				<select class="form-control form-control-lg service_selecting" >
				<option value="dogBoarding">Dog Boarding</option>
				<option value="houseSitting">House Sitting</option>
				<option value="dorpIn-visits">Drop-In Visits</option>
				<option value="doggyDaycare">Doggy Daycare</option>
				<option value="dogWalking">Dog Walking</option>
				</select>
				<!-- // Service Type selection end on here -->
				<!-- Location selection place -->
				<h6>Dog Boarding near</h6>
				<input type="text" name="dogBoardingaddress" class="form-control" placeholder="Zip code or Address">
				<!-- // Location selection end here -->
				<!-- Dates selection start here -->
			      <h6>Dates</h6>
				 <div class="container-fluid selection_days"> <!-- Date selection Container Started here -->
				  <div class="row selection_days"> <!-- Date selection Row start here -->
				   <div class="col-md-6 selection_days">
				   <input type="text" class=" form-control form-control-lg" name="dropoff" placeholder="Drop off" id="datepicker1">
				   </div>
				   <div class="col-md-6">
				   <input type="text" class="form-control form-control-lg" name="pickup" placeholder="Pick up" id="datepicker2">
				   </div>
				  </div><!-- // Date selection row end here -->
				 </div><!-- // Date selection container end here -->
				 <!-- PET TYPE(S) SELECTION -->
				  <h6>Pet type(s)</h6>
				 <div class="container-fluid"><!-- Container-fluid Start here -->
				 <div id="radiocbanimal" onclick="search(event)"><!-- We are setting if checkbox is checked then other checkboxs set uncheck -->
				  <div class="row"><!-- Row Start here -->
				   <div class="col-md-4">
				   <span style="margin-left:5px !important;">
				   <input type="checkbox" name="dog" id="cfan1" value="Dog" style="margin-left:5px;">	 Dog
				   </span>
				   </div>
				   <div class="col-md-4">
				   <span>
				    <input type="checkbox" name="cat" id="cfan2" value="Cat"> Cat
				   </span>
				   </div>
				   </div>
				  </div><!-- // Row end here -->
				   <!-- // PET TYPE(S) SELECTION END HERE -->
                 <div class="row">
				 <h6>Breed(s)</h6>
				 	 <!-- Dog races and races type options start here -->
	 <select class="form-control form-control-lg service_selecting breeding" name="breed">
        <option value="">Breed</option>
        <option value="Affenpinscher">Affenpinscher</option>
        <option value="Afghan Hound">Afghan Hound</option>
        <option value="Airedale Terrier">Airedale Terrier</option>
        <option value="Akita">Akita</option>
        <option value="Alaskan Klee Kai">Alaskan Klee Kai</option>
        <option value="Alaskan Malamute">Alaskan Malamute</option>
        <option value="American Bulldog">American Bulldog</option>
        <option value="American English Coonhound">American English Coonhound</option>
        <option value="American Eskimo Dog">American Eskimo Dog</option>
        <option value="American Foxhound">American Foxhound</option>
        <option value="American Pit Bull Terrier">American Pit Bull Terrier</option>
        <option value="American Staffordshire Terrier">American Staffordshire Terrier</option>
        <option value="American Water Spaniel">American Water Spaniel</option>
        <option value="Anatolian Shepherd Dog">Anatolian Shepherd Dog</option>
        <option value="Appenzeller Sennenhunde">Appenzeller Sennenhunde</option>
        <option value="Australian Cattle Dog">Australian Cattle Dog</option>
        <option value="Australian Kelpie">Australian Kelpie</option>
        <option value="Australian Shepherd">Australian Shepherd</option>
        <option value="Australian Terrier">Australian Terrier</option>
        <option value="Azawakh">Azawakh</option>
        <option value="Barbet">Barbet</option>
        <option value="Basenji">Basenji</option>
        <option value="Basset Hound">Basset Hound</option>
        <option value="Beagle">Beagle</option>
        <option value="Bearded Collie">Bearded Collie</option>
        <option value="Bedlington Terrier">Bedlington Terrier</option>
        <option value="Belgian Malinois">Belgian Malinois</option>
        <option value="Belgian Sheepdog">Belgian Sheepdog</option>
        <option value="Belgian Tervuren">Belgian Tervuren</option>
        <option value="Berger Picard">Berger Picard</option>
        <option value="Bernedoodle">Bernedoodle</option>
        <option value="Bernese Mountain Dog">Bernese Mountain Dog</option>
        <option value="Bichon Frise">Bichon Frise</option>
        <option value="Black and Tan Coonhound">Black and Tan Coonhound</option>
        <option value="Black Mouth Cur">Black Mouth Cur</option>
        <option value="Black Russian Terrier">Black Russian Terrier</option>
        <option value="Bloodhound">Bloodhound</option>
        <option value="Blue Lacy">Blue Lacy</option>
        <option value="Bluetick Coonhound">Bluetick Coonhound</option>
        <option value="Boerboel">Boerboel</option>
        <option value="Bolognese">Bolognese</option>
        <option value="Border Collie">Border Collie</option>
        <option value="Border Terrier">Border Terrier</option>
        <option value="Borzoi">Borzoi</option>
        <option value="Boston Terrier">Boston Terrier</option>
        <option value="Bouvier des Flandres">Bouvier des Flandres</option>
        <option value="Boxer">Boxer</option>
        <option value="Boykin Spaniel">Boykin Spaniel</option>
        <option value="Bracco Italiano">Bracco Italiano</option>
        <option value="Briard">Briard</option>
        <option value="Brittany">Brittany</option>
        <option value="Brussels Griffon">Brussels Griffon</option>
        <option value="Bull Terrier">Bull Terrier</option>
        <option value="Bulldog">Bulldog</option>
        <option value="Bullmastiff">Bullmastiff</option>
        <option value="Cairn Terrier">Cairn Terrier</option>
        <option value="Canaan Dog">Canaan Dog</option>
        <option value="Cane Corso">Cane Corso</option>
        <option value="Cardigan Welsh Corgi">Cardigan Welsh Corgi</option>
        <option value="Catahoula Leopard Dog">Catahoula Leopard Dog</option>
        <option value="Caucasian Shepherd Dog">Caucasian Shepherd Dog</option>
        <option value="Cavalier King Charles Spaniel">Cavalier King Charles Spaniel</option>
        <option value="Cesky Terrier">Cesky Terrier</option>
        <option value="Chesapeake Bay Retriever">Chesapeake Bay Retriever</option>
        <option value="Chihuahua">Chihuahua</option>
        <option value="Chinese Crested">Chinese Crested</option>
        <option value="Chinese Shar-Pei">Chinese Shar-Pei</option>
        <option value="Chinook">Chinook</option>
        <option value="Chow Chow">Chow Chow</option>
        <option value="Clumber Spaniel">Clumber Spaniel</option>
        <option value="Cockapoo">Cockapoo</option>
        <option value="Cocker Spaniel">Cocker Spaniel</option>
        <option value="Collie">Collie</option>
        <option value="Coton de Tulear">Coton de Tulear</option>
        <option value="Curly-Coated Retriever">Curly-Coated Retriever</option>
        <option value="Dachshund">Dachshund</option>
        <option value="Dalmatian">Dalmatian</option>
        <option value="Dandie Dinmont Terrier">Dandie Dinmont Terrier</option>
        <option value="Doberman Pinscher">Doberman Pinscher</option>
        <option value="Dogo Argentino">Dogo Argentino</option>
        <option value="Dogue de Bordeaux">Dogue de Bordeaux</option>
        <option value="Dutch Shepherd">Dutch Shepherd</option>
        <option value="English Cocker Spaniel">English Cocker Spaniel</option>
        <option value="English Foxhound">English Foxhound</option>
        <option value="English Setter">English Setter</option>
        <option value="English Springer Spaniel">English Springer Spaniel</option>
        <option value="English Toy Spaniel">English Toy Spaniel</option>
        <option value="Entlebucher Mountain Dog">Entlebucher Mountain Dog</option>
        <option value="Field Spaniel">Field Spaniel</option>
        <option value="Finnish Lapphund">Finnish Lapphund</option>
        <option value="Finnish Spitz">Finnish Spitz</option>
        <option value="Flat-Coated Retriever">Flat-Coated Retriever</option>
        <option value="Fox Terrier">Fox Terrier</option>
        <option value="French Bulldog">French Bulldog</option>
        <option value="German Pinscher">German Pinscher</option>
        <option value="German Shepherd Dog">German Shepherd Dog</option>
        <option value="German Shorthaired Pointer">German Shorthaired Pointer</option>
        <option value="German Wirehaired Pointer">German Wirehaired Pointer</option>
        <option value="Giant Schnauzer">Giant Schnauzer</option>
        <option value="Glen of Imaal Terrier">Glen of Imaal Terrier</option>
        <option value="Goldador">Goldador</option>
        <option value="Golden Retriever">Golden Retriever</option>
        <option value="Goldendoodle">Goldendoodle</option>
        <option value="Gordon Setter">Gordon Setter</option>
        <option value="Great Dane">Great Dane</option>
        <option value="Great Pyrenees">Great Pyrenees</option>
        <option value="Greater Swiss Mountain Dog">Greater Swiss Mountain Dog</option>
        <option value="Greyhound">Greyhound</option>
        <option value="Harrier">Harrier</option>
        <option value="Havanese">Havanese</option>
        <option value="Ibizan Hound">Ibizan Hound</option>
        <option value="Icelandic Sheepdog">Icelandic Sheepdog</option>
        <option value="Irish Red and White Setter">Irish Red and White Setter</option>
        <option value="Irish Setter">Irish Setter</option>
        <option value="Irish Terrier">Irish Terrier</option>
        <option value="Irish Water Spaniel">Irish Water Spaniel</option>
        <option value="Irish Wolfhound">Irish Wolfhound</option>
        <option value="Italian Greyhound">Italian Greyhound</option>
        <option value="Jack Russell Terrier">Jack Russell Terrier</option>
        <option value="Japanese Chin">Japanese Chin</option>
        <option value="Japanese Spitz">Japanese Spitz</option>
        <option value="Karelian Bear Dog">Karelian Bear Dog</option>
        <option value="Keeshond">Keeshond</option>
        <option value="Kerry Blue Terrier">Kerry Blue Terrier</option>
        <option value="Komondor">Komondor</option>
        <option value="Kooikerhondje">Kooikerhondje</option>
        <option value="Korean Jindo Dog">Korean Jindo Dog</option>
        <option value="Kuvasz">Kuvasz</option>
        <option value="Labradoodle">Labradoodle</option>
        <option value="Labrador Retriever">Labrador Retriever</option>
        <option value="Lagotto Romagnolo">Lagotto Romagnolo</option>
        <option value="Lakeland Terrier">Lakeland Terrier</option>
        <option value="Lancashire Heeler">Lancashire Heeler</option>
        <option value="Leonberger">Leonberger</option>
        <option value="Lhasa Apso">Lhasa Apso</option>
        <option value="Lowchen">Lowchen</option>
        <option value="Maltese">Maltese</option>
        <option value="Maltese Shih Tzu">Maltese Shih Tzu</option>
        <option value="Maltipoo">Maltipoo</option>
        <option value="Manchester Terrier">Manchester Terrier</option>
        <option value="Mastiff">Mastiff</option>
        <option value="Miniature Pinscher">Miniature Pinscher</option>
        <option value="Miniature Schnauzer">Miniature Schnauzer</option>
        <option value="Mudi">Mudi</option>
        <option value="Mutt">Mutt</option>
        <option value="Neapolitan Mastiff">Neapolitan Mastiff</option>
        <option value="Newfoundland">Newfoundland</option>
        <option value="Norfolk Terrier">Norfolk Terrier</option>
        <option value="Norwegian Buhund">Norwegian Buhund</option>
        <option value="Norwegian Elkhound">Norwegian Elkhound</option>
        <option value="Norwegian Lundehund">Norwegian Lundehund</option>
        <option value="Norwich Terrier">Norwich Terrier</option>
        <option value="Nova Scotia Duck Tolling Retriever">Nova Scotia Duck Tolling Retriever</option>
        <option value="Old English Sheepdog">Old English Sheepdog</option>
        <option value="Otterhound">Otterhound</option>
        <option value="Papillon">Papillon</option>
        <option value="Peekapoo">Peekapoo</option>
        <option value="Pekingese">Pekingese</option>
        <option value="Pembroke Welsh Corgi">Pembroke Welsh Corgi</option>
        <option value="Petit Basset Griffon Vendeen">Petit Basset Griffon Vendeen</option>
        <option value="Pharaoh Hound">Pharaoh Hound</option>
        <option value="Plott">Plott</option>
        <option value="Pocket Beagle">Pocket Beagle</option>
        <option value="Pointer">Pointer</option>
        <option value="Polish Lowland Sheepdog">Polish Lowland Sheepdog</option>
        <option value="Pomeranian">Pomeranian</option>
        <option value="Pomsky">Pomsky</option>
        <option value="Poodle">Poodle</option>
        <option value="Portuguese Water Dog">Portuguese Water Dog</option>
        <option value="Pug">Pug</option>
        <option value="Puggle">Puggle</option>
        <option value="Puli">Puli</option>
        <option value="Pyrenean Shepherd">Pyrenean Shepherd</option>
        <option value="Rat Terrier">Rat Terrier</option>
        <option value="Redbone Coonhound">Redbone Coonhound</option>
        <option value="Rhodesian Ridgeback">Rhodesian Ridgeback</option>
        <option value="Rottweiler">Rottweiler</option>
        <option value="Saint Bernard">Saint Bernard</option>
        <option value="Saluki">Saluki</option>
        <option value="Samoyed">Samoyed</option>
        <option value="Schipperke">Schipperke</option>
        <option value="Schnoodle">Schnoodle</option>
        <option value="Scottish Deerhound">Scottish Deerhound</option>
        <option value="Scottish Terrier">Scottish Terrier</option>
        <option value="Sealyham Terrier">Sealyham Terrier</option>
        <option value="Shetland Sheepdog">Shetland Sheepdog</option>
        <option value="Shiba Inu">Shiba Inu</option>
        <option value="Shih Tzu">Shih Tzu</option>
        <option value="Siberian Husky">Siberian Husky</option>
        <option value="Silken Windhound">Silken Windhound</option>
        <option value="Silky Terrier">Silky Terrier</option>
        <option value="Skye Terrier">Skye Terrier</option>
        <option value="Sloughi">Sloughi</option>
        <option value="Small Munsterlander Pointer">Small Munsterlander Pointer</option>
        <option value="Soft Coated Wheaten Terrier">Soft Coated Wheaten Terrier</option>
        <option value="Stabyhoun">Stabyhoun</option>
        <option value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option>
        <option value="Standard Schnauzer">Standard Schnauzer</option>
        <option value="Sussex Spaniel">Sussex Spaniel</option>
        <option value="Swedish Vallhund">Swedish Vallhund</option>
        <option value="Tibetan Mastiff">Tibetan Mastiff</option>
        <option value="Tibetan Spaniel">Tibetan Spaniel</option>
        <option value="Tibetan Terrier">Tibetan Terrier</option>
        <option value="Toy Fox Terrier">Toy Fox Terrier</option>
        <option value="Treeing Tennessee Brindle">Treeing Tennessee Brindle</option>
        <option value="Treeing Walker Coonhound">Treeing Walker Coonhound</option>
        <option value="Vizsla">Vizsla</option>
        <option value="Weimaraner">Weimaraner</option>
        <option value="Welsh Springer Spaniel">Welsh Springer Spaniel</option>
        <option value="Welsh Terrier">Welsh Terrier</option>
        <option value="West Highland White Terrier">West Highland White Terrier</option>
        <option value="Whippet">Whippet</option>
        <option value="Wirehaired Pointing Griffon">Wirehaired Pointing Griffon</option>
        <option value="Xoloitzcuintli">Xoloitzcuintli</option>
        <option value="Yorkipoo">Yorkipoo</option>
        <option value="Yorkshire Terrier">Yorkshire Terrier</option>
    </select> 
				 </div><!-- // last row end here -->
				  </div><!-- // Container-fluid end here -->
				  <!-- // Dog breed selection end here -->
				<!--// Dog weight selection start here -->
					<div class="container"><!-- Dog weight selection container start here -->
					<div class="row"><!-- Dog weight seelction row start here -->
				
					<h6>Dog size </h6>
					<div class="input-group">
					<label class="btn btn-outline-success"><input type="checkbox" value="small" id="smallx" name="small" >Small<br>(0-10 kg)</label>
					<label class="btn btn-outline-success"><input type="checkbox" value="medium" name="medium">Medium<br>(11-25 kg)</label>
					<label class="btn btn-outline-success"><input type="checkbox" value="large" name="large">Large<br>(26-45 kg)</label>
				    <label class="btn btn-outline-success"><input type="checkbox" value="Xlarge" name="Xlarge">Grand<br>(45 +)</label>
				  </div>
			   </div><!--// Dog weight row end here -->
		      </div><!-- // Dog weight selection container end here -->
			<div class="container">
			  <div class="row">
			  
			  <div id="radiocbt" onclick="howMany(event)">
			  <h6>How many pets ?</h6>
				<label class="btn btn-outline-danger how-many"><input type="checkbox" id="ct1" name="dogs[]" value="1">1</label>
				<label class="btn btn-success how-many"><input type="checkbox" id="ct2" name="dogs[]" value="2">2</label>
				 <label class="btn btn-success how-many"><input type="checkbox" id="ct3" name="dogs[]" value="3">3</label>
					
				</div>
			  </div>
			</div>	
                </div><!-- // Nav flex-sm-column end here -->
            </div><!-- //py-2 sticky-top flex-grow-1  end here -->
        </div><!-- // Col-sm-3 px-1 end here -->
    <div class="col-md-6" style="margin-top:10px;">
    <?php 
      include('includes/dbh-inic.php');
       if(isset($_POST['search'])){
        $dog = $_POST['dog'];
        $cat = $_POST['cat'];
        $dropoff= $_POST['dropoff'];
        $pickup = $_POST['pickup'];
         
        $searchQuery = "SELECT * FROM  hotels as h inner join  services as s on h.id = s.hotel_id inner join hotelowneravailibility as ho on h.id=ho.hotel_id where ho.start='$dropoff' and ho.end='$pickup' and  s.animal='$dog' or s.animal='$cat'" ;
        $results = $pdo->prepare($searchQuery);
        $results->execute();
        $resultsChekc = $results->fetchAll(PDO::FETCH_ASSOC);
       foreach($resultsChekc as $row){
           
      
           ?> 
     <div class="card">
       <div class="card-header"> <?php echo $row['hotel_name'] .  $row['service'];?></div>
       <div class="container">
          <div class="row">
           <div class="col-md-4">
            <img src="public/images/cat2.jpg" alt="" style="width:75%; margin-top:5px; margin-bottom:5px;">
           </div>
          </div>
        </div>  
        <p>x</p>
     </div>
     <?php  }
       }?>
	</div>
	<div class="col-md-4 google_maps">
	<div id="map" style="width:100% !important;" class="maps_shown"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
function search(e){
    e = e || event;
    var ct= e.srcElement || e.target;
    if (ct.type !== 'checkbox') {return true;}
    var ctxs = document.getElementById('radiocbanimal').getElementsByTagName('input'), i=ctxs.length;
     while(i--) {
         if (ctxs[i].type && ctxs[i].type == 'checkbox' && ctxs[i].id !== ct.id) {
         ctxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function howMany(e){
    e = e || event;
    var cfan= e.srcElement || e.target;
    if (cfan.type !== 'checkbox') {return true;}
    var cfanxs = document.getElementById('radiocbt').getElementsByTagName('input'), i=cfanxs.length;
     while(i--) {
         if (cfanxs[i].type && cfanxs[i].type == 'checkbox' && cfanxs[i].id !== cfan.id) {
          cfanxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }

    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQKNhcusT1tYjpsvaJP3dTsz7hkLfFRWQ&callback=initMap">
    </script>
	</div>
    </div>
</div>
	          
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="public/js/moment.min.js"></script>
</body>
</html>
