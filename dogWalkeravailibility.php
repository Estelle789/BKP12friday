<?php include('header.php'); ?>

/*This page shows a full page calendar with the walker availability where the dog walker can add events to specific days*/
/*there is no option to set a specific time for the activities*/

<div class="container">
 <div class="row">
<link rel="stylesheet" href="public/css/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script>


 $(document).ready(function() {
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  var calendar = $('#calendar').fullCalendar({
   editable: true,
   header: {
    right: 'prev,next today',
   },
   events: "includes/dogWalkerAvailibility/events.php",

   eventRender: function(event, element, view) {
    if (event.allDay === 'true') {
     event.allDay = true;
    } else {
     event.allDay = false;
    }
   },
   selectable: true,
   selectHelper: true,
   select: function(start, end, allDay) {
   var title = prompt('Event Title:');


   if (title) {
   var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
   $.ajax({
	   url: 'includes/dogWalkerAvailibility/add_events.php',
	   data: 'title='+ title+'&start='+ start +'&end='+ end,
	   type: "POST",
	   success: function(json) {
	   alert('Added Successfully');
	   }
   });
   calendar.fullCalendar('renderEvent',
   {
	   title: title,
	   start: start,
	   end: end,
	   allDay: allDay
   },
   true
   );
   }
   calendar.fullCalendar('unselect');
   },
   editable: true,
   eventDrop: function(event, delta) {
   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
   $.ajax({
	   url: 'includes/dogWalkerAvailibility/update_events.php',
	   data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	   type: "POST",
	   success: function(json) {
	    alert("Updated Successfully");
	   }
   });
   },
   eventClick: function(event) {
	var decision = confirm("Do you really want to delete?"); 
	if (decision) {
	$.ajax({
		type: "POST",
		url: "includes/dogWalkerAvailibility/delete_events.php",
		data: "&id=" + event.id,
		 success: function(json) {
			 $('#calendar').fullCalendar('removeEvents', event.id);
			  alert("Updated Successfully");}
	});
	}
  	},
   eventResize: function(event) {
	   var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
	   var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
	   $.ajax({
	    url: 'includes/dogWalkerAvailibility/update_events.php',
	    data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
	    type: "POST",
	    success: function(json) {
	     alert("Updated Successfully");
	    }
	   });
	}
   
  });
  
 });
</script>
 <div class="container-fluid">
     <div class="row">
 <div class="col-md-3">
     <div class="card">
         <div class="card-header" style="background-color:#008CBD;">To Request</div>
         <div class="card-body">
       <input type="button" value="TO REQUEST" class="btn btn-primary">
       <hr>
       <h6>Legend</h6>
         </div>
     </div>
 </div>

 <div class="col-md-9">
 <div class="card">
     <div class="card-header" style="background-color:#008CBD;"> Agenda</div>
     <div class="card-body">
     <div id='calendar'></div>
     </div>
 </div>
 </div>
 </div>
 </div>

 <style>

#calendar {
    width: 100%;
    margin: 0 auto;
}
</style>
    </div>
</div>


<?php include('footer.php');?>
