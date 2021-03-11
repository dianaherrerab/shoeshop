<!DOCTYPE html>
<html lang="es" class="full-height">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="id=edge">
	<title><?php echo APP_NAME; ?></title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/mdb.min.css">
	<!-- Font awesome CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css">
	<!-- Your custom styles (fuentes) -->
	<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/fonts.css">
	<!-- Your custom styles (scroll) -->
	<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/scroll.css">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/welcome.css">
	<link rel="icon" type="image/png" href="<?php echo URL; ?>/favicon.png">
	<!-- etiquetas seo -->
	<meta http-equiv="content-language" content="es-co">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="geography" content="Bucaramanga, Santander, Colombia">
	<meta name="city" content="Bucaramanga, Santander, Colombia,">
	<meta name="country" content="colombia,">
	<meta name="language" content="spanish">
	<meta http-equiv="expires" content="never">
	<meta name="copyright" content="2018 Hyperlink Soluciones Empresariales - www.hyperlinkse.com">
	<meta name="designer" content="Hyperlink Soluciones Empresariales - www.hyperlinkse.com">
	<meta name="author" content="Hyperlink Soluciones Empresariales - www.hyperlinkse.com">
	<meta name="publisher" content="Hyperlink Soluciones Empresariales - www.hyperlinkse.com">
	<meta name="revisit-after" content="1 days">
	<meta name="distribution" content="global">
	<meta name="robots" content="Index, Follow">
	<meta property="og:url" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:type" content="website" />
	<meta property="fb:app_id" content="">
	<meta property="og:locale" content="co_ES">
	<meta property="og:image" content="" />
	<meta property="og:image:url" content="" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:image:alt" content="" />
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="">
	<meta name="twitter:creator" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">
	<link rel="icon" type="image/ico" href="<?php echo URL; ?>/favicon.ico">
	<link rel="shortcut icon" href="<?php echo URL; ?>/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL; ?>/icons/favicon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL; ?>/icons/favicon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL; ?>/icons/favicon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL; ?>/icons/favicon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL; ?>/icons/favicon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL; ?>/icons/favicon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL; ?>/icons/favicon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL; ?>/icons/favicon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL; ?>/icons/favicon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo URL; ?>/icons/favicon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL; ?>/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL; ?>/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL; ?>/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo URL; ?>/manifest.json">
	<meta name="msapplication-TileColor" content="#4CCC4C">
	<meta name="msapplication-TileImage" content="<?php echo URL; ?>/icons/favicon-144x144.png">
	<meta name="theme-color" content="#4CCC4C">
