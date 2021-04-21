<?php 

class DefaultTemplate
{
	// funcion para crear el contenido de la pagina
	// los parametros son los datos basicos que contendra el mensaje
	public static function template( $sale )
	{
		$css = "<?php require_once RESOURCES.'/Templates/client/header.php'; ?>";
		$body = "
			<html>
				".$css."
				<body style='background: #efefef;'>
					<div style='background: #2d4d58; color: white; text-align: center; padding: 10px;'>
						<h2>Remisión de Compra</h2>
					</div>
					<div>
						<div>
							<div>
								<form>
									<div>
										<h5 style='font-size:17px; color:#ff5b16'>
											Información del comprador
										</h5>
										<hr style='background-color:#2d4d58; height:2px; margin-top:2px;'>
										<div>
											<div>
												<div>
													<h6>
														<span>Nombre: </span>
														".$sale['userId']."
													</h6>
													<h6>
														<span>
															Teléfono: 
														</span>
														".$sale['userId']."
													</h6>
													<h6>
														<span>
															Dirección: 
														</span>
														".$sale['userId']."
													</h6>
													<h6>
														<span>
															Tipo de documento: 
														</span>
														".$sale['userId']."
													</h6>
													<h6>
														<span>
															Número de documento:
														</span>
														".$sale['userId']."
													</h6>	
												</div>
												<h5 style='font-size:17px; color:#ff5b16'>
													Información de la compra
												</h5>
												<hr style='background-color:#2d4d58; height:2px; margin-top:2px;'>
												<div>
													<div>
														<div>
															<h5>
																".$sale['total']."
															</h5>
														</div>
													</div> 
												</div>
												<h5 style='font-size:17px; color:#ff5b16'>
													Información del vendedor
												</h5>
												<hr style='background-color:#2d4d58; height:2px; margin-top:2px;'>
												<div>
													<div>
														<h6>
															<span>Nombre: </span>
															El mundo del deporte
														</h6>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>
																Teléfono: 
															</span>
															67865433
														</h6>
														<h6 class='mb-3'>
															<span class='font-weight-bold '>
																NIT:
															</span>
															12353453
														</h6>
													</div>
												</div>
												<h5 style='font-size:17px; color:#ff5b16';>
													Método de pago 
												</h5>
												<hr style='background-color:#2d4d58; height:2px; margin-top:2px;'>
												<div>
													<h6>
														<span>Contra entrega </span>
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