<?php require_once RESOURCES."/Templates/dashboard/header.php"; ?>

    <div class="container">
        <div class="card letra-subti borde-hist font-weight-bold white-text azul-oscuro p-3
        mb-5">
            <form action="" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-12 mb-sm-0 mb-3">
                            <input class="form-control form-control-lg" type="text" placeholder="¿Qué deseas buscar?">
                        </div>
                        <div class="col-sm-3 col-12">
                            <button type="submit" class="btn bg-naranja boton-ingresar font-weight-bold">Buscar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-body p-0"> 
                <div class="letra-subti borde-hist font-weight-bold white-text m-0 d-flex align-items-center azul-oscuro p-3">
                    <i class="far fa-lg fa-edit pr-3"></i>
                    <h5 class="m-0">Editar productos</h5>
                </div>
                <form action="" method="post" class="form-edit px-5 pb-5">
                    <div class="row my-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Nombre" aria-label="nombre" value="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Categoría" aria-label="Categoria" value="">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Marca" aria-label="Marca" value="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Género" aria-label="genero" value="">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Material" aria-label="Material" value="">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Color" aria-label="color" value="">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <textarea class="form-control form-control1 p-3" id="" placeholder="Descripción"></textarea>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <input type="text" class="form-control form-control1" placeholder="Precio" aria-label="Precio" value="">
                        </div>
                    </div>
                    <div class="container mb-5 form-control form-control1 altura-galeria">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="" class="color-morado">
                                <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4  mb-4 mb-md-0 d-flex align-items-center justify-content-center position-relative">
                                <img class="card-imagen" src="<?php echo IMG?>/zapatilla.jpeg">
                                <a href="" class="position-absolute posicion-icono">
                                    <i class="far fa-2x fa-times-circle color-morado"></i>
                                </a>
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0 d-flex align-items-center justify-content-center position-relative">
                                <img class="card-imagen" src="<?php echo IMG?>/zapatilla.jpeg">
                                <a href="" class="position-absolute posicion-icono">
                                    <i class="far fa-2x fa-times-circle color-morado"></i>
                                </a>
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0 d-flex align-items-center justify-content-center position-relative">
                                <img class="card-imagen" src="<?php echo IMG?>/zapatilla.jpeg">
                                <a href="" class="position-absolute posicion-icono">
                                    <i class="far fa-2x fa-times-circle color-morado"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 p-0 mb-5">
                        <div>
                            <span class="table-add float-right mb-3 mr-2">
                                <a href="#!" class="color-morado">
                                    <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
                                </a>
                            </span>
                            <div id="table" class="table-editable">
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                        <tr class="color-morado text-center">
                                            <th class="font-weight-bold">Talla</th>
                                            <th class="font-weight-bold">Cantidad</th>
                                            <th class="font-weight-bold">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
                                            <td class="pt-3-half" contenteditable="true">30</td>
                                            <td>
                                                <span class="table-remove">
                                                    <button type="button" class="btn bg-naranja btn-rounded btn-sm my-0">
                                                        Eliminar
                                                    </button>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
                                            <td class="pt-3-half" contenteditable="true">45  
                                            </td>
                                            <td>
                                                <span class="table-remove">
                                                    <button type="button" class="btn bg-naranja btn-rounded btn-sm my-0">
                                                        Eliminar
                                                    </button>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pt-3-half" contenteditable="true">Guadalupe House</td>
                                            <td class="pt-3-half" contenteditable="true">26</td>
                                            <td>
                                                <span class="table-remove">
                                                    <button type="button" class="btn bg-naranja btn-rounded btn-sm my-0">
                                                        Eliminar
                                                    </button>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="hide">
                                            <td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
                                            <td class="pt-3-half" contenteditable="true">31</td>
                                            <td>
                                                <span class="table-remove">
                                                    <button type="button" class="btn bg-naranja btn-rounded btn-sm my-0">
                                                        Eliminar
                                                    </button>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="font-weight-bold white-text bg-morado boton-editar">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once RESOURCES."/Templates/dashboard/footer.php"; ?>