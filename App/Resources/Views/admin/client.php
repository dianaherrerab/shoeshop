<?php require_once RESOURCES."/Templates/dashboard/header.php"; ?>

    <div class="container">
        <div class="card letra-subti borde-hist font-weight-bold white-text azul-oscuro p-3
        mb-5">
            <form class="form-search" method="get" action="<?php echo URL; ?>Admin/Client/Pagination" data-url-change="<?php echo URL; ?>Admin/Client/Listing">
                <div class="container">
                    <div class="row">
                        <select id="input_whr" name="input_whr" class="browser-default form-control btn waves-effect">
                            <option value="name" selected>Nombre</option>
                            <option value="documentNumber" selected>Documento</option>
                        </select>
                        <div class="col-sm-9 col-12 mb-sm-0 mb-3">
                            <input type="text" id="value_whr" name="value_whr" value="" class="form-control form-control-lg" placeholder="¿Qué deseas buscar?">
                        </div>
                        <div class="col-sm-3 col-12">
                            <button type="submit"  id="btn-search" class="btn bg-naranja boton-ingresar font-weight-bold">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-body p-0"> 
                <div class="letra-subti borde-hist font-weight-bold white-text m-0 d-flex align-items-center azul-oscuro p-3">
                    <i class="fas fa-lg fa-address-card pr-3"></i>
                    <h5 class="m-0">Listado de clientes</h5>
                </div>
                <div class=" table-responsive text-nowrap">
                    <table id="dtBasicExample" class="table" width="100%">
                        <thead class="bg-naranja text-center white-text">
                            <tr>
                                <th class="th-sm font-weight-bold">
                                    ID
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Cliente
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Documento
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Teléfono
                                </th>
                                <th class="th-sm font-weight-bold">
                                    Dirección
                                </th>
                            </tr>
                        </thead>
                        <tbody class=" content-pagination text-center">
                                <?php echo $params['list']; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    Listado <b class="raleway-bold"><?php echo LIMIT_PER_PAGE; ?></b> | Total: <b class="raleway-bold"><?php echo $params['cant']; ?></b>
                                </td>
                                <td colspan="6" class="render-pagination">
                                    <?php echo $params['render']; ?>
                                </td>
                            </tr>
						</tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php require_once RESOURCES."/Templates/dashboard/footer.php"; ?>