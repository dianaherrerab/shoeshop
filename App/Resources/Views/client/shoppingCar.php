<?php require_once RESOURCES."/Templates/client/header.php"; ?>

<div class="d-flex align-items-center justify-content-center py-5">
    <div class="container">
        <div class="p-0 espacio-titulo">
            <div class="font-weight-bold col-12 letra-info pb-5 color-morado text-center ">
                Mi carrito de compras
                <hr class="info-hr bg-naranja">
            </div>
            <div class="container text-center">
                <div class="row">
                    <!-- Producto -->
                    <?php
                    foreach ($params['products'] as $product )
                    {
                        echo '
                        <div class="col-12 mb-5 borde-compras p-5 p-lg-0">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-3 p-0">
                                        <img class="d-block w-100" src="'.IMG.'/bd-products/'.$product['imagen'].'" alt="Third slide">
                                    </div>
                                    <div class="col-12 col-lg-6 text-center text-lg-left">
                                        <div class="letra-descrip font-weight-bold color-morado mb-3 mb-lg-0">
                                            '.$product['nombre'].'
                                        </div>
                                        <div class="container mb-3 mb-lg-0">
                                            <div class="row color-gris justify-content-around align-items-center">
                                                <div class="col-12 col-sm-3 d-flex align-items-center justify-content-center justify-content-lg-start p-0">
                                                    <h5 class="m-0">Talla: <span>'.$product['talla'].'</span></h5>
                                                </div>
                                                <div class="col-12 col-sm-5 d-flex flex-row align-items-center justify-content-center p-0">
                                                    <h5 class="m-0">Cantidad: </h5>
                                                    <div>
                                                        <select class="browser-default custom-select form-control2 anchura-cantidad">
                                                            <option value="'.$product['cantidad'].'" selected>'.$product['cantidad'].'</option> ';
                                                            for ($i=1; $i <= $product['cantidad-disponible']; $i++) { 
                                                               echo'<option value="'.$i.'">'.$i.'</option>';
                                                            }
                                                    echo'  </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4 d-flex align-items-center justify-content-center p-0">
                                                    <h5 class="m-0">Color: <span>'.$product['color'].'</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="letra-descrip font-weight-bold color-naranja mb-5 mb-lg-0">
                                            '.$product['precio'].' COP
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 p-0">
                                        <a data-url="'.URL.'Cliente/ShoppingCar/eliminar_productos" data-id="'.$product['id'].'" data-cantidad="'.$product['cantidad'].'" data-precio="'.$product['precio'].'" class="delete_shopping_cart font-weight-bold white-text red px-5 py-3 borde-eliminar">
                                            <i class="far fa-trash-alt mr-2"></i>Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                    }
                    ?>
                    <!-- Fin de un producto  -->
                </div>
                <h1>Total:</h1>
                <h2 class="total">$<?php echo  $params['total']; ?></h2>
                <input type="hidden" id="total" value="<?php echo  $params['total']; ?>">   
                <a href="<?php echo URL; ?>/client/shoppingcar/datosCompra" class="font-weight-bold white-text bg-morado boton-guardar">
                    Continuar compra
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once RESOURCES."/Templates/footer.php"; ?>