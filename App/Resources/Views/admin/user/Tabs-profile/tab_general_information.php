<form action="<?php echo URL; ?>/Admin/User/Update-profile" class="form-edit">
	
	<?php echo $this->__csrf_field(); ?>

	<div class="errors-edit"></div>

	<input type="hidden" name="userId" value="<?php echo $this->auth->user->__get('id'); ?>">

	<div class="row">
		<div class="col-12">
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Nombre empresa
				</div>
				<div class="col-sm-8 col-xl-9">
					<input type="text" name="name" class="form-control" placeholder="Nombre completo" value="<?php echo ucwords( $params['store']['name'] ); ?>">
				</div>
			</div>
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Nit
				</div>
				<div class="col-sm-5 col-xl-5">
					<input type="number" name="nit" class="form-control" placeholder="NIT" value="<?php echo $params['store']['nit']; ?>">
				</div>
			</div>
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Descripción
				</div>
				<div class="col-sm-8 col-xl-9">
					<textarea name="description" id="" cols="85" rows="2" class="form-control">
						<?php echo $params['store']['description']; ?>
					</textarea>
				</div>
			</div>
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Teléfono/Celular
				</div>
				<div class="col-sm-8 col-xl-9">
					<input type="text" name="cellphone" class="form-control" value="<?php echo $params['store']['cellphone']; ?>">
				</div>
			</div>
			<div class="row align-items-center content-group-inputs">
				<div class="mb-3 mb-sm-0 col-sm-4 col-xl-3">
					Dirección
				</div>
				<div class="col-sm-8 col-xl-9">
					<input type="text" name="address" class="form-control" value="<?php echo $params['store']['address']; ?>">
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