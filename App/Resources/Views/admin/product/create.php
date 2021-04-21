<?php require_once RESOURCES."/Templates/dashboard/header.php"; ?>

    <div class="container">
        <div class="card">
            <div class="card-body p-0"> 
                <div class="letra-subti borde-hist font-weight-bold white-text m-0 d-flex align-items-center azul-oscuro p-3">
                    <i class="far fa-lg fa-edit pr-3"></i>
                    <h5 class="m-0">Nuevo producto</h5>
                    <a type="button" href="<?php echo URL;?>Admin/Product" class="btn btn-sm">
						Regresar
					</a>
                </div>
                <form enctype="multipart/form-data" action="<?php echo URL; ?>Admin/Product/Store" method="post" class="form-create px-5 pb-5">
                <?php echo $this->__csrf_field(); ?>
                <div class="errors-create pt-2 text-center white-text"></div>
                    <div class="row my-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Nombre" aria-label="nombre" name="name">
                        </div>
                        <div class="col">
                            <select name="categoryId" name="categoryId" class="browser-default custom-select form-control1">
                                <option value="">Categoría</option>
                                <option  value="1">Tenis</option>
                                <option  value="2">Botas</option>
                                <option  value="3">Sandalias</option>
                                <option  value="4">Tacones</option>
                                <option  value="5">Zapatos Casuales</option>
                                <option  value="6">Baletas</option>
                                <option  value="7">Mocasines</option>
							</select>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Marca" aria-label="Marca" name="brand">
                        </div>
                        <div class="col">
                            <select name="genderId" name="genderId" class="browser-default custom-select form-control1">
                                <option value="">Género</option>
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Material" aria-label="Material" name="material">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Color" aria-label="color" name="color">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <textarea class="form-control form-control1 p-3" name="description" placeholder="Descripción"></textarea>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <input type="text" class="form-control form-control1" placeholder="Precio" aria-label="Precio" name="price">
                        </div>
                    </div>
                    <div class="container mb-5 form-control form-control1 altura-galeria">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="" class="color-morado pb-3">
                                <i class="fas fa-plus fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="row content-images px-3 pb-3">
                            <input name="uploadedfile" id="uploadedfile" type="file" data-url="<?php echo URL; ?>Admin/Product/upload_image" />
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pt-3-half" contenteditable="true">
                                                <input type="text" name="size">
                                            </td>
                                            <td class="pt-3-half" contenteditable="true">
                                                <input type="text" name="quantity">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" value="Subir archivo" class="font-weight-bold white-text bg-morado boton-editar">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once RESOURCES."/Templates/dashboard/footer.php"; ?>
<script>
    $(document).ready(function(){

        $("#uploadedfile").on('change', function(){
            let url = $(this).data('url');
            var form = $('.form-create')[0]; // You need to use standard javascript object here
            var formData = new FormData(form);
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false,
                dataType: 'json',
                success: function(data) {
                    if( data.status == 'success' )
                    {
                        $(".content-images").append(`
                            <div class="col-md-6 col-lg-4">
                                <input type="hidden" name="images[]" value="`+data.name+`" />
                                <img src="`+data.image+`" class="img-fluid" />
                            </div>
                        `);
                    }
                    else{
                        toastr.error( data.message );
                    }
                },
                error: function(xhr) {
                    
			   	    toastr.error("Ha ocurrido un error.");
                    // console.log(xhr.statusText + xhr.responseText);
                },
            });
        });

    });
</script>