            </article>
        </div>
        
    </div>
    
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
    
    <script type="text/javascript" src="<?php echo JS; ?>/form.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>/pagination-dashboard.js"></script>
    <script type="text/javascript" src="<?php echo JS; ?>/update-status-sale.js"></script>
    <script type="text/javascript">
        new WOW().init();

        function cargar_productos(){
            
        }

        function cargar_status(){
            // var url = $("#btn-cargar-status").data('url');
            
        }

        function cargar_ventas(){
            // var url = $("#btn-cargar-ventas").data('url');
            
        }

        function cargar_mas_vendidos(){
            //var url = $("#btn-mas-vendidos").data('url');
            
        }

        $(document).ready(() => {
            // SideNav Button Initialization
			$(".button-collapse").sideNav();
			// SideNav Scrollbar Initialization
			var sideNavScrollbar = document.querySelector('.custom-scrollbar');
			// var ps = new PerfectScrollbar(sideNavScrollbar);

            // Tooltips Initialization
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })

            var myModal = document.getElementById('myModal')
            var myInput = document.getElementById('myInput')
            
            // CARGAR VENTAS POR ESTADOS
            var url = "<?php echo URL;?>Admin/Index/cargar_estados_ventas";
            $.ajax({
                url: url,
                type:'POST',
            }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(JSON.stringify(resp));
                for (let i = 0; i < data.length; i++) {
                    titulo.push(data[i]["name"]);
                    cantidad.push(parseInt(data[i]["cantidad"]));
                }

                var ctxP = document.getElementById("pieChart2").getContext('2d');
                var myPieChart = new Chart(ctxP, {
                    type: 'pie',
                    data: {
                        labels: titulo,
                        datasets: [{
                            data: cantidad,
                            backgroundColor: ["#01579b", "#0277bd", "#b3e5fc"],
                            hoverBackgroundColor: ["rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)"]
                        }]
                    },
                    options: {
                    responsive: true
                    }
                });
            })

            // CARGAR PRODUCTOS
            var url = "<?php echo URL;?>Admin/Index/cargar_productos";
            $.ajax({
                url: url,
                type:'POST',
            }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(JSON.stringify(resp));
                for (let i = 0; i < data.length; i++) {
                    titulo.push(data[i]["name"]);
                    cantidad.push(parseInt(data[i]["productId"]));
                }
                console.log(titulo);

                var ctxP = document.getElementById("pieChart").getContext('2d');
                var myPieChart = new Chart(ctxP, {
                    type: 'pie',
                    data: {
                        labels: titulo,
                        datasets: [{
                            data: cantidad,
                            backgroundColor: ["#01579b", "#0277bd", "#b3e5fc", "#2196f3", "#4D5360", "#01579b", "#0277bd", "#b3e5fc", "#2196f3", "#4D5360",
                            "#01579b", "#0277bd", "#b3e5fc", "#2196f3", "#4D5360","#01579b"],
                            hoverBackgroundColor: ["rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)",
                            "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)",
                            "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)","rgba(54, 162, 235, 1)"]
                        }]
                    },
                    options: {
                    responsive: true
                    }
                });
            })

            // CARGAR VENTAS
            var url = "<?php echo URL;?>Admin/Index/cargar_ventas";
            $.ajax({
                url: url,
                type:'POST',
            }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(JSON.stringify(resp));
                for (let i = 0; i < data.length; i++) {
                    titulo.push(data[i]["mes"]);
                    cantidad.push(parseInt(data[i]["cantidad"]));
                }

                new Chart(document.getElementById("horizontalBar"), {
                    "type": "horizontalBar",
                    "data": {
                        "labels": titulo,
                        "datasets": [{
                            "label": "My First Dataset",
                            "data": cantidad,
                            "fill": false,
                            "backgroundColor": [
                                '#01579b',
                                '#0277bd',
                                '#b3e5fc',
                                '#2196f3',
                                '#2962ff',
                                '#1e88e5',
                                '#bbdefb',
                                '#90caf9',
                                '#64b5f6',
                                '#42a5f5',
                                '#2196f3',
                                '#1e88e5'
                            ],
                            "borderColor": [
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)'
                            ],
                            "borderWidth": 1
                        }]
                    },
                    "options": {
                        "scales": {
                            "xAxes": [{
                                "ticks": {
                                    "beginAtZero": true
                                }
                            }]
                        }
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.yLabel;
                                }
                            }
                        } 
                    }
                });
            })

            // CARGAR PRODUCTOS MAS VENDIDOS
            var url = "<?php echo URL;?>Admin/Index/cargar_productos_mas_vendidos";
            $.ajax({
                url: url,
                type:'POST',
            }).done(function(resp){
                var titulo = [];
                var cantidad = [];
                var data = JSON.parse(JSON.stringify(resp));
                for (let i = 0; i < data.length; i++) {
                    titulo.push(data[i]["name"]);
                    cantidad.push(parseInt(data[i]["cantidad"]));
                }

                var ctxB = document.getElementById("barChart").getContext('2d');
                var myBarChart = new Chart(ctxB, {
                    type: 'bar',
                    borderColor: "rgba(0,0,0,0)",
                    data: {   
                        labels: titulo,
                        datasets: [{
                            label: 'Visitas',
                            data: cantidad,
                            backgroundColor: [
                                '#01579b',
                                '#0277bd',
                                '#b3e5fc',
                                '#2196f3',
                                '#2962ff',
                                '#1e88e5',
                                '#bbdefb',
                                '#90caf9',
                                '#64b5f6',
                                '#42a5f5',
                                '#2196f3',
                                '#1e88e5'
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)'
                                ],
                            borderWidth: 1, 
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.yLabel;
                                }
                            }
                        } 
                    },
                });
            })

        });        
    </script>


</body>


</html>