$(function()
{
  $('input[name="searchDate1"]').daterangepicker({

    "autoApply": true,
	     "locale": {
	        "format": "DD/MM/YYYY",
	        "separator": " - ",

	   	},

	    "startDate":date ,
	    "minDate": date,
	    "endDate":date ,
	    "opens": "center",
  }, function(start, end, label)
  {
     var i=1;
     console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  }

);
});

if(i==0)
{
var date= new Date();
}
