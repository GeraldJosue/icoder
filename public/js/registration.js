$(document).ready(function(){

	$("#next1").on("click", function(){
		$('#st_step').hide();
		$('#nd_step').show();
	});

	$("#back2").on("click", function(){
		$('#st_step').show();
		$('#nd_step').hide();
	});

	$('#provinces').on("change", function(){
		var province_id = $(this).val();
		var cantons = document.getElementById('cantons');
		$("#cantons option").remove();
		$('#all_cantons option').each(function(){
			if ($(this).val() == province_id) {
				var option = document.createElement("option");
    			option.text = $(this).text();
    			cantons.add(option);
			}
		});
	});

});