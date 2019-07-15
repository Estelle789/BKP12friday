<?php require("header.php");?>

<script type="text/javascript" src="checked_functionalitiy.js"></script>
<form action="boarding_results.php" method="POST">
    <div class="search" style="background-color:#176f54; width:100% !important;">
        <div id="div_form">

            <fieldset>
                <div class="data_input_container">
                    <!-- location input area -->
                    <div class="address_div">
                        <input type="text" name="address" placeholder="City, Address or Postal Code" id="address_input">
                        <img src="public/images/target.png" id="get_location_icon" title="Search near you"
                            onclick="getLocation()">
                        <input type="text" name="start_latitude" id="startLat">
                        <input type="text" name="start_longitude" id="startLon">
                    </div>
                    <!--availibility area -->
                    <div class="calendars_div">
                        <div class="sub_calendar_div"><input type="text" name="dropoff" placeholder="Drop off"
                                id="datepicker1"></div>
                        <div class="sub_calendar_div"><input type="text" name="pickup" placeholder="Pick up"
                                id="datepicker2"></div>
                    </div>
                    <!--dog and cat input box choose-->
                    <div class="pet_icons_div">
                        <button type="button" onclick="inputDog()" data-toggle="modal"
                            data-target=".bd-example-modal-lg" class="petIcon_btn"><img
                                src="public/images/dogIcon.png" /></button>
                        <button type="button" onclick="inputCat()" data-toggle="modal" data-target="#exampleModal"
                            class="petIcon_btn"><img src="public/images/catIcon.png" /></button>
                        <input type="checkbox" name="dog" id="dogCheckbox" value="Dog" style="#display:none;">
                        <input type="checkbox" name="cat" id="catCheckbox" value="Cat" style="display:none;">
                    </div>
                    <div class="submit_button_div">
                        <input id="submit_button" type="submit" name="search" value="Search">
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    </div>
    </div>
    <!-- Dog Extra Search Modal -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="width:100% !important;">
                <div class="modal fade bd-example-modal-lg" id="dogModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true" style="width:100% !important;">
                    <div class="modal-dialog modal-lg" role="document" style="width:100% !important;">
                        <div class="modal-content dog_credentials" style="width:100% !important;">
                            <div class="modal-header dog_credentials">
                                <h5 class="modal-title" id="exampleModalLabel">for When You're Away <h5
                                        class="modal-title" style="margin-left:25%;"> for When you are at Work</h5>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="dogBoard()"> Dog Boarding</button>
                                                <input type="checkbox" name="dogBoarding" id="dogBoarding"
                                                    value="dogborading" style="display:none;">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="houseSitting()">House Sitting</button>
                                                <input type="checkbox" name="Hsitting" id="housesitting"
                                                    value="housesitting" style="display:none;">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="dogDvisit()">Drop-In Visits</button>
                                                <input type="checkbox" name="drop-in-visits" id="drop-in-visits"
                                                    values="dropinvisits" style="display:none;">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="dayCare()">Day Care</button>
                                                <input type="checkbox" name="dogDaycare" id="daycare" value="Daycare"
                                                    style="display:none;">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="dogwalking()">DogWalking</button>
                                                <input type="checkbox" name="dogWalking" id="dogwalk" value="dogwalking"
                                                    style="display:none;">
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <h5>My Dog Size</h5>
                                    <div class="row">

                                        <div class="col-md-5" style="margin-top:5px;">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="small()">small</button>
                                                <input type="checkbox" name="S" id="smaller" value="S"
                                                    style="display:none;">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="meds()">medium</button>
                                                <input type="checkbox" name="M" id="mediums" value="M"
                                                    style="display:none;">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="large()">Large</button>
                                                <input type="checkbox" name="L" id="lar" value="L"
                                                    style="display:none;">
                                                <button type="button" class="btn btn-outline-success"
                                                    onclick="xlarge()">Xlarge</button>
                                                <input type="checkbox" name="XL" id="xlargee" value="XL"
                                                    style="display:none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cat Extra Search Modal -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content dog_credentials">
                            <div class="modal-header dog_credentials">
                                <h5 class="modal-title" id="exampleModalLabel">for When You're Away</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-success" onclick="catBoardingggg()">Cat
                                        Boarding</button>
                                    <input type="checkbox" name="catBoarding" id="catBoardingg" value="catboarding"
                                        style="display:none;">
                                    <button type="button" class="btn btn-outline-success" onclick="catSitting()">House
                                        Sitting</button>
                                    <input type="checkbox" name="catHsitting" id="catHsitting" value="housesitting"
                                        style="display:none;">
                                    <button type="button" class="btn btn-outline-success" onclick="catDvisit()">Drop-In
                                        Visits</button>
                                    <input type="checkbox" name="catDrop-in-visits" id="dropinvisit"
                                        value="catdropinvisits" style="display:none;">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="public/images/cat2.jpg" class="images" alt="">
        </div>
        <div class="col-md-4">
            <img src="public/images/cat1.jpg" class="images" alt="">

        </div>
        <div class="col-md-4">
            <img src="public/images/Dog1.jpg" class="images" alt="">
        </div>
    </div>
    <div class="row second-floor">
        <div class="col-md-4">
            <img src="public/images/petHotel1.jpg" class="images" alt="">
        </div>
        <div class="col-md-4">
            <img src="public/images/DogAndKid.jpg" class="images" alt="">

        </div>
        <div class="col-md-4">
            <img src="public/images/Dog7.jpg" class="images" alt="">
        </div>
    </div>
</div>


<style>
.search-function {
    color: green;
    margin-left: 0%;
    margin-top: 0px;
}

#ck-button {
    margin: 4px;
    overflow: auto;
    float: left;
}

#ck-button label {
    float: left;
    width: 4.0em;
}

#ck-button label span {
    text-align: center;
    padding: 3px 0px;
    display: block;
}

#ck-button label input {
    position: absolute;
    top: -20px;
}

#ck-button input:checked+span {}

.dropof,
.pickup,
.location {
    border: none;
}

#search-functionality {
    margin-top: 0%;
    padding-top: 0%;
    /*background-color:#219F78;*/
}

.dog_credentials {
    border: none;
}
</style>

<?php include('footer.php');?>