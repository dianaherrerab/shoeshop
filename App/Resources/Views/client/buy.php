<?php require_once RESOURCES."/Templates/client/header.php"; ?>

<div class="d-flex align-items-center justify-content-center py-5">
    <div class="container">
        <div class="p-0 espacio-titulo">
            <div class="font-weight-bold col-12 letra-info pb-5 color-morado text-center ">
                Datos de la compra
                <hr class="info-hr bg-naranja">
            </div>
            <form action="<?php echo URL; ?>/client/sale" method="POST">
                <div class="card card-body p-5 mb-5">
                    <div class="letra-subti font-weight-bold color-morado mb-5 d-flex align-items-center">
                        Remisión de compra
                    </div>
                    <h5 class="color-naranja m-0 font-weight-bold">
                        Información del comprador
                    </h5>
                    <hr class="bg-gris mb-5">
                    <div class="card-text">
                        <div class="container p-0">
                            <div class="row mb-5">
                                <div class="col-6 color-morado">
                                    <h6 class="mb-3">
                                        <span class="font-weight-bold ">Nombre: </span>
                                        <?php echo $params['user_data']['firstName'].' '.$params['user_data']['secondName'].' '.$params['user_data']['lastName'].' '.$params['user_data']['secondLastName'] ?>
                                    </h6>
                                    <h6 class="mb-3">
                                        <span class="font-weight-bold ">
                                            Teléfono: 
                                        </span>
                                        <?php echo $params['user_data']['cellphone']?>
                                    </h6>
                                    <h6 class="mb-3">
                                        <span class="font-weight-bold ">
                                            Dirección: 
                                        </span>
                                        <?php echo $params['user_data']['address'] ?>
                                    </h6>
                                </div>
                                <div class="col-6 color-morado">
                                    <h6 class="mb-3">
                                        <span class="font-weight-bold ">
                                            Tipo de documento: 
                                        </span>
                                        <?php 
                                        echo ( $params['user_data']['typeDocumentId'] == 1 ) ? 'Cédula de ciudadanía' : '';
                                        echo ( $params['user_data']['typeDocumentId'] == 2 ) ? 'Cedula de extranjería ' : '';
                                        echo ( $params['user_data']['typeDocumentId'] == 3 ) ? 'Pasaporte' : '';
                                        ?>
                                    </h6>
                                    <h6 class="mb-3">
                                        <span class="font-weight-bold ">
                                            Número de documento:
                                        </span>
                                        <?php echo $params['user_data']['documentNumber'] ?>
                                    </h6>
                                </div>
                            </div>
                            <h5 class="color-naranja m-0 font-weight-bold">
                                Información de la compra
                            </h5>
                            <hr class="bg-gris mb-5">
                            <div class="container">
                                <?php
                                foreach ($params['products'] as $product)
                                {
                                    echo '
                                    <div class="row mb-5 align-items-center">
                                        <div class="col-6 p-0 color-morado">
                                            <h6 class="font-weight-bold mb-3">
                                                '.$product['nombre'].'
                                            </h6>
                                        </div>
                                        <div class="col-3 color-morado">
                                            <h6 class="mb-3">
                                            '.$product['cantidad'].' unidad
                                            </h6>
                                        </div>
                                        <div class="col-3 color-morado">
                                            <h6 class="mb-3">
                                            '.$product['precio'].' COP
                                            </h6>
                                        </div>
                                    </div>';
                                }
                                ?> 
                            <h6>Total $ <?php echo $params['total']?> COP</h6>
                                  
                            </div>
                            <h5 class="color-naranja m-0 font-weight-bold">
                                Información del vendedor
                            </h5>
                            <hr class="bg-gris mb-5">
                            <div class="row mb-5">
                                <div class="col-6 color-morado">
                                    <h6 class="mb-3">
                                        <span class="font-weight-bold ">Nombre: </span>
                                        El mundo del deporte
                                    </h6>
                                    <h6 class="mb-3">
                                        <span class="font-weight-bold ">
                                            Teléfono: 
                                        </span>
                                        67865433
                                    </h6>
                                </div>
                                <div class="col-6 color-morado">
                                    <h6 class="mb-3">
                                        <span class="font-weight-bold ">
                                            NIT:
                                        </span>
                                        12353453
                                    </h6>
                                </div>
                            </div>
                            <h5 class="color-naranja m-0 font-weight-bold">
                                Método de pago 
                            </h5>
                            <hr class="bg-gris mb-5">
                            <div class="p-0 col-6 color-morado">
                                <h6 class="mb-3">
                                    <span class="font-weight-bold ">Contra entrega </span>
                                    (Único método)
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center">
                    <div class="modal-footer pt-0 pb-5 px-5 text-center">
                        <div class="container">
                            <div class="row justify-content-around">
                                <a href="" class="font-weight-bold white-text bg-morado boton-ingresar2 col-12 col-md-5 p-2" data-toggle="modal" data-target="#compra">Actualizar datos</a>
                                <button type="submit" class="font-weight-bold white-text bg-naranja boton-ingresar2 col-12 col-md-5 p-2 mt-3 mt-md-0" data-toggle="modal" data-target="#exampleModal">Realizar compra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>                      
        </div>
    </div>
