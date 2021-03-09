<?php require_once RESOURCES."/Templates/client/header.php"; ?>

<div class="d-flex align-items-center justify-content-center py-5">
    <div class="container">
        <div class="p-0 espacio-titulo">
            <div class="font-weight-bold col-12 letra-info pb-5 color-morado text-center ">
                Datos de la compra
                <hr class="info-hr bg-naranja">
            </div>
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
                                    Karen Daniela Rodríguez Martínez
                                </h6>
                                <h6 class="mb-3">
                                    <span class="font-weight-bold ">
                                        Teléfono: 
                                    </span>
                                    67865433
                                </h6>
                                <h6 class="mb-3">
                                    <span class="font-weight-bold ">
                                        Dirección: 
                                    </span>
                                    Calle 7 #10-18 barrio la cumbre
                                </h6>
                            </div>
                            <div class="col-6 color-morado">
                                <h6 class="mb-3">
                                    <span class="font-weight-bold ">
                                        Tipo de documento: 
                                    </span>
                                    Cédula de ciudadanía
                                </h6>
                                <h6 class="mb-3">
                                    <span class="font-weight-bold ">
                                        Número de documento:
                                    </span>
                                    1234456564
                                </h6>
                            </div>
                        </div>
                        <h5 class="color-naranja m-0 font-weight-bold">
                            Información de la compra
                        </h5>
                        <hr class="bg-gris mb-5">
                        <div class="container">
                            <div class="row mb-5 align-items-center">
                                <div class="col-6 p-0 color-morado">
                                    <h6 class="font-weight-bold mb-3">
                                        Zapatilla Dama Cuero
                                    </h6>
                                </div>
                                <div class="col-3 color-morado">
                                    <h6 class="mb-3">
                                        2 Unidades
                                    </h6>
                                </div>
                                <div class="col-3 color-morado">
                                    <h6 class="mb-3">
                                        64.000 COP
                                    </h6>
                                </div>
                            </div>
                            <div class="row mb-5 align-items-center">
                                <div class="col-6 p-0 color-morado">
                                    <h6 class="font-weight-bold mb-3">
                                        Zapatilla Dama Cuero
                                    </h6>
                                </div>
                                <div class="col-3 color-morado">
                                    <h6 class="mb-3">
                                        2 Unidades
                                    </h6>
                                </div>
                                <div class="col-3 color-morado">
                                    <h6 class="mb-3">
                                        64.000 COP
                                    </h6>
                                </div>
                            </div>
                            <div class="row mb-5 align-items-center">
                                <div class="col-6 p-0 color-morado">
                                    <h6 class="font-weight-bold mb-3">
                                        Zapatilla Dama Cuero
                                    </h6>
                                </div>
                                <div class="col-3 color-morado">
                                    <h6 class="mb-3">
                                        2 Unidades
                                    </h6>
                                </div>
                                <div class="col-3 color-morado">
                                    <h6 class="mb-3">
                                        64.000 COP
                                    </h6>
                                </div>
                            </div>
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
                    <a href="" class="font-weight-bold white-text bg-naranja boton-ingresar2 col-12 col-md-5 p-2 mt-3 mt-md-0" data-toggle="modal" data-target="#exampleModal">Realizar compra</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>


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
          <form action="" method="post">
            <div class="row my-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Primer nombre" aria-label="Primer nombre" value="Karen">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Segundo nombre" aria-label="Segundo nombre" value="Daniela">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Primer apellido" aria-label="Primer apellido" value="Rodriguez">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Segundo apellido" aria-label="Segundo apellido" value="Martinez">
              </div>
            </div>
            <div class="row mb-5">
              <div class="col">
                <select class="browser-default form-control">
                  <option selected>Tipo de documento</option>
                  <option value="1">CC</option>
                  <option value="2">CE</option>
                  <option value="3">TI</option>
                  <option value="4">PA</option>
                </select>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Número" aria-label="Número" value="123434343">
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
                <input type="text" class="form-control" placeholder="Teléfono" aria-label="Tel" value="6576787">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Dirección" aria-label="Dir" value="Cra8 be 3456">
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