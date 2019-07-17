<?php include 'header.php'; ?>

<link rel="stylesheet" href="public/css/indexStylesheet.css">
	<div class="center" id="indexForm">
		<meta name="viewport" content="width=device-width">
		<form action="results.php" method="GET">
			<div class="input-group">
				<input type="text" name="location" placeholder="Where?" id="whereForm">
				<input type="text" name="searchDate" id="daterangepicker" placeholder="Duration">
										<div class="row">
											 <div class="col-md-12" style="height:50px">
												 <div class="form-group">
															 <div onclick="openDropdowndog()" class="dropbtn center"> Select Pets </div>
																 <div id="Dropdowndog" class="dropdown-content mr-3" style="margin-top:5px; width:275px">
																	 <div class="stepper-input">
																			 <img src="public/img/cat.svg" alt="cat" id="petIcon">
																			 <p>Cats</p>
																				<div class="btn btn-left-cats align-middle" style="padding-left:40px">-</div>
																						<input type="text" value="0" name="cat_no" class="catsNumber"/>
																				 <div class="btn btn-right-cats">+</div>
																	 </div>

																	<div class="stepper-input">
																		 <img src="public/img/dog.svg" alt="dog" id="petIcon">
																		 <p> small </p>
																		 <div class="btn btn-left-dogs_s align-middle" style="padding-left:30px">-</div>
																						<input type="text" value="0" name="dog_no_s" class="dogsNumbers" id="dogno"/>
																					<div class="btn btn-right-dogs_s">+</div>
																	</div>
																	<div class="stepper-input">
																			<img src="public/img/dog.svg" alt="dog" id="petIcon">
																			<p style="margin-right:0px"> medium </p>
																			<div class="btn btn-left-dogs_m align-middle" >-</div>
																						 <input type="text" value="0"  name="dog_no_m"  class="dogsNumberm" id="dogno"/>
																				<div class="btn btn-right-dogs_m">+</div>
																	 </div>
																	 <div class="stepper-input">
																			 <img src="public/img/dog.svg" alt="dog" id="petIcon">
																			 <p> large </p>
																			 <div class="btn btn-left-dogs_l align-middle" style="padding-left:35px">-</div>
																							<input type="text" value="0" name="dog_no_l"  class="dogsNumberl" id="dogno"/>
																				 <div class="btn btn-right-dogs_l">+</div>
																		</div>
																		<div class="stepper-input">
																				<img src="public/img/dog.svg" alt="dog" id="petIcon">
																				<p> X large </p>
																				<div class="btn btn-left-dogs_xl align-middle" style="padding-left:30px">-</div>
																							 <input type="text" value="0" name="dog_no_xl"  class="dogsNumberxl" id="dogno"/>
																					<div class="btn btn-right-dogs_xl">+</div>
																		 </div>
												 </div>
										</div>
									 </div>
								 </div>

				<input type="submit" name="go" value="GO!" id="goButton">
			</div>
		</form>
	</div>


	<div class="center" id="pawsBanner">
		<img src="public/img/paws_banner.png" alt="paws">
	</div>
	<div id="curveBanner">
		<img src="public/img/curve_banner.png" alt="decoration curve">
	</div>

	<script>
		$('#datepicker').datepicker();
		$('#datepicker1').datepicker();
	</script>


	<div id="ourBest"  class="container-fluid" style="margin-top:39px">
			<div class="row">
				<div class="col-4"><h5>Our Best</h5></div>
				<div class="col-4"></div>
				<div class="col-4"></div>
			</div>
			<div class="row">
				<a class="col-4" href=""><img src="public/img/im1.jpg" alt=""></a>
				<a class="col-4" href=""><img src="public/img/hotel.jpg" alt=""></a>
				<a class="col-4" href=""><img src="public/img/im3.jpg" alt=""></a>
			</div>
			<div class="row">
				<a class="col-4" href=""><p>Amsterdam pet hotel</p></a>
				<a class="col-4" href=""><p>Amsterdam pet hotel</p></a>
				<a class="col-4" href=""><p>Amsterdam pet hotel</p></a>
			</div>
			<div class="row">
				<a class="col-4" href=""><img src="public/img/im4.jpg" alt=""></a>
				<a class="col-4" href=""><img src="public/img/im5.jpg" alt=""></a>
				<a class="col-4" href=""><img src="public/img/im6.jpg" alt=""></a>
			</div>
			<div class="row">
				<a class="col-4" href=""><p>Amsterdam pet hotel</p></a>
				<a class="col-4" href=""><p>Amsterdam pet hotel</p></a>
				<a class="col-4" href=""><p>Amsterdam pet hotel</p></a>
			</div>
		</div>



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

				<style>

			 /* DROPDOWN*/
			 .dropbtn {
				 height: 50px;
				 width: 280px;
				 border: 2px solid #0eb25a;
				 margin: 0px;
				 text-align: center;
				 box-shadow: 0 3px 6px 0 #0eb25a;
				 color: #757579;
				 cursor: pointer;
				 background-color: white;

			 }


			 .dropdown {
				 position:inherit;
				 display:block;

			 }

			 .dropdown-content {

				 display: none;
			 position:absolute;
				 font-weight: bold;
    padding:10px;
				 margin-top: 0px;
				 border-radius: 11px;
				 box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
				 right: 0;
			 }



			 .dropdown a:hover {
					display: block;
				 background-color: #ddd;
			 }

			 .show {
				 display: block;
			 }


			 .stepper-input {
				 display: flex;
				 justify-content:space-between;
				 background-color: white;
				 font-weight: bold;
			 }
			 .stepper-input p {
				 margin-right: 0px;
				 margin-top: 16px;
				 margin-bottom: 10px;
			 }




			.btn-left-cats,
			.btn-left-dogs_s,
			.btn-left-dogs_m,
			.btn-left-dogs_l,
			.btn-left-dogs_xl,
			.btn-right-cats,
			.btn-right-dogs_s,
			.btn-right-dogs_m,
			.btn-right-dogs_l,
			.btn-right-dogs_xl{
				 cursor: pointer;
				 padding-left: 10px;
				 padding-right: 10px;
				 background-color: white;
				 border: none;
				 font-weight: bold;
				 font-size: 30px !important;
			 }


			 .btn-left-cats,
			 .btn-left-dogs_s,
			 .btn-left-dogs_m,
			 .btn-left-dogs_l,
			 .btn-left-dogs_xl,
			 .btn-right-cats,
			 .btn-right-dogs_s,
			 .btn-right-dogs_m,
			 .btn-right-dogs_l,
			 .btn-right-dogs_xl
			 :focus {
				 outline:inherit;
			 }



			 .dogsNumber,
			 .dogsNumbers,
			 .dogsNumberm,
			 .dogsNumberl,
			 .dogsNumberxl,
			 .catsNumber {
				 text-align: center;
				 border: none;
				 width: 40px;
				 font-weight: bold;
			 }

			 .dogsNumber:focus,
			 .dogsNumbers:focus,
			 .dogsNumberm:focus,
			 .dogsNumberl:focus,
			 .dogsNumberxl:focus,
			 .catsNumber:focus {
				 outline: none;
			 }
			 img#petIcon{
				 width: 25px;
				 margin-right: 5px;
				 margin-left: 10px;
			 }


 </style>



<?php include 'footer.php' ?>
