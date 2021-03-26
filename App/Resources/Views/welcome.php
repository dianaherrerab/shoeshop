<?php require_once RESOURCES."/Templates/header.php"; 
$categorias = $this->CategoryModel->getCategories();
$brands = $this->BrandModel->all();
?>

<div class="container padding-welcome">
	<div class="row align-items-center justify-content-center">
		<div class="flex-column col-lg-7 col-12 p-0 text-center padding-arriba">
			<div class="font-weight-bold col-12 tamaño-letra-header p-0">
			<span class="color-morado">EL MUNDO A</span> <span class="color-naranja">TUS PIES</span>
			</div>
			<p class="col-12 tamaño-letra-parrafo color-gris">Todo lo que deseas, está a tu alcance</p>
			<div class="col-12 text-center mt-xl-5 mt-3">
				<a href="" class=" font-weight-bold white-text bg-naranja boton-ingresar2" data-toggle="modal" data-target="#exampleModal">
					Ingresar
				</a>
			</div>
		</div>
		<div class="col-lg-5 text-center d-none d-lg-block">
			<img src="<?php echo IMG?>/img-logo.png" class="img-titulo">
		</div>
	</div>
</div>

	<div class="container-fluid position-relative p-0">
		<img src="<?php echo IMG?>/fondo-azul.png" class="fondo-azul m-0 ">
		<div class="container-fluid posicion-welcome position-relative bg-morado m-0">
			<div class="row">
				<div class="titulo-productos position-absolute text-center col-12 white-text p-0">
					<h4 class="font-weight-bold">PRODUCTOS</h4>
					<hr class="welcome-hr">
				</div>
				<div class="col-3 d-none d-lg-block postion-relative p-0 ">
					<div class="borde-filtro position-absolute white py-5 col-12">
						<h5 class="font-weight-bold text-center color-naranja">FILTROS</h5>
						<hr class="filtro-hr mb-4">
						<form class="form-search" method="get" action="<?php echo URL; ?>Index/Pagination" data-url-change="<?php echo URL; ?>Index/Listing" >
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
								<li class="mb-4">
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
																	<input type="hidden" id="input_whr" name="" value="brandId">
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
						</form>						
					</div>
				</div>
				<div class="container col-12 col-lg-9">
					<div class="row content-pagination">
						<?php echo $params['list']; ?>						
					</div>
				</div>
			</div>
		</div>
		<div class="bg-morado">
			<img src="<?php echo IMG?>/fondo-gris.png" class="fondo-gris m-0">
		</div>
		
		<div class="bg-gris position-relative">
			<div class="container d-flex justify-content-center px-0 py-5">
				<div class="p-0 m-0 text-center position-div">
					<h3 class="color-morado font-weight-bold">
						¿Tienes una empresa de calzado?
					</h3>
					<hr class="welcome-hr mb-5">
				</div>
				<div class="row col-12 m-0">
					<div class="col-6 d-none d-lg-block p-0 centrar-img zindex-botones">
						<img src="<?php echo IMG?>/shoes.png" class="zapato">
						<div class="circulo2 position-absolute"></div>
					</div>
					<div class="col-lg-6  col-12 p-0 text-center">
						<h4 class="font-weight-bold color-morado">Contáctanos</h4>
						<h6 class="color-morado mb-5">
							Con nosotros podrás gestionar tu rol empresarial 
						</h6>
						<form method="POST" action="<?php echo URL; ?>/Admin/Store/store" class="register-form" name="register-form">
							<input type="text" id="name" name="name" placeholder="Nombre" class="bordes-welcome mb-4 bg-gris">
							<input type="email" name="username" id="username" placeholder="Correo" class="bordes-welcome mb-4 bg-gris">
							<input type="text" name="nameE" id="nameE" placeholder="Nombre de la empresa" class="bordes-welcome bg-gris mb-5">
							<button id="btn-register" class="btn bg-naranja boton-ingresar font-weight-bold mx-0 mb-5">
								Enviar
							</button>
						</form>		
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once RESOURCES."/Templates/footer.php"; ?>