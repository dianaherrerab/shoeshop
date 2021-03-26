<?php require_once RESOURCES."/Templates/client/header.php"; ?>

<div class="d-flex align-items-center justify-content-center py-5">
      <div class="container">
        <div class="row p-0 text-center espacio-titulo justify-content-center">
          <div class="col-8 col-sm-6 p-0 d-flex align-items-center">
            <div id="carousel-example-1z" class="carousel slide carousel-fade ancho-img" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
			  	<?php 
				  $cont = 0;
				  foreach ($params['images'] as $image) {
					  if ($cont == 0) {
						echo '
						<div class="carousel-item active">
						<img class="d-block w-100" src="'.IMG.'/bd-products/'.$image['name'].'" 
						alt="First slide">
						</div>
						';
						$cont++;
					  }else{
						echo '
						<div class="carousel-item">
						<img class="d-block w-100" src="'.IMG.'/bd-products/'.$image['name'].'" 
						alt="First slide">
						</div>
						';	
					  }
				  }
				?>
              </div>
              <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-naranja" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-naranja" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-12 col-lg-6 mt-5 mt-lg-0">
            <div class="font-weight-bold color-morado letra-zapato">
              <?php echo $params['product']['name']; ?>
            </div>
            <div class="color-naranja letra-zapato mb-4">
			<?php echo $params['product']['price']; ?> COP
            </div>
            <div class="container">
              <div class="row justify-content-around">
                <select id="size" class="select-size browser-default custom-select form-control2 col-12 col-md-5 col-lg-12 mb-4 mb-md-5 mb-lg-4" 
				 data-quantity="quantity" data-url="<?php echo URL; ?>/Client/ProductSize/find_quantity_by_size">
                  <option  value="" selected>Seleccione una talla</option>
                  		<?php 
						foreach ( $params['sizes'] as $size ) 
						{
							echo '<option value="'.$size['productSizesId'].'">'.$size['sizeId'].'</option>';
						}
						?>
                </select>
                <select class="browser-default custom-select form-control2 mb-5 col-12 col-md-5 col-lg-12" id="quantity">
                  <option selected>Seleccione cantidad</option>
                </select>
              </div>
            </div>
            <div>
              <a data-url="<?php echo URL; ?>'Client/ShoppingCar/agregar_productos" data-id="<?php echo $params['product']['productId'];?>" data-cantidad="1" class="add_shopping_cart font-weight-bold white-text bg-naranja boton-ingresar2 p-3">Agregar al carrito</a>
            </div>
            <div class="color-gris mt-5 text-left">
              <div>Marca: <span><?php echo $params['product']['brand']; ?></span></div>
              <div>Material: <span><?php echo $params['product']['material']; ?></span></div>
              <div>Tipo de calzado: <span><?php echo $params['product']['category']; ?></span></div>
              <div>Género: <span><?php echo $params['product']['gender']; ?></span></div>
              <div>Color: <span><?php echo $params['product']['color']; ?></span></div>
            </div>

          </div>
          <div class="white mt-5">
            <div class="flex-column text-left color-gris px-lg-0 px-3">
              <h5 class="m-0 mb-3 font-weight-bold">
                DESCRIPCIÓN:
              </h5>
              <h6 class="m-0">
			  <?php echo $params['product']['description']; ?>
              </h6>
            </div> 
          </div>
        </div>
    </div>
</div>


<?php require_once RESOURCES."/Templates/footer.php"; ?>