<?php include('header.php');  error_reporting(E_ALL); ini_set('display_errors', 1);?>
<link rel="stylesheet" href="public/css/fullcalendar.css" />
<script  src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
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
   events: "includes/petowner/events.php",

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
    var one_day=1000*60*60*24;
   var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
   var a = moment(start ,'Y-MM-DD');
   var b = moment(end,'Y-MM-DD');
   var days = b.diff(a);
   var x =  Math.round(days/one_day);
   
   $.ajax({
	   url: 'includes/petowner/add_events.php',
	   data: 'title='+ title+'&start='+ start +'&end='+ end +'&days='+x +'&petownerid='+'<?php echo $_SESSION['id']?>',
	   type: "POST",
	   success: function(json) {
       alert('Added Successfully');
       window.location.reload();
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
    var one_day=1000*60*60*24;
   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
   var a = moment(start ,'Y-MM-DD');
   var b = moment(end,'Y-MM-DD');
   var days = b.diff(a);
   var x =  Math.round(days/one_day);
   $.ajax({
	   url: 'includes/petowner/update_events.php',
	   data: 'title='+ event.title+'&start='+ start +'&end='+ end  +'&days='+ x + '&id='+ event.id ,
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
		url: "includes/petowner/delete-events.php",
		data: "&id=" + event.id,
		 success: function(json) {
			 $('#calendar').fullCalendar('removeEvents', event.id);
			  alert("Updated Successfully");}
	});
	}
  	},
   eventResize: function(event) {
       var one_day=1000*60*60*24;
	   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
	   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
       var a = moment(start ,'Y-MM-DD');
       var b = moment(end,'Y-MM-DD');
       var days = b.diff(a);
       var x =  Math.round(days/one_day);
       var id = event.id;
	   $.ajax({
	    url: 'includes/petowner/resize_events.php',
        data: 'title='+ event.title + "&start=" + start+ '&end='+ end  +'&days='+ x +"&id=" + event.id ,
	    type: "POST",
	    success: function(json) {
           calendar.fullCalendar('refetchEvents');
            alert("updated successfully");
     
	    }
	   });
	}
   
  });
  
 });
</script>
 <div class="container">
     <div class="row">
 <div class="col-md-12">
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
    <div class="container">
        <div class="row">
         <div class="col-md-6">
           <a href="petowner_dashboard.php" class="btn btn-primary">Back to the Dashboard</a>
         </div>
        </div>
    </div>
   
<?php include('footer.php')?>