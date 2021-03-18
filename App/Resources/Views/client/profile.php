<?php require_once RESOURCES."/Templates/client/header.php"; ?>

<div class="d-flex align-items-center justify-content-center py-5">
    <div class="container">
        <div class="p-0 espacio-titulo">
          <div class="font-weight-bold col-12 letra-info pb-5 color-morado text-center ">
            Mi información personal
            <hr class="info-hr bg-naranja">
          </div>
          <div>
            <div class="letra-subti font-weight-bold color-morado m-0 d-flex align-items-center">
              <i class="fas fa-lg fa-address-card pr-3"></i>
              Datos personales
            </div>
          </div>
          <form action="<?php echo URL; ?>/Client/client/Update-profile" class="form-edit" method="post">
            <?php echo $this->__csrf_field(); ?>
	        <div class="errors-edit"></div>
	        <input type="hidden" name="user_id" value="<?php echo $this->auth->user->__get('id'); ?>">
            <div class="row my-5">
              <div class="col">
                <input type="text" class="form-control" placeholder="Primer nombre" aria-label="Primer nombre" name="firstName" value="<?php echo ucwords( $params['user_data']['firstName'] ); ?>">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Segundo nombre" aria-label="Segundo nombre" name="secondName" value="<?php echo ucwords( $params['user_data']['secondName'] ); ?>">
              </div>
            </div>
            <div class="row mb-5">
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
            <div class="row my-5">
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



<img src="<?php echo IMG?>/fondo-gris.png" class="fondo-gris m-0">

<div class="bg-gris position-relative">
    <div class="container d-flex justify-content-center px-0 py-5">
        <div class="p-0 m-0 text-center position-div">
            <div class="color-morado font-weight-bold letra-info">
                Historial de compras
            </div>
            <hr class="welcome-hr">
        </div>
        <div class="card borde-abajo">
            <div class="card-body p-0"> 
                <div class="letra-subti borde-hist font-weight-bold white-text m-0 d-flex align-items-center bg-morado p-3">
                    <i class="fas fa-lg fa-address-card pr-3"></i>
                    <h5 class="m-0">Listado de compras</h5>
                </div>
                <div class=" table-responsive text-nowrap">
                    <table id="dtBasicExample" class="table" width="100%">
                        <thead class="bg-naranja text-center white-text">
                            <tr>
                                <th class="th-sm font-weight-bold">
                                    Fecha
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Tienda
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Nombre Productos
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Precio
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Estado
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                foreach ($params['sales'] as $sale) {
                                    echo '
                                    <tr class="color-gris">
                                        <td>'.$sale['date'].'</td>
                                        <td>'.$sale['store'].'</td>
                                        <td class="text-left">
                                        ';
                                        // Obtenemos los productos de cada compra
		                                $saleDetails = $this->SaleDetailModel->find_all($sale['saleId']);
                                        foreach ($saleDetails as $saleDetail)  
                                        {
                                            echo '<div>'.$saleDetail['name'].'</div>';
                                        }  
                                    echo'</td>
                                        <td>'.$sale['totalPrice'].'</td>
                                        <td class="text-left">
                                            <div class="mb-4">
                                                <div class=" font-weight-bold white-text warning-color boton-historial">'.$sale['status'].'</div>
                                            </div>
                                        </td>
                                        <td class="text-left">
                                            <div class="mb-4">
                                                <a href="" class=" font-weight-bold white-text grey boton-historial" data-toggle="modal" data-target="#cancelacion">Cancelar</a>
                                            </div>
                                            <div class="mb-4">
                                                <a href="" class=" font-weight-bold white-text grey boton-historial" data-toggle="modal" data-target="#devolucion">Devolver</a>
                                            </div>
                                            <div>
                                                <a href="" class=" font-weight-bold white-text grey boton-historial">Confirmar</a>
                                            </div>
                                        </td>  
                                    </tr>
                                    ';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para cancelar una compra -->

<div class="modal fade" id="cancelacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-naranja">
            <h5 class="modal-title white-text texto-modal" id="exampleModalLabel">Cancelación de compra</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>
        <div class="modal-body px-5 py-5 pb-0">
            <div class="container">
                <div class="form-check p-0">
                    <div class="container">
                        <div class="d-flex flex-column mb-5">
                            <input type="checkbox" class="form-check-input" id="materialIndeterminate2" checked>
                            <label class="form-check-label" for="materialIndeterminate2">Zapatillas</label>
                            <input type="checkbox" class="form-check-input" id="materialIndeterminate3" checked>
                            <label class="form-check-label" for="materialIndeterminate3">Zapatillas Nike</label>
                            <input type="checkbox" class="form-check-input" id="materialIndeterminate4" checked>
                            <label class="form-check-label" for="materialIndeterminate4">Zapatos</label>
                        </div>
                        <input type="text" class="form-control" placeholder="Justificación" aria-label="Justificacion" value="No me gustaron">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer pt-0 pb-5 px-5 text-center">
            <button type="button" class="btn bg-morado boton-ingresar font-weight-bold">Guardar cambios</button>
        </div>
      </div>
    </div>
</div>
<!-- Modal para devolver una compra -->
<div class="modal fade" id="devolucion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-naranja">
            <h5 class="modal-title white-text texto-modal" id="exampleModalLabel">Devolución de compra</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>
        <div class="modal-body px-5 py-5 pb-0">
            <div class="container">
                <div class="form-check p-0">
                    <div class="container">
                        <div class="d-flex flex-column mb-5">
                            <input type="checkbox" class="form-check-input" id="materialIndeterminate2" checked>
                            <label class="form-check-label" for="materialIndeterminate2">Zapatillas</label>
                            <input type="checkbox" class="form-check-input" id="materialIndeterminate3" checked>
                            <label class="form-check-label" for="materialIndeterminate3">Zapatillas Nike</label>
                            <input type="checkbox" class="form-check-input" id="materialIndeterminate4" checked>
                            <label class="form-check-label" for="materialIndeterminate4">Zapatos</label>
                        </div>
                        <select class="browser-default form-control">
                            <option selected>Tipo de devolución</option>
                            <option value="1">Daño</option>
                            <option value="2">Diferente color</option>
                            <option value="3">sdfsdf</option>
                            <option value="4">sdgdg</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer pt-0 pb-5 px-5 text-center">
            <button type="button" class="btn bg-morado boton-ingresar font-weight-bold">Guardar cambios</button>
        </div>
      </div>
    </div>
</div>
<?php require_once RESOURCES."/Templates/footer.php"; ?>