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
	<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/client/index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/client/unique.css">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/client/shoppingCar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/client/profile.css">
  <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/client/buy.css">
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
    <a href="#" data-activates="slide-out" class="btn bg-naranja p-3 button-collapse d-block d-lg-none position-fixed zindex-botones">
        <i class="fas fa-bars"></i>
    </a>	
    <a href="#" data-activates="slide-out-2" class="btn red p-3 button-collapse d-block d-lg-none position-fixed margen-arriba zindex-botones">
        <i class="fas fa-search"></i>
    </a>
    <img src="<?php echo IMG?>/fondo-header.png" class="img-header d-none d-lg-block">

      <!-- Este es el header cuando está grande la pag -->
    <div class="position-absolute pl-2 col-12 p-0 d-flex row mt-lg-1">
      <div class="col-lg-1 pl-5 pt-1 text-center d-lg-flex flex-column d-none align-items-center">
        <a class="nav-link p-0" href="<?php echo URL; ?>/client/client/profile">
          <div class="circulo d-flex align-items-center justify-content-center">
            <i class="fas fa-2x fa-user-alt color-naranja"></i> 
          </div>	
        </a>
        <a class="nav-link p-0 mt-lg-3" href="<?php echo URL; ?>/Auth/logout">
          <div class="circulo d-flex align-items-center justify-content-center">
            <i class="fas fa-2x fa-sign-out-alt color-naranja"></i>
          </div>
        </a>
      </div>
      <nav class="mb-1 navbar navbar-expand-lg d-none d-lg-block col-lg-10 p-0 align-items-start">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav col-12 justify-content-around align-items-center font-weight-bold">
            <li class="nav-item active"><a href="" class="white-text p-0 a-hover">DAMAS</a></li>
            <li class="nav-item"><a href="" class=" white-text p-0 a-hover">CABALLEROS</a></li>
            <a href="<?php echo URL; ?>/Client/">
              <img src="<?php echo IMG?>/shoes.png" class="zapato">
            </a>
            <li class="nav-item"><a href="" class="color-naranja p-0 a-hover">NIÑOS</a></li>
            <li class="nav-item"><a href="" class="color-naranja p-0 a-hover">DEPORTIVOS</a></li>
          </ul>
        </div>
      </nav>
      <div class="col-lg-1 pt-1 text-center d-none d-lg-block">
        <a href="<?php echo URL; ?>/Client/shoppingcar" class="nav-link p-0 d-flex justify-content-center">
          <div class="circulo bg-naranja d-flex align-items-center justify-content-center">
            <i class="fas fa-2x fa-shopping-cart color-naranja white-text"></i>
          </div>	
        </a>
      </div>
    </div>


  </header>

<!-- Header para cuando se hace pequeñita la pagina -->

  <div id="slide-out" class="side-nav side wide bg-naranja">
      <ul class="custom-scrollbar">

        <li class="text-center">
          <img src="<?php echo IMG?>/shoes.png" class="z-responsive">
        </li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header waves-effect arrow-r active" href="<?php echo URL; ?>/client/" >
                <i class="sv-slim-icon fas fa-home mr-2"></i>
                  Inicio
              </a>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r active mt-3" href="<?php echo URL; ?>/client/client/profile" >
                <i class="sv-slim-icon fas fa-user-alt mr-2"></i>
                  Mi perfil
              </a>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r mt-3" href="<?php echo URL; ?>/client/ShoppingCar">
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
			<li>
              <a class="collapsible-header waves-effect arrow-r mt-5" href="<?php echo URL; ?>/auth/logout">
                <i class="sv-slim-icon fas fa-sign-out-alt mr-2"></i>
                  Cerrar sesión
              </a>
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












		
	

