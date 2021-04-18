$(document).ready(function(){
    // función para cargar los departamentos por id de país
	$(".select-size").change(function(){
		var url = $(this).data('url');
		var sizeId = $(this).val();
		var product_id = $(this).data('product-id');
		$.ajax({
			url: url,
			type: 'POST',
			data: { 'product_id' : product_id, 'sizeId': sizeId },
			beforeSend: function() {
				toastr.info("Buscando cantidad...");
			},
			success: function(data) {
				data = data.split('|');
				if( data[0] === 'true' )
				{
					$("#quantity").html( data[1] );
					toastr.success("Cantidad cargada con éxito.");
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