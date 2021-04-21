<?php 
require_once RESOURCES."/Templates/client/header.php";

class DefaultTemplate
{
	// funcion para crear el contenido de la pagina
	// los parametros son los datos basicos que contendra el mensaje
	public static function template( $sale )
	{
		$body = "
			<html> 
				<body style='background: #efefef;'>
					<div style='background: rgb(27, 176, 224); color: white; text-align: center; padding: 10px;'>
						<h2>".APP_NAME."</h2>
					</div>
					<div class='d-flex align-items-center justify-content-center py-5'>
						<div class='container'>
							<div class='p-0 espacio-titulo'>
								<div class='font-weight-bold col-12 letra-info pb-5 color-morado text-center'>
									Datos de la compra
									<hr class='info-hr bg-naranja'>
								</div>
								<form action='' method=''>
									<div class='card card-body p-5 mb-5'>
										<div class='letra-subti font-weight-bold color-morado mb-5 d-flex align-items-center'>
											Remisión de compra
										</div>
										<h5 class='color-naranja m-0 font-weight-bold'>
											Información del comprador
										</h5>
										<hr class='bg-gris mb-5'>
										<div class='card-text'>
											<div class='container p-0'>
												<div class='row mb-5'>
													<div class='col-6 color-morado'>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>Nombre: </span>
															".$sale['userId']."
														</h6>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>
																Teléfono: 
															</span>
															".$sale['userId']."
														</h6>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>
																Dirección: 
															</span>
															".$sale['userId']."
														</h6>
													</div>
													<div class='col-6 color-morado'>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>
																Tipo de documento: 
															</span>
															".$sale['userId']."
														</h6>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>
																Número de documento:
															</span>
															".$sale['userId']."
														</h6>
													</div>
												</div>
												<h5 class='color-naranja m-0 font-weight-bold'>
													Información de la compra
												</h5>
												<hr class='bg-gris mb-5'>
												<div class='container'>
													<div class='row mb-5 align-items-center'>
														
													
														<div class='col-3 color-morado p-0 mt-5'>
															<h5 class='mb-3 font-weight-bold'>
																".$sale['total']."
															</h5>
														</div>
													</div> 
												</div>
												<h5 class='color-naranja m-0 font-weight-bold'>
													Información del vendedor
												</h5>
												<hr class='bg-gris mb-5'>
												<div class='row mb-5'>
													<div class='col-6 color-morado'>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>Nombre: </span>
															El mundo del deporte
														</h6>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>
																Teléfono: 
															</span>
															67865433
														</h6>
													</div>
													<div class='col-6 color-morado'>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>
																NIT:
															</span>
															12353453
														</h6>
													</div>
												</div>
												<h5 class='color-naranja m-0 font-weight-bold'>
													Método de pago 
												</h5>
												<hr class='bg-gris mb-5'>
												<div class='p-0 col-6 color-morado'>
													<h6 class='mb-3'>
														<span class='font-weight-bold '>Contra entrega </span>
														(Único método)
													</h6>
												</div>
											</div>
										</div>
									</div>
								</form>                      
							</div>
						</div>
					</div>
				</body> 
			</html>
			<br />
		";
		return $body; 
	}
}