
<?php require_once RESOURCES."/Templates/header.php"; ?>
<?php 
$productos = $this->ProductModel->getProducts( 1 );
$categorias = $this->CategoryModel->getCategories();
?>

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
										<img class="card-img-top zapato-card" src="'.IMG.'/bd-products/'.$producto['imagen'].'">
										<div class="card-body px-1">
											<h4 class="color-morado font-weight-bold">'.$producto['name'].'</h4>
											<h4 class="color-naranja font-weight-bold">'.$producto['price'].' COP</h4>
											<div class="container-fluid">
												<div class="row">
													<select class="browser-default custom-select m-auto form-control2 col-4">
														<option selected>C</option>
														<option value="1">27</option>
														<option value="2">34</option>
														<option value="3">28</option>
													</select>
													<select class="browser-default custom-select m-auto form-control2 col-4">
														<option selected>Talla</option>
														<option value="1">'.$producto['size'].'</option>
													</select>
													<a href="" class="white-text btn-vermas p-0 col-3 d-flex align-items-center justify-content-center">
														<i class="fas fa-1x fa-shopping-cart color-naranja white-text"></i>
													</a>
												</div>
											</div>
											<div class="col-12 mt-4">
												<a href="" class="white-text btn-vermas">Ver más</a>
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
						<input type="text" id="name" name="name" placeholder="Nombre" class="bordes-welcome mb-4 bg-gris">
						<input type="email" id="email" name="email" placeholder="Correo" class="bordes-welcome mb-4 bg-gris">
						<input type="text" name="nameE" id="nameE" placeholder="Nombre de la empresa" class="bordes-welcome bg-gris mb-5">
						<button type="button" class="btn bg-naranja boton-ingresar font-weight-bold mx-0 mb-5">
							Enviar
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once RESOURCES."/Templates/footer.php"; ?>