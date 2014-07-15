// cakeurls

$( document ).ready(function() {
	// URLS: Add / Edit - automatically add the fields together to compose a URL
	$('#UrlBase, #UrlName').keyup(function() {  
		updateTotal();
	});
	$( "#UrlSourceId, #UrlMediaId, #UrlTypeId").change(function() {
	  	updateTotal();
	});
	var updateTotal = function(event){ 
		event.preventDefault();
		var in_base 	= $('#UrlBase').val();
		var in_name 	= $('#UrlName').val();
		var in_source 	= $("#UrlSourceId option:selected").text();
		var in_media 	= $("#UrlMediaId option:selected").text();
		var in_type 	= $("#UrlTypeId option:selected").text();
		var out_str		=  in_base + "?utm_source=" + in_source + "&utm_medium=" + in_media + "&utm_campaign=" + in_type + "-" + in_name;
		$('#UrlBuild').text(out_str);
	};
	updateTotal();
	
	
	// fetch the BITLY
	$('#UrlGetBitsForm').submit(function(event){ 
		event.preventDefault();
		var formData = $(this).serialize(); 
		var formUrl = $(this).attr('action'); 
		//alert(formData);
		$.ajax({ 
			type: 'GET', 
			url: formUrl, 
			data: formData, 
            evalScripts: true,
			success: function(data,textStatus,xhr){ 
				$('#UrlBits').text(data);
				console.log(data);
				//alert(data); 
			}, 
			error: function(xhr,textStatus,error){ 
				//alert(textStatus); 
				console.log(textStatus);
			} });	 
		return false; 
	});
	
	
	
	
	
});



