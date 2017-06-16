$(document).ready(function(){

	function configselect(selectname, text){
		$("#"+ selectname +" option").filter(function() {
    	//may want to use $.trim in here
    		return $(this).text() == text; 
		}).prop('selected', true);
	}

	$(".edit-Sport").on("click", function(){

    	var id = $(this).data('id');
    	$("#sport_id").val( id );
    	var tr = $(this).parents('tr');
    	
		var name = tr.find('td')[0].innerHTML;
		var type = tr.find('td')[1].innerHTML;
		$("#new_sport_name").val( name );

		configselect('new_sport_type', type);
		//$('#new_sport_type > option[innerHTML="'+ myType +'"]').attr('selected', 'selected');		
	
	});

	$(".edit-Rol").on("click", function(){

    	var id = $(this).data('id');
    	$("#user_rol_id").val( id );

    	var tr = $(this).parents('tr');

		var name = tr.find('td')[0].innerHTML;
		$("#new_user_rol_name").val( name );		
	
	});

	$(".edit-Category").on("click", function(){

    	var id = $(this).data('id');
    	$("#category_id").val( id );

    	var tr = $(this).parents('tr');

		var name = tr.find('td')[0].innerHTML;
		var gender = tr.find('td')[1].innerHTML;
		var minyear = tr.find('td')[2].innerHTML;
		var maxyear = tr.find('td')[3].innerHTML;
		var sport = tr.find('td')[4].innerHTML;
		$("#new_category_name").val( name );
		$("#new_initial_year").val( minyear );
		$("#new_final_year").val( maxyear );

		configselect("new_gender", gender);
		configselect("new_sport_id", sport);
		
	});

	$(".edit-Try_Out").on("click", function(){

    	var id = $(this).data('id');
    	$("#try_out_id").val( id );

    	var tr = $(this).parents('tr');

		var name = tr.find('td')[0].innerHTML;
		var category = tr.find('td')[1].innerHTML;
		$("#new_try_out_name").val( name );
		configselect("new_category_id", category);
		
	});

	$(".edit-User").on("click", function(){

    	var id = $(this).data('id');
    	$("#id").val( id );

    	var tr = $(this).parents('tr');

		var name = tr.find('td')[0].innerHTML;
		var email = tr.find('td')[1].innerHTML;
		var canton = tr.find('td')[2].innerHTML;
		var type = tr.find('td')[3].innerHTML;

		$("#new_nickname").val( name );
		$("#new_email").val( email );

		//configselect("new_canton_id", canton);
		configselect("new_user_type", type);
		
	});

	$(".edit-Canton").on("click", function(){
    	var id = $(this).data('id');
    	$("#canton_id").val( id );

    	var tr = $(this).parents('tr');
		var name = tr.find('td')[0].innerHTML;
		var province = tr.find('td')[1].innerHTML;

		$("#new_canton_name").val( name );
		configselect("new_province_id", province);

	});

	$(".edit-Province").on("click", function(){
    	var id = $(this).data('id');
    	$("#province_id").val( id );
    	var tr = $(this).parents('tr');
		var name = tr.find('td')[0].innerHTML;

		$("#new_province_name").val( name );

	});

	$(".edit-Edition").on("click", function(){
    	var id = $(this).data('id');
    	$("#edition_id").val( id );

    	var tr = $(this).parents('tr');
		var name = tr.find('td')[0].innerHTML;
		var year = tr.find('td')[1].innerHTML;
		var place = tr.find('td')[2].innerHTML;
		var initial = tr.find('td')[3].innerHTML;
		var final = tr.find('td')[4].innerHTML;

		$("#new_edition_name").val( name );
		$("#new_edition_place").val( place );
		$("#new_initial_date").val( initial );
		$("#new_final_date").val( final );
		configselect("new_edition_year", year);

	});

});