$(document).ready(function() {

    $(".form-status-sale").submit(function(){
		var errors_status = $(this).children(".errors-status");
		var form = $(this);
		var url = form.attr('action');
		var modal = form.data('modal');
		errors_status.html('');
		$.ajax({
			url: url,
			type: 'POST',
			data: form.serialize(),
			beforeSend: function() {
				toastr.info("Actualizando registro, espere un momento...");
			},
			success: function(data) {
				if( data === 'true' )
				{
					toastr.success("Registro actualizado con exito.");
				}else
				{

					toastr.error("Ha ocurrido un error.");
					errors_status.append( data );
					// validamos si es una ventana modal
					if( modal == undefined )
					{
						$('.scroll').animate({
							scrollTop: errors_status.offset().top
						});
					}
				}
			},
			error: function(xhr) {
			   	toastr.error("Ha ocurrido un error.");
			    // console.log(xhr.statusText + xhr.responseText);
			},
		});
		return false;
	});    
});