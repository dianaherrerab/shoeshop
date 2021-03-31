<?php require_once RESOURCES."/Templates/dashboard/header.php"; ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/dashboard/Console/user_zone.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/dashboard/Console/customer_tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>/dashboard/console/template.css">

<div class="container py-4 pb-lg-1 px-xl-5 content-header-profile">
	<div class="row py-0 header-profile">
		<div class="col-12">
			<div class="row align-items-center align-items-md-start h-sm-100">
				<div class="col-4 col-md-3 col-lg-2 h-100">
					<input type="file" name="croppie_upload_image" id="croppie_upload_image" class="d-none">
					<div class="content-image">
						<img src="<?php //echo IMG; ?>/users/<?php //echo $this->auth->user->__get('photo'); ?>" style="" class="photo_user_croppie">
						<label class="label_croppie_upload_image" for="croppie_upload_image" data-toggle="tooltip" title="Actualizar imagen">
							<i class="fa fa-camera"></i>
						</label>
					</div>
				</div>
				<div class="col-8 col-md-5 col-lg-6 h-sm-100 pt-3 mb-4 mb-md-0">
					<div class="row">
						<div class="col-lg-12">
							<h5 class="raleway-bold text-truncate profile-name mb-0">
								<span data-toggle="tooltip" title="Nombre: <?php echo ucwords( $params['user']['name'] ); ?>">
									<?php echo ucwords( $params['user']['name'] ); ?>
								</span>
							</h5>
						</div>
						<div class="col-lg-4">
							<small class="white-text text-truncate" data-toggle="tooltip" title="Estado: Activo">
								<span class="font-weight-bold">Estado:</span> Activo
							</small>
						</div>
						<div class="col-lg-6">
							<small class="white-text text-truncate" data-toggle="tooltip" title="Miembro desde <?php //echo ConvertTrait::date( $params['user']['created_at'] ); ?>">
								<span class="font-weight-bold">Miembro desde <?php echo ConvertTrait::date( $params['user']['created_at'] ); ?>
							</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row content-header-tabs px-xl-5">
		<div class="col-12 offset-lg-2 col-lg-10">
			<div class="header-tabs">
				<ul class="list-unstyled">
					
					<a class="btn-expanded-tabs" data-status="close">
						<i class="fa fa-ellipsis-v"></i>
					</a>

					<li class="tab col-md-2" data-tab="general-information">
						<a href="" class="raleway-regular active" data-toggle="tooltip" title="Información general">
							Información general
						</a>
					</li>
					<li class="tab col-md-2" data-tab="settings-account">
						<a href="" class="raleway-regular" data-toggle="tooltip" title="Configurar cuenta">
							Configurar cuenta
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row px-xl-5 content-tabs">
		<div id="tab-general-information" class="content-tab active p-4">
			<!-- requerimos el contenido de la tab correspondiente -->
			<?php require_once RESOURCES."/Views/admin/User/Tabs-profile/tab_general_information.php"; ?>
		</div>
		<div id="tab-settings-account" class="content-tab p-4">
			<!-- requerimos el contenido de la tab correspondiente -->
			<?php require_once RESOURCES."/Views/admin/User/Tabs-profile/tab_settings_account.php"; ?>
		</div>
	</div>
</div>



<!-- Ventana modal para actualizar la foto del usuario -->
<div class="modal fade" id="croppie_image" tabindex="-1" role="dialog" aria-labelledby="croppie_image_label" aria-hidden="true">
	<!-- Change class .modal-sm to change the size of the modal -->
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title w-100" id="croppie_image_label">Ajustar imagen</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="croppie_uploaded_image">
					<div id="croppie_uploaded_image_edit"></div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-sm btn_cancel_croppie" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-success btn-sm btn_finish_croppie" data-url="<?php echo URL; ?>/Console/User-zone/User/Upload-image">Finalizar</button>
			</div>
		</div>
	</div>
</div>


<?php require_once RESOURCES."/Templates/dashboard/footer.php"; ?>
<script type="text/javascript" src="<?php echo JS; ?>/customer_tabs.js"></script>