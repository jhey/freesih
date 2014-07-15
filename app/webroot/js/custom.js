// FREEISH



$( document ).ready(function() {
	/* EMAIS (submit & save) */
	
var accessToken = encodeURIComponent("3Uz/dv/e8Pcim3JLpz5TsimWX0daSSKKYg9FfEGkuCo");
OData.request({
        requestUri: "https://api.datamarket.azure.com/data.ashx/WeatherCentral/SuperMicrocast/v1/GetSummaryHourlyForecast?"
                    + "Latitude=47.65"
                    + "&Longitude=-122.19"
                    + "&Time=%27now%27"
                    + "&accessToken="
                    + accessToken,
        enableJsonpCallback: true,
        method: "GET"
    },
    function readData(data, response) {
        alert("data received");
    },
    function (err) {
        alert("error occurred: " + err.message);
    }
);
	
	$('#emailsSavesubmitForm').submit(function(event){ 
		event.preventDefault();
		//$('#EmailAddForm').submit();
		var formData = {value_to_send:'submitted'}; 
		var formUrl = $(this).attr('action'); 
		$.ajax({ 
			type: 'POST', 
			url: formUrl, 
			data: formData, 
            evalScripts: true,
			success: function(data,textStatus,xhr){ 
				$('#EmailEditForm').submit();
				$('#EmailAddForm').submit();
			}, 
			error: function(xhr,textStatus,error){ 
				//alert('err'); 
			} });	
		
		return false; 
	});
	
	
});



