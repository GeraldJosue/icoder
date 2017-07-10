$(document).ready(function(){

	jQuery.ajaxSetup({
        headers: {
            'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
	$('#personal').on('change', function(){
		$('#personalname').val($(this).val());
	});

	$('#front').on('change', function(){
		$('#frontname').val($(this).val());
	});

	$('#back').on('change', function(){
		$('#backname').val($(this).val());
	});

	$('#enroll').on('change', function(){
		$('#enrollname').val($(this).val());
	});

	$('#pass').on('change', function(){
		$('#passname').val($(this).val());
	});

	$('#excelf').on('change', function(){
		$('#excelname').val($(this).val());
	});

	$('#find').on('click', function(){
		$('#savetemp').attr("disabled", false);
		$('#st_step').show();
		var dni = $('#finder').val();
		var urlroute = '/registration/find/' + dni;
		$.ajax({
               type:'POST',
               url:urlroute,
               success:function(data){
                  	$('#dni').val(dni);
                  	$('#name').val(data.rc_name);
                  	$('#firstname').val(data.rc_firstname);
                  	$('#lastname').val(data.rc_lastname);
                  	$('#nationality').val(data.rc_nationality);
                  	$('#birthdate').val(data.rc_birthdate);
                  	$('#gender').val(data.rc_gender);
               }
        });

	});

	$("#next1").on("click", function(){
		//var email = $('#person_email').val();
		//var tel = $('#tel_number').val();

		//if(email == "" || tel == "") {
		//	alert("Rellene todos los espacios antes de continuar");
		//} else {
			$('#st_step').hide();
			$('#nd_step').show();
			$('#pr_bar').width('50%');
			$('#pr_bar').text('2/4');
		//}
	});

	$("#next2").on("click", function(){
		$('#rd_step').show();
		$('#nd_step').hide();
		$('#pr_bar').width('75%');
		$('#pr_bar').text('3/4');

		var category_id = $('#birthdate').val();
		var sport_id = $('#sport_id').val();
		var urlroute = '/registration/try_outs/' + category_id.substr(0,4);
		if ($("input[type=checkbox]").length == 0) {
			$.ajax({
	               type:'POST',
	               url:urlroute,
	               success:function(data){
	               	$.each(data, function(i, item) {
	    				$('#try_outs_checks').append('<label class="checkbox-inline"><input type="checkbox" value="'+ item.try_out_id +'">'+ item.try_out_name +'</label>');
					});
	               }
	        });
		}

        //var text = $('#newCheckText').val();
		

	});

	$("#back2").on("click", function(){
		$('#st_step').show();
		$('#nd_step').hide();
		$('#pr_bar').width('25%');
		$('#pr_bar').text('1/4');


	});

	$("#back3").on("click", function(){
		$('#nd_step').show();
		$('#rd_step').hide();
		$('#pr_bar').width('50%');
		$('#pr_bar').text('2/4');

	});

	$("#next3").on("click", function(){
		$('#th_step').show();
		$('#rd_step').hide();
		$('#pr_bar').width('100%');
		$('#pr_bar').text('4/4');


	});

	$("#back4").on("click", function(){
		$('#rd_step').show();
		$('#th_step').hide();
		$('#pr_bar').width('75%');
		$('#pr_bar').text('3/4');


	});

	$('#provinces').on("change", function(){
		var province_id = $(this).val();
		var cantons = document.getElementById('cantons');
		$("#cantons option").remove();
		$('#all_cantons option').each(function(){
			if ($(this).val() == province_id) {
				var option = document.createElement("option");
    			option.text = $(this).text();
    			option.value = $(this).attr("id");
    			cantons.add(option);
			}
		});
	});

	$('#sports').on('change', function(){
		$('#options').show();
	});

	$('#options').on('change', function(){
		$('button').attr('disabled', false);
	});

	// $("input:checkbox:checked").each(function() {
 //             alert($(this).val());
 //    });

});