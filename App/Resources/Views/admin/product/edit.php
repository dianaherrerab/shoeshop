<?php require_once RESOURCES."/Templates/dashboard/header.php"; ?>

    <div class="container">
        <div class="card">
            <div class="card-body p-0"> 
                <div class="letra-subti borde-hist font-weight-bold white-text m-0 d-flex align-items-center azul-oscuro p-3">
                    <i class="far fa-lg fa-edit pr-3"></i>
                    <h5 class="m-0">Editar productos</h5>
                </div>
                <form enctype="multipart/form-data" class="form-edit px-5 pb-5" method="post" action="<?php echo URL; ?>Admin/Product/Update">
                    <input type="hidden" name="productId" value="<?php echo $params['product']['productId']; ?>">
                    <?php echo $this->__csrf_field(); ?>
                    <div class="errors-edit pt-2 text-center white-text"></div>
                    <div class="row my-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Nombre" aria-label="nombre" name="name" value="<?php echo $params['product']['name']; ?>">
                        </div>
                        <div class="col">
                            <select name="categoryId" name="categoryId" class="browser-default custom-select form-control1">
                                <option <?php if( $params['product']['categoryId'] == 1 ){ echo "selected"; } ?> value="1">Tenis</option>
                                <option <?php if( $params['product']['categoryId'] == 2 ){ echo "selected"; } ?> value="2">Botas</option>
                                <option <?php if( $params['product']['categoryId'] == 3 ){ echo "selected"; } ?> value="3">Sandalias</option>
                                <option <?php if( $params['product']['categoryId'] == 4 ){ echo "selected"; } ?> value="4">Tacones</option>
                                <option <?php if( $params['product']['categoryId'] == 5 ){ echo "selected"; } ?> value="5">Zapatos Casuales</option>
                                <option <?php if( $params['product']['categoryId'] == 6 ){ echo "selected"; } ?> value="6">Baletas</option>
                                <option <?php if( $params['product']['categoryId'] == 7 ){ echo "selected"; } ?> value="7">Mocasines</option>
							</select>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Marca" aria-label="Marca" name="brand" value="<?php echo $params['product']['brand']; ?>">
                        </div>
                        <div class="col">
                            <select name="genderId" name="genderId" class="browser-default custom-select form-control1">
                                <option <?php if( $params['product']['genderId'] == 1 ){ echo "selected"; } ?> value="1">Femenino</option>
                                <option <?php if( $params['product']['genderId'] == 2 ){ echo "selected"; } ?> value="2">Masculino</option>
                            </select>    
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Material" aria-label="Material" name="material" value="<?php echo $params['product']['material']; ?>">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Color" aria-label="color" name="color" value="<?php echo $params['product']['color']; ?>">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <textarea class="form-control form-control1 p-3" id="" placeholder="Descripción" name="description">
                            <?php echo $params['product']['description']; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <input type="text" class="form-control form-control1" placeholder="Precio" aria-label="Precio" name="price" value="<?php echo $params['product']['price']; ?>">
                        </div>
                        <div class="col">
                        <select name="statusProductId" class="browser-default custom-select form-control1">
                            <option <?php if( $params['product']['statusProductId'] == 1 ){ echo "selected"; } ?> value="1">Disponible</option>
                            <option <?php if( $params['product']['statusProductId'] == 2 ){ echo "selected"; } ?> value="2">Agotado</option>
                        </select>
                        </div>
                    </div>
                    <div class="container mb-5 form-control form-control1 altura-galeria">
                        <input name="uploadedfile" id="uploadedfile" type="file" data-url="<?php echo URL; ?>Admin/Product/upload_image" />
                        <div class="row content-images">
                            <?php
                            foreach ($params['images'] as $image) {
                                echo '
                                <div class="col-12 col-md-4  mb-4 mb-md-0 d-flex align-items-center justify-content-center position-relative">
                                    <img class="card-imagen" src="'.IMG.'/bd-products/'.$image['name'].'">
                                </div>
                                ';
                            }
                            ?>
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
                                        <?php
                                        foreach ($params['sizes'] as $size) {
                                            echo '
                                            <tr>
                                                <td class="pt-3-half" contenteditable="true">
                                                    <input type="text" name="size" value="'.$size['sizeId'].'">     
                                                </td>
                                                <td class="pt-3-half" contenteditable="true">
                                                    <input type="text" name="quantity" value="'.$size['quantity'].'">
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
<script>
    $(document).ready(function(){

        $("#uploadedfile").on('change', function(){
            let url = $(this).data('url');
            var form = $('.form-edit')[0]; // You need to use standard javascript object here
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