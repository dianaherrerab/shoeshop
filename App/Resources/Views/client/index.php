<?php require_once RESOURCES."/Templates/client/header.php"; 
$productos = $this->ProductModel->getProducts( 1 );
$categorias = $this->CategoryModel->getCategories();
$tienda = $this->StoreModel->find( 1 );

?>


	<div class="d-flex align-items-center justify-content-center py-5">
      <div class="container">
        <div class="row p-0 text-center espacio-titulo">
          <div class="font-weight-bold col-12 tam-header-client p-0">
            <span class="color-morado"> <?php echo $tienda['name'];?> </span>
          </div>
          <p class="col-12 tamaño-letra-parrafo color-gris m-0"><?php echo $tienda['slug'];?></p>
          <div class="col-12 col-lg-5 my-5 d-flex align-items-center justify-content-center">
            <img src="<?php echo IMG.$tienda['image']?>" class="propiedad-zapato">
          </div>
          <div class="col-12 col-lg-7 mt-0 mb-5 my-lg-5 d-flex align-items-center">
            <h6 class="m-0 px-5 px-md-0">
				<?php echo $tienda['description'];?>
            </h6>
          </div>
          <div class="col-12 col-md-4 mb-3 mb-md-0 p-0 d-flex justify-content-center justify-content-md-start align-items-center">
            <h5 class="color-morado m-0 p-0 d-flex align-items-center font-weight-bold">
              <i class="fas fa-2x fa-id-card color-morado pr-3 d-none d-md-block"></i>
              NIT: <?php echo $tienda['nit'];?>
            </h5>
          </div>
          <div class="col-12 col-md-4 mb-3 mb-md-0 p-0 d-flex justify-content-center align-items-center">
            <h5 class="color-morado m-0 p-0 d-flex align-items-center font-weight-bold">
              <i class="fas fa-2x fa-phone-square-alt color-morado pr-3 d-none d-md-block"></i>  
              TEL: <?php echo $tienda['cellphone'];?>
            </h5>
          </div>
          <div class="col-12 col-md-4 p-0 d-flex justify-content-center justify-content-md-end align-items-center">
            <h5 class="color-morado  m-0 p-0 d-flex align-items-center font-weight-bold">
              <i class="fas fa-2x fa-map-marker-alt color-morado pr-3 d-none d-md-block"></i>
              <?php echo $tienda['address'];?>
            </h5>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid position-relative p-0">
		<img src="<?php echo IMG?>/fondo-azul.png" class="fondo-azul m-0 ">
		<div class="container-fluid posicion-welcome position-relative bg-morado m-0 pb-5">
			<div class="row">
				<div class="titulo-productos position-absolute text-center col-12 white-text p-0">
					<h4 class="font-weight-bold">PRODUCTOS</h4>
					<hr class="welcome-hr">
				</div>
				<div class="col-3 d-none d-lg-block postion-relative p-0 ">
					<div class="borde-filtro position-absolute white py-5 col-12">
						<h5 class="font-weight-bold text-center color-naranja">FILTROS</h5>
						<hr class="filtro-hr mb-4">
						<ul class="collapsible collapsible-accordion tam-letra-ul font-weight-bold">
							<li>
								<a class="collapsible-header waves-effect arrow-r active">
									Tipos
									<i class="fas fa-angle-down rotate-icon"></i>
								</a>
								<div class="collapsible-body">
									<ul>
										<li>
											<a href="#" class="waves-effect active  color-gris a-hover">
											<span class="sv-slim">Femeninos</span>
											</a>
										</li>
										<li>
											<a href="#" class="waves-effect  color-gris a-hover">
											<span class="sv-normal">Masculinos</span>
											</a>
										</li>
										<li>
											<a href="#" class="waves-effect color-gris a-hover">
											<span class="sv-normal">Niños</span>
											</a>
										</li>
										<?php
											foreach ($categorias as $categoria) {
											echo '
												<li>
													<a href="#" class="waves-effect color-gris a-hover">
													<span class="sv-normal">'.$categoria['name'].'</span>
													</a>
												</li>
											';
											}
										?>
									</ul>
								</div>
							</li>
							<li>
								<a class="collapsible-header waves-effect arrow-r a-hover">
									Marcas
									<i class="fas fa-angle-down rotate-icon"></i>
								</a>
								<div class="collapsible-body">
									<ul>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-slim">Adidas</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">Nike</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">Reebok</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">Puma</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">Skechers</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">New Balance</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">Le Coq Sportif</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">Converse</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">Kappa</span>
										</a>
									</li>
									<li>
										<a href="#" class="waves-effect color-gris a-hover">
										<span class="sv-normal">Alpha Tauri</span>
										</a>
									</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="container col-12 col-lg-9">
					<div class="row">
					<?php
							foreach ($productos as $producto) {
								echo '
								<div class="col-12 col-sm-6 col-lg-4 py-4">
									<div class="card text-center bordes-cards py-3">
										<img class="card-imagen" src="'.IMG.'/bd-products/'.$producto['imagen'].'">
										<div class="card-body px-1">
											<h4 class="color-morado font-weight-bold">'.$producto['name'].'</h4>
											<h4 class="color-naranja font-weight-bold">'.$producto['price'].' COP</h4>
											<div class="container-fluid">
												<div class="row justify-content-around">
													<select class="browser-default custom-select m-auto form-control2 col-5">
														<option selected>Talla</option> ';
														$sizes = $this->ProductSizeModel->find_size($producto['productId']);
														foreach ($sizes as $size){
															echo '<option value="'.$size['sizeId'].'">'.$size['sizeId'].'</option>';
														}
												echo'</select>
													<a data-url="'.URL.'Client/ShoppingCar/agregar_productos" data-id="'.$producto['productId'].'" data-cantidad="1" class="add_shopping_cart white-text btn-vermas p-0 col-5 d-flex align-items-center justify-content-center">
														<i class="fas fa-1x fa-shopping-cart color-naranja white-text"></i>
													</a>
												</div>
											</div>
											<div class="col-12 mt-4">
												<a href="'.URL.'client/product/uniqueproduct/'.$producto['slug'].'" class="white-text btn-vermas">Ver más</a>
											</div>
										</div>
									</div>
								</div>
								';
							}
						?>
					</div>
				</div>
			</div>
		</div>


		<div class="white py-5">
			<div class="container">
				<div class="flex-column text-center">
					<img class="mb-2" src="<?php echo IMG?>/shoes.png">
					<p class=" color-gris m-0">Todo lo que deseas está a tu alcance</p>
				</div>
			</div>
		</div>
	</div>


<?php require_once RESOURCES."/Templates/footer.php"; ?>