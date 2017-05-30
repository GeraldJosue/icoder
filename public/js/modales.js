$(document).ready(function(){

    $(".open-Modal").on("click", function(){

    	var myDNI = $(this).data('id');
    	$("#sport_id").val( myDNI );

    	var myTR = $(this).parents('tr');
    	
		var myName = myTR.find('td')[0].innerHTML;
		var myType = myTR.find('td')[1].innerHTML;
		$("#new_sport_name").val( myName );
		
	});

	
});


