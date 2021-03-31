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

            // myModal.addEventListener('shown.bs.modal', function () {
            //     myInput.focus()
            // })
            //bar
            var ctxB = document.getElementById("barChart").getContext('2d');
            var myBarChart = new Chart(ctxB, {
                type: 'bar',
                borderColor: "rgba(0,0,0,0)",
                data: {   
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets: [{
                        label: 'Visitas',
                        data: [12, 19, 3, 5, 120, 3, 12, 19, 3, 5, 120, 3],
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
            
            var ctxP = document.getElementById("pieChart").getContext('2d');
            var myPieChart = new Chart(ctxP, {
                type: 'pie',
                data: {
                    labels: ["Tennis", "Botas", "Zapatillas", "Colegio", "Sandalias"],
                    datasets: [{
                        data: [300, 50, 100, 40, 120],
                        backgroundColor: ["#01579b", "#0277bd", "#b3e5fc", "#2196f3", "#4D5360"],
                        hoverBackgroundColor: ["rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)", "rgba(54, 162, 235, 1)"]
                    }]
                },
                options: {
                responsive: true
                }
            });

            new Chart(document.getElementById("horizontalBar"), {
                "type": "horizontalBar",
                "data": {
                    "labels": ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                    "datasets": [{
                        "label": "My First Dataset",
                        "data": [22, 33, 55, 12, 86, 23, 14,15,16,16,3,60],
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

            var ctxL = document.getElementById("lineChart").getContext('2d');
            var myLineChart = new Chart(ctxL, {
                type: 'line',
                data: {
                    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                    datasets: [{
                            label: "Cleintes antiguos",
                            data: [65, 59, 80, 81, 56, 55, 40,50, 60, 70, 80, 120],
                            backgroundColor: [
                                'rgba(3, 169, 244, 0.3)',
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                            ],
                            borderWidth: 2
                        },
                        {
                            label: "Clientes nuevos",
                            data: [28, 48, 40, 19, 86, 27, 90, 19, 86, 27, 90, 10],
                            backgroundColor: [
                                'rgba(62, 69, 81, 0.3)',
                            ],
                            borderColor: [
                                'rgba(0, 0, 0, 0.3)',
                            ],
                            borderWidth: 2
                        }
                    ]
                },
                options: {
                    responsive: true
                }
            });
        });        
    </script>


</body>


</html>