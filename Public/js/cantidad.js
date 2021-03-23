$(document).ready(function(){
    // función para cargar los departamentos por id de país
	$(".select-size").change(function(){
		var url = $(this).data('url');
		var productSizesId = $(this).val();
		var quantity = $(this).data('quantity');
		$.ajax({
			url: url,
			type: 'POST',
			data: { 'productSizesId': productSizesId },
			beforeSend: function() {
				toastr.info("Buscando cantidad...");
			},
			success: function(data) {
				data = data.split('|');
				if( data[0] === 'true' )
				{
					$("#"+quantity).html( data[1] );
					toastr.success("Estados cargados con éxito.");
				}else
				{
					toastr.error("Ha ocurrido un error. Intentelo nuevamente.");
					console.log(data[0]);
				}
			},
			error: function(xhr) {
				toastr.error("Ha ocurrido un error. Intentelo nuevamente.");
			    // console.log(xhr.statusText + xhr.responseText);
			},
		});
		return false;
	});
});