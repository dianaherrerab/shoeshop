$(document).ready(function() {

    // funcion para agregar productos al carrito
        // agregando la clase .add_shopping_cart al btn
        $(".add_shopping_cart").click(function(){
            // obtenemos el id del producto
            var product_id = $(this).data("id");
            // obtenemos la cantidad
            var cantidad = $(this).data("cantidad");
            // ruta del formulario
            var url = $(this).data("url");
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    'productId' : product_id,
                    'cantidad' : cantidad
                },
                success: function(data) {
                    console.log(data);
                    // validamos si hay respuesta de exito
                    if( data === 'true' )
                    {
                        // mostramos una notificacion de exito
                        toastr.success("Producto agregado.");
                    }
                    else
                    {
                        toastr.error(data);	
                    }
                },
                error: function(xhr) {
                    toastr.error("Ha ocurrido un error.");
                    //console.log(xhr.statusText + xhr.responseText);
                },
            });
            return false;
        });
    
        $(".delete_shopping_cart").click(function(){
            // capturamos el boton del evento
            var btn_delete = $(this);
            // obtenemos el id del producto
            var product_id = btn_delete.data("id");
            // obtenemos el cantidad del producto
            var product_cantidad = btn_delete.data("cantidad");
            // obtenemos el precio del producto
            var product_precio = btn_delete.data("precio");
            // ruta del formulario
            var url = btn_delete.data("url");
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    'productId' : product_id,
                },
                success: function(data) {
                    // validamos si hay respuesta de exito
                    if( data === 'true' )
                    {
                        // obtenemos el total de la venta
                        var total = $("#total").val();
                        // restamos el total de la venta con el precio del producto y la cantidad
                        total = parseInt(total) - parseInt( product_precio * product_cantidad );
                        // actualizamos el valor de la venta para poder obtenerla en caso de que eliminen otro producto
                        $("#total").val( total );
                        // mostramos el nuevo total de la venta
                        $(".total").html( "$"+total );
                        // eliminamos el campo de la tabla
                        btn_delete.parent('td').parent('tr').remove();
                        // mostramos una notificacion de exito
                        toastr.success("Producto eliminado.");
                    }
                    else
                    {
                        toastr.error(data);	
                    }
                },
                error: function(xhr) {
                    toastr.error("Ha ocurrido un error.");
                    console.log(xhr.statusText + xhr.responseText);
                },
            });
            return false;
        });
    
    });