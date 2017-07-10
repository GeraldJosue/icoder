$(document).ready(function(){

   $('#sport').on('change', function(){
      var s_id = $(this).val();
      var s_name = $('#sport option:selected').html();
		var urlroute = '/reports/findsport/' + s_id;
      $('#table_body').empty();
		$.ajax({
               type:'POST',
               url:urlroute,
               success:function(data){
                  $.each(data, function(i, item) {
                     var dni = "<td>"+item.dni+"</td>";
                     var name = "<td>"+item.name+" "+item.firstname+"</td>";
                     var nac = "<td>"+item.birthdate+"</td>";
                     var canton = "<td>"+item.cantond_id+"</td>";
                     var email = "<td>"+item.person_email+"</td>";
                     var tel = "<td>"+item.tel_number+"</td>";
                     var sport = "<td>"+s_name+"</td>";
                     var category = "<td>"+item.category_id+"</td>";
                     var tr = "<tr>"+dni+name+nac+canton+email+tel+sport+category+"</tr>"
                     $('#table_body').append(tr);
                  });
               }
        });

	});

});