</head>
<body class="scroll" manifest="manifest.cache">
	<?php 

	// campo del cual podemos obtener la ruta de la aplicación por medio de javascript
	echo "<input type='hidden' id='URL' name='URL' value='".URL."' />";

	?>
  <header class="container-fluid p-0 position-relative">
    <img src="<?php echo IMG?>/fondo-header.png" class="img-header d-none d-lg-block">
    <div class="position-absolute col-12 p-0 d-flex row mt-lg-1">
      <div class="col-lg-1 pl-5 pt-1 text-center d-lg-flex flex-column d-none align-items-center">
        <a class="nav-link p-0" data-toggle="modal" data-target="#exampleModal">
          <div class="circulo d-flex align-items-center justify-content-center">
            <i class="fas fa-2x fa-sign-in-alt color-naranja"></i>
          </div>	
        </a>
        <a class="nav-link p-0 mt-lg-3" data-toggle="modal" data-target="#exampleModal2">
          <div class="circulo d-flex align-items-center justify-content-center">
            <i class="fas fa-2x fa-edit color-naranja"></i>
          </div>
        </a>
      </div>
      <nav class="mb-1 navbar navbar-expand-lg d-none d-lg-block col-lg-10 p-0 align-items-start">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav col-12 justify-content-around align-items-center font-weight-bold">
            <li class="nav-item active"><a href="" class="white-text p-0 a-hover">DAMAS</a></li>
            <li class="nav-item"><a href="" class=" white-text p-0 a-hover">CABALLEROS</a></li>
            <img src="<?php echo IMG?>/shoes.png" class="zapato">
            <li class="nav-item"><a href="" class="color-naranja p-0 a-hover">NIÑOS</a></li>
            <li class="nav-item"><a href="" class="color-naranja p-0 a-hover">DEPORTIVOS</a></li>
          </ul>
        </div>
      </nav>
      <div class="col-lg-1 pt-1 text-center d-none d-lg-block">
        <a href="<?php echo URL; ?>/Client/shoppingcar" class="nav-link p-0 d-flex justify-content-center" >
          <div class="circulo bg-naranja d-flex align-items-center justify-content-center">
            <i class="fas fa-2x fa-shopping-cart color-naranja white-text"></i>
          </div>	
        </a>
      </div>
    </div>

    

    <a href="#" data-activates="slide-out" class="btn bg-naranja p-3 button-collapse d-block d-lg-none position-fixed zindex-botones">
      <i class="fas fa-bars"></i>
    </a>	
    <a href="#" data-activates="slide-out-2" class="btn red p-3 button-collapse d-block d-lg-none position-fixed margen-arriba zindex-botones">
      <i class="fas fa-search"></i>
    </a>

  </header>


  <div id="slide-out" class="side-nav side wide bg-naranja">
      <ul class="custom-scrollbar">

        <li class="text-center">
          <img src="<?php echo IMG?>/shoes.png" class="z-responsive">
        </li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header waves-effect arrow-r active">
                <i class="sv-slim-icon fas fa-user-check mr-2"></i>
                  Inicio de sesión
                <i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="#" class="waves-effect" data-toggle="modal" data-target="#exampleModal">
                      <span class="sv-normal">Ingresar</span>
                    </a>
                  </li>
                  <li>
                    <a class="waves-effect active" data-toggle="modal" data-target="#exampleModal2">
                      <span class="sv-slim">Registrarme</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r mt-3">
                <i class="sv-slim-icon fas fa-shopping-cart mr-2"></i>
                  Carrito de compras
              </a>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r mt-3">
                <i class="sv-slim-icon far fa-envelope mr-2"></i>
                  Contacto
                <i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-normal">Facebook</span></a>
                  </li>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-normal">Instagram</span></a>
                  </li>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-normal">Twitter</span></a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>

      </ul>
  </div>

  <div id="slide-out-2" class="side-nav side wide bg-morado">
      <ul class="custom-scrollbar">
      
        <li class="text-center">
          <img src="<?php echo IMG?>/zapato-azul.png" class="z-responsive">
        </li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header waves-effect arrow-r active">
                <i class="sv-slim-icon fas fa-search mr-2"></i>
                  Tipos
                <i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="#" class="waves-effect active">
                      <span class="sv-slim">Femeninos</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Masculinos</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Niños</span>
                    </a>
                  </li>
                    <?php
                    $categorias = $this->CategoryModel->getCategories();
											foreach ($categorias as $categoria) {
											echo '
												<li>
													<a href="#" class="waves-effect">
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
              <a class="collapsible-header waves-effect arrow-r active">
                <i class="sv-slim-icon fas fa-search mr-2"></i>
                  Marcas
                <i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="#" class="waves-effect active">
                      <span class="sv-slim">Adidas</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Nike</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Reebok</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Puma</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Skechers</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">New Balance</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Le Coq Sportif</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Converse</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Kappa</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="waves-effect">
                      <span class="sv-normal">Alpha Tauri</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>
  </div>

<!-- Modal para iniciar sesión -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header bg-naranja">
            <h5 class="modal-title white-text centrar" id="exampleModalLabel">Ingresar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>
        <form method="POST" action="<?php echo URL; ?>/auth/access" class="login-form">
	        <div class="errors-login"></div>
          <div class="modal-body px-5 pt-5 pb-0">
            <input type="email" name="username" id="username" placeholder="Correo" class="bordes-input form-control mb-4">
            <input type="password" name="password" id="password" placeholder="Contraseña" class="bordes-input form-control mb-4">
          </div>
          <div class="modal-footer pt-0 pb-5 px-5 text-center">
            <button id="btn-login" class="btn bg-morado boton-ingresar font-weight-bold mb-4">Iniciar sesión</button>
            <a class="color-gris m-0" data-toggle="modal" data-target="#recuperarContra">¿Olvidaste tu contraseña?</a>
          </div>
        </form>  
      </div>
    </div>
  </div>

<!-- Fin de modal para iniciar sesion -->

<!-- Modal para registrarse -->
<?php
$this->errors();
?>
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">

      <div class="modal-content">


        <div class="modal-c-tabs">

          <ul class="nav nav-tabs md-tabs tabs-2 bg-naranja m-0 " role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Cliente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-users mr-1"></i>
                Empresa</a>
            </li>
          </ul>

          <!-- Tab del cliente -->
          <div class="tab-content p-0">

            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
              <form method="POST" action="<?php echo URL; ?>/auth/register" class="register-form" name="register-form">
                <div class="errors-register"></div>
                <div class="modal-body px-5 pt-5 pb-0">
                  <input type="text" name="name" id="name" placeholder="Nombre" class="bordes-input form-control mb-4">
                  <input type="email" name="username" id="username" placeholder="Correo" class="bordes-input form-control mb-4">
                  <input type="password" name="password" id="password" placeholder="Contraseña" class="bordes-input form-control mb-4">
                </div>
                <div class="modal-footer pt-0 pb-5 px-5 text-center">
                  <button id="btn-register" class="btn bg-morado boton-ingresar font-weight-bold mb-4 mx-0">Crear cuenta</button>
                  <button type="button" class="btn bg-rojo boton-ingresar font-weight-bold mx-0" data-dismiss="modal">Cerrar</button>
                </div>
              </form>
            </div>
            <!-- fin de tab del cliente -->

            <!-- Tab del administradror/empresa -->
            <div class="tab-pane fade" id="panel8" role="tabpanel">
              <form method="POST" action="<?php echo URL; ?>/auth/register" class="register-form" name="register-form">
                <div class="errors-register"></div>
                <div class="modal-body px-5 pt-5 pb-0">
                  <input type="text" name="name" id="name" placeholder="Nombre" class="bordes-input form-control mb-4">
                  <input type="email" name="username" id="username" placeholder="Correo" class="bordes-input form-control mb-4">
                  <input type="text" name="nameE" id="nameE" placeholder="Nombre de la empresa" class="bordes-input form-control mb-4">
                </div>

                <div class="modal-footer pt-0 pb-5 px-5 text-center">
                  <button type="button" class="btn bg-morado boton-ingresar font-weight-bold mb-4 mx-0">Crear cuenta</button>
                  <button type="button" class="btn bg-rojo boton-ingresar font-weight-bold mx-0" data-dismiss="modal">Cerrar</button>
                </div>
              </form>
            </div>
            <!-- Tab del administradror/empresa -->
          </div>

        </div>
      </div>

    </div>
  </div>



  <div class="modal fade" id="recuperarContra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-naranja">
          <h5 class="modal-title white-text centrar1" id="exampleModalLabel">Recuperar Contraseña</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <div class="modal-body px-5 pt-5 pb-0">
          <p class="color-gris m-0 text-center mb-4">Enviaremos una nueva contraseña a este correo</p>
          <input type="email" id="email" name="email" placeholder="Correo" class="bordes-input form-control mb-4">
        </div>
        <div class="modal-footer pt-0 pb-5 px-5 text-center">
          <button type="button" class="btn bg-morado boton-ingresar font-weight-bold mb-4">Enviar</button>
        </div>
      </div>
    </div>
  </div>





		
	

