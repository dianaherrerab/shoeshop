<?php require_once RESOURCES."/Templates/client/header.php"; 

?>

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
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo IMG.'/bd-products'.$params['product']['image']; ?>"
                    alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo IMG?>/tacones.jpeg"
                    alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo IMG?>/tacones.jpeg"
                    alt="Third slide">
                </div>
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
                <select class="browser-default custom-select form-control2 col-12 col-md-5 col-lg-12 mb-4 mb-md-5 mb-lg-4">
                  <option selected>Seleccione una talla</option>
                  <option value="1">27</option>
                  <option value="2">34</option>
                  <option value="3">28</option>
                </select>
                <select class="browser-default custom-select form-control2 mb-5 col-12 col-md-5 col-lg-12">
                  <option selected>Seleccione cantidad</option>
                  <option value="1">27</option>
                  <option value="2">34</option>
                  <option value="3">28</option>
                </select>
              </div>
            </div>
            <div>
              <a href="" class=" font-weight-bold white-text bg-naranja boton-ingresar2 p-3">Agregar al carrito</a>
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