</div>

<!-- Modal para actualizar datos -->
<div class="modal fade" id="compra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-naranja centrar-titulo">
          <h5 class="modal-title white-text" id="exampleModalLabel">
            Actualización de datos
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <div class="modal-body p-5">
          <div class="letra-subti font-weight-bold color-morado m-0 d-flex align-items-center">
              <i class="fas fa-lg fa-address-card pr-3"></i>
              Datos personales
          </div>
          <form action="<?php echo URL; ?>/Client/client/Update-profile" class="form-edit" method="post">
            <?php echo $this->__csrf_field(); ?>
	        <div class="errors-edit"></div>
	        <input type="hidden" name="user_id" value="<?php echo $this->auth->user->__get('id'); ?>">
            <div class="row my-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Primer nombre" aria-label="Primer nombre" name="firstName" value="<?php echo ucwords( $params['user_data']['firstName'] ); ?>">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Segundo nombre" aria-label="Segundo nombre"name="secondName" value="<?php echo ucwords( $params['user_data']['secondName'] ); ?>">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Primer apellido" aria-label="Primer apellido" name="lastName" value="<?php echo ucwords( $params['user_data']['lastName'] ); ?>">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Segundo apellido" aria-label="Segundo apellido" name="secondLastName" value="<?php echo ucwords( $params['user_data']['secondLastName'] ); ?>">
              </div>
            </div>
            <div class="row mb-5">
              <div class="col">
              <select class="browser-default form-control" name="typeDocumentId">
                  <option value="" disabled selected="">Tipo de documento</option>
                  <option value="1" name="typeDocumentId" <?php echo ( $params['user_data']['typeDocumentId'] == 1 ) ? 'selected' : ''; ?>>Cedula de ciudadanía</option>
                  <option value="2" name="typeDocumentId" <?php echo ( $params['user_data']['typeDocumentId'] == 2 ) ? 'selected' : ''; ?>>Cedula de extranjería</option>
                  <option value="3" name="typeDocumentId" <?php echo ( $params['user_data']['typeDocumentId'] == 3 ) ? 'selected' : ''; ?> >Pasaporte</option>
                </select>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Número" aria-label="Número" name="documentNumber" value="<?php echo ucwords( $params['user_data']['documentNumber'] ); ?>">
              </div>
            </div>
            <div>
              <div class="letra-subti font-weight-bold color-morado m-0 d-flex align-items-center">
                <i class="fas fa-lg fa-phone-square-alt pr-3"></i>
                            Datos de contacto
              </div>
            </div>
            <div class="row my-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Teléfono" aria-label="Tel" name="cellphone" value="<?php echo ucwords( $params['user_data']['cellphone'] ); ?>">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Dirección" aria-label="Dir" name="address" value="<?php echo ucwords( $params['user_data']['address'] ); ?>">
              </div>
            </div>
            <!-- <div class="text-center">
              <a href="" class=" font-weight-bold white-text bg-morado boton-ingresar2" data-toggle="modal" data-target="#exampleModal3">Actualizar</a>
            </div> -->
            <div class="text-center">
              <button type="submit" class="font-weight-bold white-text bg-morado boton-guardar">
                Guardar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<?php require_once RESOURCES."/Templates/footer.php"; ?>