<?php require_once RESOURCES."/Templates/client/header-profile.php"; ?>

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
                                    Cantidad productos
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
                            <tr class="color-gris">
                                <td>02/02/2021</td>
                                <td>4</td>
                                <td class="text-left">
                                    <div>Zapatillas</div>
                                    <div>Zapatos Nike</div>
                                    <div>Sandalias Dani</div>
                                </td>
                                <td>$585.000</td>
                                <td class="text-left">
                                    <div class="mb-4">
                                        <div class=" font-weight-bold white-text warning-color boton-historial">En proceso</div>
                                    </div>
                                    <div>
                                        <div class=" text-center font-weight-bold white-text grey boton-historial">Enviado</div>
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
                            <tr class="color-gris">
                                <td>02/02/2021</td>
                                <td>4</td>
                                <td class="text-left">
                                    <div>Zapatillas</div>
                                    <div>Zapatos Nike</div>
                                    <div>Sandalias Dani</div>
                                </td>
                                <td>$585.000</td>
                                <td class="text-left">
                                    <div class="mb-4">
                                        <div class=" font-weight-bold white-text warning-color boton-historial">En proceso</div>
                                    </div>
                                    <div>
                                        <div class=" text-center font-weight-bold white-text grey boton-historial">Enviado</div>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="mb-4">
                                        <a href="" class="cambiar-color font-weight-bold white-text grey boton-historial" data-toggle="modal" data-target="#cancelacion">Cancelar</a>
                                    </div>
                                    <div class="mb-4">
                                        <a href="" class=" font-weight-bold white-text grey boton-historial" data-toggle="modal" data-target="#devolucion">Devolver</a>
                                    </div>
                                    <div>
                                        <a href="" class=" font-weight-bold white-text grey boton-historial">Confirmar</a>
                                    </div>
                                </td>  
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



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