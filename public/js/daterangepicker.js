$(function()
{
  $('input[name="searchDate"]').daterangepicker({
    "autoApply": true,
	     "locale": {
	        "format": "DD/MM/YYYY",
	        "separator": " - ",
	   	},

	    "startDate":date,
	    "minDate": date,
	    "endDate": date,
	    "opens": "center",
  }, function(start, end, label)
  {
     console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  }
);
});

    var date= new Date();
