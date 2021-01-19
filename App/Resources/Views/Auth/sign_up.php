<?php 

require_once RESOURCES."/Templates/Login/header.php";

$this->errors();
?>

<form method="POST" action="<?php echo URL; ?>/auth/register" class="register-form" name="register-form">
	<div class="errors-register"></div>
	<div class="row my-4 justify-content-center">
		<div class="col-12 col-md-10">
			<input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
		</div>
	</div>
	<div class="row my-4 justify-content-center">
		<div class="col-12 col-md-10">
			<input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
		</div>
	</div>
	<div class="row my-4 justify-content-center">
		<div class="col-12 col-md-10">
			<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
		</div>
	</div>
	<div class="row align-items-center justify-content-center">
		<div class="col-12 order-2 order-md-1 col-md-5 text-center text-md-left">
			<a href="<?php echo URL; ?>/Auth/login" title="Iniciar sesión" data-toggle="tooltip" class="btn btn-outline-danger raleway-regular">Iniciar sesión</a>
		</div>
		<div class="col-12 order-md-2 col-md-5 text-center">
			<div class="text-md-right my-2">
				<button id="btn-register" class="btn btn-primary" title="Registrarme" data-toggle="tooltip">Registrarme</button>
			</div>
		</div>
	</div>
</form>



<?php
require_once RESOURCES."/Templates/Login/footer.php";
?>