$(document).ready(function() {

	// función para expandir el contenedor de las tabs
	$(".btn-expanded-tabs").on('click', function(){
		// obtenemos una instancia del contenedor
		let container = $(this).parent('ul').parent('.header-tabs');
		// obtenemos la cantidad de tabs
		let quantity_tabs = $(this).siblings('.tab').length;
		// obtenemos el estado de las tabs
		let status = $(this).data('status');
		// validamos el estado
		if( status == "close" )
		{
			// animamos el contenedor para que muestre todo el contenido
			container.animate({ height: quantity_tabs*50+'px' }, 700);
			// reasignamos el valor del estado de las tabs
			$(this).data('status', 'open');
		}
		else
		{
			// animamos el contenedor para que muestre todo el contenido
			container.animate({ height: '50px' }, 700);
			// reasignamos el valor del estado de las tabs
			$(this).data('status', 'close');
		}
		// evitamos que se envie el evento
		return false;
	});


	// función para mostrar el contenido de una tab
	$(".tab").on('click', function(){
		// removemos el tooltip
		$(".tooltip").remove();
		// instanciamos el objeto
		let obj = $(this);
		// obtenemos una instancia del contenedor de los contenidos de las tabs
		let container = $('.content-tabs');
		// obtenemos la tab que se va a visualizar
		var tab = obj.data('tab');
		// removemos las clases activas de las tabs
		$(".tab").children('a').removeClass('active');
		// agregamos la clases activas a la tab clickeada
		obj.children('a').addClass('active');
		// removemos las clases activas
		container.children('.content-tab').removeClass('active');
		if( $(window).width() <= 768 )
			// animamos el contenedor para que muestre todo el contenido
			$(".btn-expanded-tabs").parent('ul').parent('.header-tabs').animate({ height: '50px' }, 700);
		else
			// animamos el contenedor para que muestre todo el contenido
			$(".btn-expanded-tabs").parent('ul').parent('.header-tabs').animate({ height: 'auto' }, 700);
		// reasignamos el valor del estado de las tabs
		$(".btn-expanded-tabs").data('status', 'close');
		// retrasamos .7seg la muestra del tab
		setTimeout(function(){
			// mostramos el tab
			 $("#tab-"+tab).addClass('active');
		}, 700);
		// evitamos que se envie el evento
		return false;
	});

});