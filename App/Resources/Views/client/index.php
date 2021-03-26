<?php require_once RESOURCES."/Templates/client/header.php"; 

$categorias = $this->CategoryModel->getCategories();
$tienda = $this->StoreModel->find( 1 );
$brands = $this->BrandModel->all();

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
					<form class="form-search" action="<?php echo URL; ?>Client/Index/Pagination" data-url-change="<?php echo URL; ?>Client/Index/Listing" method="get">
						<div class="borde-filtro position-absolute white py-5 col-12">
							<h5 class="font-weight-bold text-center color-naranja">FILTROS</h5>
							<hr class="filtro-hr mb-4">
							<ul class="collapsible collapsible-accordion tam-letra-ul font-weight-bold">
								<li>
									<a class="collapsible-header waves-effect arrow-r active">
										Categorias
										<i class="fas fa-angle-down rotate-icon"></i>
									</a>
									<div class="collapsible-body">
										<ul>
											<?php
												foreach ($categorias as $categoria) {
												echo '
												<li>
												<a class="waves-effect color-gris a-hover">
													<div class="custom-control custom-radio ">
														<input type="hidden" id="input_whr" value="categoryId">
														<input type="radio" class="custom-control-input value_whr" value="'.$categoria['categoryId'].'" id="'.$categoria['categoryId'].'" name="groupOfDefaultRadios">
														<label class="custom-control-label" for="'.$categoria['categoryId'].'"><span class="sv-slim">'.$categoria['name'].'</span></label>
													</div>
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
											<?php
												foreach ($brands as $brand) {
													echo '
														<li>
															<a  class="waves-effect color-gris a-hover">
																<div class="custom-control custom-radio">
																	<input type="hidden" id="input_whr" value="brandId">
																	<input type="radio" class="custom-control-input value_whr" value="'.$brand['id'].'" id="'.$brand['id'].'-1" name="groupOfDefaultRadios2">
																	<label class="custom-control-label" for="'.$brand['id'].'-1"><span class="sv-slim">'.$brand['name'].'</span></label>
																</div>
															</a>
														</li>
													';
													}
											?>
										</ul>
									</div>
								</li>
								<button type="submit" class="font-weight-bold white-text bg-naranja boton-ingresar2 px-5">
										Buscar
								</button>
							</ul>
						</div>
					</form>
				</div>
				<div class="container col-12 col-lg-9">
					<div class="row content-pagination">
						<?php echo $params['list']; ?>						
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