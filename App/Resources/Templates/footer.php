    <footer class="py-5 bg-morado">
        <div class="container">
            <div class="row justify-content-md-between">
                <div class="col-12 col-md-7 pb-5 pb-md-0">
                    <h4 class="font-weight-bold m-0 p-0 white-text text-center text-md-left mb-4 mb-md-0">ACERCA DE NOSOTROS</h4>
                    <hr class="d-none d-md-block">
                    <p class="white-text text-center text-md-left m-0 p-0">
                        ShoeShop es un proyecto que busca expandir y digitalizar el mercado de calzado de Bucaramanga a nivel nacional, incrementando su popularidad y generando desarrollo para el municipio.
                    </p>
                </div>
                <div class=" col-12 col-md-4 pb-5 pb-md-0 pl-md-5 pl-0">
                    <h4 class="font-weight-bold m-0 p-0 white-text text-center text-md-left mb-4 mb-md-0">PRODUCTOS</h4>
                    <hr class="d-none d-md-block">
                    <ul class="white-text text-center text-md-left m-0 p-0">
                        <ol class="px-0 pb-2">DAMAS</ol>
                        <ol class="px-0 pb-2">CABALEROS</ol>
                        <ol class="px-0 pb-2">NIÑOS</ol>
                        <ol class="px-0">DEPORTIVOS</ol>
                    </ul>
                </div>
                <div class="col-12 col-md-1 p-0 d-flex flex-md-column justify-content-around align-items-md-center">
                    <a href=""><i class="fab fa-facebook fa-3x white-text"></i></a>
                    <a href=""><i class="fab fa-instagram fa-3x white-text"></i></a>
                    <a href=""><i class="fab fa-twitter-square fa-3x white-text"></i></a>
                </div>
            </div>
        </div>

    </footer>
    
    <script type="text/javascript" src="<?php echo JS; ?>/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo JS; ?>/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo JS; ?>/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo JS; ?>/mdb.min.js"></script>
    <!-- Your custom js (optional) -->
    <script type="text/javascript" src="<?php echo JS; ?>/script.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>/login.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>/carrito.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>/form.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>/pagination.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>/cantidad.js"></script>
    <script type="text/javascript">
        new WOW().init();

        $(document).ready(() => {
            // SideNav Button Initialization
			$(".button-collapse").sideNav();
			// SideNav Scrollbar Initialization
			var sideNavScrollbar = document.querySelector('.custom-scrollbar');
			var ps = new PerfectScrollbar(sideNavScrollbar);

            // Tooltips Initialization
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })

            var myModal = document.getElementById('myModal')
            var myInput = document.getElementById('myInput')

            myModal.addEventListener('shown.bs.modal', function () {
                myInput.focus()
            })
        });        
    </script>


</body>


</html>