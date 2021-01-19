<?php require_once RESOURCES."/Templates/Login/header.php"; ?>

<form method="POST" action="<?php echo URL; ?>/auth/access" class="login-form">
	<div class="errors-login"></div>
	<div class="row my-4 justify-content-center">
		<div class="col-12 col-md-10">
			<input type="email" class="form-control" name="username" id="username" placeholder="Usuario" class="py-5">
		</div>
	</div>
	<div class="row my-4 justify-content-center">
		<div class="col-12 col-md-10">
			<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
		</div>
	</div>
	<div class="row align-items-center justify-content-center">
		<div class="col-12 order-2 order-md-1 col-md-5 text-center text-md-left">
			<a href="<?php echo URL; ?>/Auth/recover" title="¿Olvidó su contraseña?" data-toggle="tooltip" class="btn btn-sm btn-outline-danger raleway-regular">¿Olvidó su contraseña?</a>
		</div>
		<div class="col-12 order-md-2 col-md-5 text-center">
			<div class="text-md-right my-2">
				<button id="btn-login" class="btn btn-primary" title="Ingresar" data-toggle="tooltip">Ingresar</button>
			</div>
		</div>
	</div>
	<div class="row mt-5 justify-content-center">
		<div class="col-12 col-md-10 text-center">
			¿No eres miembro de <?php echo APP_NAME; ?>? <a href="<?php echo URL; ?>/Auth/sign_up" title="Crear cuenta" data-toggle="tooltip" class="text-primary raleway-regular">Crear cuenta</a>
		</div>
	</div>
</form>



<?php require_once RESOURCES."/Templates/Login/footer.php"; ?>