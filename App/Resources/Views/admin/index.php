<?php require_once RESOURCES."/Templates/dashboard/header.php"; ?>



                <div class="container">
                    <div class="row d-flex justify-content-around mb-5">
                        <div class=" col-12 col-lg-6">
                            <div class="card mb-5 mb-lg-0">
                                <h4 class="color-morado font-weight-bold text-center m-0">Ventas por estado</h4>
                                <hr class="hr-cards my-1">
                                <div class="card body p-3">
                                    <canvas id="pieChart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <h4 class="color-morado font-weight-bold text-center m-0">Productos</h4>
                                <hr class="hr-cards my-1">
                                <div class="card body p-3">
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="col-12 col-lg-6">
                            <div class="card mb-5 mb-lg-0">
                                <h4 class="color-morado font-weight-bold text-center m-0">Ventas mensuales</h4>
                                <hr class="hr-cards my-1">
                                <div class="card body p-3">
                                    <canvas id="horizontalBar"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <h4 class="color-morado font-weight-bold text-center m-0">Productos Más vendidos</h4>
                                <hr class="hr-cards my-1">
                                <div class="card body p-3">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                


<?php require_once RESOURCES."/Templates/dashboard/footer.php"; ?>