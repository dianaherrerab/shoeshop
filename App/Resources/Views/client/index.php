<?php require_once RESOURCES."/Templates/client/header.php"; 
$productos = $this->ProductModel->getProducts( 1 );
$categorias = $this->CategoryModel->getCategories();
$tienda = $this->StoreModel->find( 1 );
?>


	<div class="d-flex align-items-center justify-content-center py-5">
      <div class="container">
        <div class="row p-0 text-center espacio-titulo">
          <div class="font-weight-bold col-12 tam-header-client p-0">
            <span class="color-morado">EL MUNDO </span> <span class="color-naranja">DEL DEPORTE</span>
          </div>
          <p class="col-12 tamaño-letra-parrafo color-gris m-0">Todo lo que deseas está a tu alcance</p>
          <div class="col-12 col-lg-5 my-5 d-flex align-items-center justify-content-center">
            <img src="<?php echo IMG?>/shoes.png" class="propiedad-zapato">
          </div>
          <div class="col-12 col-lg-7 mt-0 mb-5 my-lg-5 d-flex align-items-center">
            <h6 class="m-0 px-5 px-md-0">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ex fugit recusandae ad, harum voluptatum cum delectus aliquam cumque perspiciatis vitae nostrum. Nam laudantium blanditiis tempora officiis, ipsum iusto! Facere.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquid harum .
              lorem
            </h6>
          </div>
          <div class="col-12 col-md-4 mb-3 mb-md-0 p-0 d-flex justify-content-center justify-content-md-start align-items-center">
            <h5 class="color-morado m-0 p-0 d-flex align-items-center font-weight-bold">
              <i class="fas fa-2x fa-id-card color-morado pr-3 d-none d-md-block"></i>
              NIT: 123456789
            </h5>
          </div>
          <div class="col-12 col-md-4 mb-3 mb-md-0 p-0 d-flex justify-content-center align-items-center">
            <h5 class="color-morado m-0 p-0 d-flex align-items-center font-weight-bold">
              <i class="fas fa-2x fa-phone-square-alt color-morado pr-3 d-none d-md-block"></i>  
              TEL: 12345678
            </h5>
          </div>
          <div class="col-12 col-md-4 p-0 d-flex justify-content-center justify-content-md-end align-items-center">
            <h5 class="color-morado  m-0 p-0 d-flex align-items-center font-weight-bold">
              <i class="fas fa-2x fa-map-marker-alt color-morado pr-3 d-none d-md-block"></i>
              Calle 34 BE 55A barrio La UIS
            </h5>
			<?php 
			foreach($tienda as $clave){
				echo $clave[name];
			}
	  		?>
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
										<li>
											<a href="#" class="waves-effect  color-gris a-hover">
											<span class="sv-normal">Deportivos</span>
											</a>
										</li>
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
						<div class="col-12 col-sm-6 col-lg-4 py-4">
							<div class="card text-center bordes-cards py-3">
								<img class="card-img-top zapato-card" src="<?php echo IMG?>/shoes.png">
								<div class="card-body px-1">
									<h4 class="color-morado font-weight-bold">Zapato</h4>
									<h4 class="color-naranja font-weight-bold">30.000 COP</h4>
									<div class="container-fluid">
										<div class="row">
											<select class="browser-default custom-select m-auto form-control2 col-4">
												<option selected>C</option>
												<option value="1">27</option>
												<option value="2">34</option>
												<option value="3">28</option>
											</select>
											<select class="browser-default custom-select m-auto form-control2 col-4">
												<option selected>T</option>
												<option value="1">27</option>
												<option value="2">34</option>
												<option value="3">28</option>
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
						<div class="col-12 col-sm-6 col-lg-4 py-4">
							<div class="card text-center bordes-cards py-3">
								<img class="card-img-top zapato-card" src="<?php echo IMG?>/shoes.png">
								<div class="card-body px-1">
									<h4 class="color-morado font-weight-bold">Zapato</h4>
									<h4 class="color-naranja font-weight-bold">30.000 COP</h4>
									<div class="container-fluid">
										<div class="row">
											<select class="browser-default custom-select m-auto form-control2 col-4">
												<option selected>C</option>
												<option value="1">27</option>
												<option value="2">34</option>
												<option value="3">28</option>
											</select>
											<select class="browser-default custom-select m-auto form-control2 col-4">
												<option selected>T</option>
												<option value="1">27</option>
												<option value="2">34</option>
												<option value="3">28</option>
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
						<div class="col-12 col-sm-6 col-lg-4 py-4">
							<div class="card text-center bordes-cards py-3">
								<img class="card-img-top zapato-card" src="<?php echo IMG?>/shoes.png">
								<div class="card-body px-1">
									<h4 class="color-morado font-weight-bold">Zapato</h4>
									<h4 class="color-naranja font-weight-bold">30.000 COP</h4>
									<div class="container-fluid">
										<div class="row">
											<select class="browser-default custom-select m-auto form-control2 col-4">
												<option selected>C</option>
												<option value="1">27</option>
												<option value="2">34</option>
												<option value="3">28</option>
											</select>
											<select class="browser-default custom-select m-auto form-control2 col-4">
												<option selected>T</option>
												<option value="1">27</option>
												<option value="2">34</option>
												<option value="3">28</option>
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
						<div class="col-12 col-sm-6 col-lg-4 py-4">
							<div class="card text-center bordes-cards py-3">
								<img class="card-img-top zapato-card" src="<?php echo IMG?>/shoes.png">
								<div class="card-body px-1">
									<h4 class="color-morado font-weight-bold">Zapato</h4>
									<h4 class="color-naranja font-weight-bold">30.000 COP</h4>
									<div class="container-fluid">
										<div class="row">
											<select class="browser-default custom-select m-auto form-control2 col-4">
												<option selected>C</option>
												<option value="1">27</option>
												<option value="2">34</option>
												<option value="3">28</option>
											</select>
											<select class="browser-default custom-select m-auto form-control2 col-4">
												<option selected>T</option>
												<option value="1">27</option>
												<option value="2">34</option>
												<option value="3">28</option>
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