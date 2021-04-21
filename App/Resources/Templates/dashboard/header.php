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
    <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/admin/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/pagination.css">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <nav class="navbar navbar-expand-lg bg-naranja altura-header px-0">
                    <div class="container-fluid">
                        <div class="row col-12 p-0">
                            <div class="col-lg-3 col-12 d-flex justify-content-center p-0">
                                <img src="<?php echo IMG?>/dashboard/zapato-dashboard.png" class="medidas-zapatos">
                            </div>
                            <div class="col-lg-9 p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <div class="btn-group">
                                                <a class="btn bg-naranja dropdown-toggle text-capitalize white-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-user pr-2"></i>Mi perfil
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right borde-dropdown">
                                                    <a href="<?php echo URL; ?>/Admin/Store/profile" class="dropdown-item py-0 mt-2">
                                                        <i class="fas fa-user pr-2 color-naranja"></i>Perfil
                                                    </a>
                                                    <a href="<?php echo URL; ?>/Auth/logout" class="dropdown-item py-0">
                                                        <i class="fas fa-sign-out-alt color-naranja pr-2"></i>Cerrar sesión
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-3 p-0 d-none d-lg-block">
                <aside class="azul-oscuro">
                    <ul class="nav flex-column pt-4 pb-5">
                        <li class="nav-item px-5">
                            <a class="nav-link active white-text letra-aside d-flex align-items-center" href="<?php echo URL?>Admin/">
                                <i class="fas fa-home fa-lg mr-3"></i>
                                Inicio
                            </a>
                        </li>
                        <hr class="linea-aside">
                        <li class="nav-item px-5">
                            <a class="nav-link white-text letra-aside d-flex align-items-center" href="<?php echo URL?>Admin/Client">
                                <i class="fas fa-users fa-lg mr-3"></i>
                                Clientes
                            </a>
                        </li>
                        <hr class="linea-aside">
                        <li class="nav-item px-5">
                            <a class="nav-link white-text letra-aside d-flex align-items-center" href="<?php echo URL?>Admin/Product">
                                <i class="fas fa-shopping-cart fa-lg mr-3"></i>
                                Productos
                            </a>
                        </li>
                        <hr class="linea-aside">
                        <li class="nav-item px-5">
                            <a class="nav-link white-text letra-aside d-flex align-items-center" href="<?php echo URL?>Admin/Sale">
                                <i class="fas fa-clipboard-list fa-lg mr-3"></i>
                                Ventas
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex justify-content-center mt-5">
                        <img src="<?php echo IMG?>/dashboard/dashboard.png" class="ancho-img-aside">
                    </div>
                </aside>
            </div>
            <a href="#" data-activates="slide-out-dashboard" class="btn bg-morado p-3 button-collapse d-block d-lg-none position-fixed altura-a zindex-botones">
                <i class="fas fa-search"></i>
            </a>

            <div id="slide-out-dashboard" class="side-nav side wide bg-morado">
                <ul class="custom-scrollbar">

                    <li class="text-center">
                        <img src="<?php echo IMG?>/zapato-azul.png" class="z-responsive">
                    </li>
                    <li>
                        <ul class="collapsible collapsible-accordion py-3">
                            <li>
                                <a class="collapsible-header waves-effect arrow-r" href="<?php echo URL; ?>/Admin/Store/profile">
                                    <i class="sv-slim-icon fas fa-user mr-2"></i>
                                    Mi perfil
                                </a>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect arrow-r mt-3 " href="<?php echo URL?>Admin/">
                                    <i class="sv-slim-icon fas fa-home mr-2"></i>
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect arrow-r mt-3" href="<?php echo URL?>Admin/Client">
                                    <i class="sv-slim-icon fas fa-users mr-2"></i>
                                    Clientes
                                </a>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect arrow-r mt-3" href="<?php echo URL?>Admin/Product">
                                    <i class="sv-slim-icon fas fa-shopping-cart mr-2"></i>
                                    Productos
                                </a>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect arrow-r mt-3" href="<?php echo URL?>Admin/Sale">
                                    <i class="sv-slim-icon fas fa-clipboard-list mr-2"></i>
                                    Ventas
                                </a>
                            </li>
                            <li>
                                <a class="collapsible-header waves-effect arrow-r mt-4" href="<?php echo URL; ?>/Auth/logout">
                                    <i class="sv-slim-icon fas fa-sign-out-alt mr-2"></i>
                                    Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <article class="col-12 col-lg-9 py-5 bg-gris">
                
            

    













		
	

