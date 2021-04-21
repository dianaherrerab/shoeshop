<form action="<?php echo URL; ?>Admin/User/Update-account" class="form-edit">
	
	<?php echo $this->__csrf_field(); ?>

	<div class="errors-edit"></div>

	<input type="hidden" name="id" value="<?php echo $this->auth->user->__get('id'); ?>">

	<div class="row">
		<div class="col-12">
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Nickname
				</div>
				<div class="col-sm-8 col-xl-9">
					<?php echo $params['store']['slug']; ?>
				</div>
			</div>
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Correo vinculado
				</div>
				<div class="col-sm-8 col-xl-9">
					<input type="text" name="username" class="form-control" placeholder="Correo vinculado" value="<?php echo $params['user']['username']; ?>">
				</div>
			</div>
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Nueva contraseña
				</div>
				<div class="col-sm-8 col-xl-9">
					<input type="password" name="password" class="form-control" placeholder="Nueva contraseña" value="">
				</div>
			</div>
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Repetir contraseña
				</div>
				<div class="col-sm-8 col-xl-9">
					<input type="password" name="password_repit" class="form-control" placeholder="Nueva contraseña" value="">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="col-sm-3 col-12">
                <button type="submit" class="btn bg-naranja boton-ingresar font-weight-bold">
				<i class="fa fa-save mr-2"></i>
				Guardar
				</button>
            </div>
		</div>
	</div>
</form>