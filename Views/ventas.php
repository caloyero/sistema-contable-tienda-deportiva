<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<?php
include('./header.php');
include('../Controllers/VentasController.php');
include_once('../Controllers/ProductosController.php');
include_once('../Controllers/ClientesController.php');
$controller = new VentasController();
$listar = $controller->listarVentas();
?>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Nata Sport</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Venta de Ropa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="./facturas.php">Facturas</a>
                            </li>
                            <li><i class="fa fa-id-badge"></i><a href="./proveedores.php">Proveedores</a>
                            </li>
                            <li><i class="fa fa-bars"></i><a href="./categorias.php">Categorias</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="./productos.php">Productos</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="./ventas.php">Ventas</a>
                            </li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="./clientes.php">Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Copias</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="./copias_color.php">Copias a Color</a></li>
                            <li><i class="fa fa-table"></i><a href="./copias_blanco_y_negro.php">Copias a Blanco y
                                    Negro</a></li>
                        </ul>
                    </li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="logo" href="./"><img src="../images/nata_sport.png" alt=""></a>
                    <a class=" navbar-brand hidden" href="./"><img src="../images/nata_sport.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar"
                                            src="../images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/nata_perfil.jpeg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span
                                    class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">$<span class="count">23569</span></div>
                                            <div class="stat-heading">Revenue</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">3435</span></div>
                                            <div class="stat-heading">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">349</span></div>
                                            <div class="stat-heading">Templates</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">2986</span></div>
                                            <div class="stat-heading">Clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                <!--  Traffic  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Ventas</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Lista de Ventas</strong>
                                        </div>
                                        <div class="card-body">
                                            <table id="myTable1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Nombre del Producto</th>
                                                        <th scope="col">Cliente</th>
                                                        <th scope="col">Unidades</th>
                                                        <th scope="col">Precio</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $totalGlobal = 0;
                                                    $hojasGlobal = 0 ?>
                                                    <?php foreach ($listar as $list) {
                                                        $totalGlobal = $totalGlobal + $list['total'];
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?= $list['producto'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $list['cliente'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $list['unidades'] ?>
                                                            </td>
                                                            <td>
                                                                <?= number_format($list['precio_unidad']) ?>
                                                            </td>
                                                            <td>
                                                                <?= number_format($list['total']) ?>
                                                            </td>
                                                            <td>
                                                                <a role="button" class="btn btn-danger"
                                                                    href="../Config/Peticiones.php?peticion=borrarVenta&id=<?= $list['id'] ?>">Eliminar</a>
                                                                <a role="button" class="btn btn-info"
                                                                    href="ventas.php?id_edit=<?= $list['id'] ?>">Editar</a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    <td>
                                                        <h3>Acomulado</h3>
                                                        <?= number_format($totalGlobal) ?>
                                                    </td>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <script>
                    $(document).ready(function () {
                        $('#clone-form-btn').click(function () {
                            var clonedInputs = $('#my-form :input,label').clone();
                            clonedInputs.val(''); // Limpiar los valores de los inputs clonados
                            $('#my-form').append(clonedInputs);
                        });
                    });
                /*  function() {
                         $('#clone-form-btn').click(function() {
                             var clonedInputs = $('#my-form :input,label').not(".exclude").clone();
                             clonedInputs.val(
                                 ''
                             );
                         });
                     } */

                    /* $(document).ready(functio n() {
                                $('#clone-form-btn').click(function() {
                                    var clonedInputs = $('#my-form :input,label').not(".exclude").clone();
                                    clonedInputs.val(
                                        ''
                                    );
                                });  */ // Limpiar los valores de los inputs clonados                             $('#my-form').append(clonedInputs);                                              });
                </script>






                <div class="card">
                    <div class="card-header">
                        <strong class="card-title"></strong>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">Crear Venta</h3>
                                </div>
                                <hr>

                                <form action="../Config/Peticiones.php?peticion=crearVenta" method="post">
                                    <div id="my-form">
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1"> Prducto</label>
                                            <select name="id_producto[]" id="select-productos">
                                                <?php $controllerProductos = new ProductosController();
                                                $listarProductos = $controllerProductos->listarProductos();
                                                foreach ($listarProductos as $productos) {
                                                    ?>
                                                    <option value="<?= $productos['id'] ?>">
                                                        <?= $productos['nombre'] ?>
                                                    </option>

                                                    <?php
                                                } ?>
                                            </select>
                                        </div>


                                        <div class="form-group has-success">
                                            <label for="cc-name" class="control-label mb-1">Cliente</label>
                                            <select name="id_cliente[]">
                                                <?php $controllercliente = new ClientesController();
                                                $listarCliente = $controllercliente->listarClientes();
                                                foreach ($listarCliente as $cliente) { ?>
                                                    <option value="<?= $cliente['id'] ?>">
                                                        <?= $cliente['nombre'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                                data-valmsg-replace="true"></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Unidades</label>
                                            <input id="cc-number" name="unidades[]" type="number"
                                                class="form-control cc-number identified visa" value="" data-val="true"
                                                data-val-required="Please enter the card number"
                                                data-val-cc-number="Please enter a valid card number">
                                            <span class="help-block" data-valmsg-for="cc-number"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <input id="clone-form-btn" type="button" value="+">

                                    <button id="submit-form-btn" type="submit"
                                        class="btn btn-lg btn-info btn-block exclude" name="insertar">Crear
                                        Venta</button>
                                </form>



                            </div>
                        </div>
                    </div>
                    <div class="form-edit">
                        <div class="card ">
                            <div class="card-header">
                                <strong class="card-title"></strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->


                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Editar Venta</h3>
                                        </div>
                                        <hr>
                                        <?php

                                        if (!empty($_GET['id_edit'])) {
                                            $id = $_GET['id_edit'];
                                        } else {
                                            $id = 3;
                                        }
                                        $edit = $controller->ListarVentasById($id);


                                        ?>

                                        <form action="../Config/Peticiones.php?peticion=editarVenta" method="post">

                                            <input type="hidden" name="id" value="<?= $edit->id ?>">
                                            <input type="hidden" name="id_producto" value="<?= $edit->id_producto ?>">
                                            <input type="hidden" name="id_cliente" value="<?= $edit->id_cliente ?>">

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre del
                                                    Producto</label>
                                                <input id="cc-payment" name="nombre_producto[]" type="text"
                                                    class="form-control" value="<?= $edit->producto ?>">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Producto</label>
                                                <input id="cc-name" name="cliente[]" type="text"
                                                    class="form-control cc-name valid" value="<?= $edit->cliente ?>">
                                                <span class="help-block field-validation-valid"
                                                    data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Unidades</label>
                                                <input id="cc-number" name="unidades[]" type="number"
                                                    class="form-control cc-number identified visa"
                                                    value="<?= $edit->unidades ?>">
                                                <span class="help-block" data-valmsg-for="cc-number"
                                                    data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Precio</label>
                                                <input id="cc-payment" name="precio_unidad[]" type="text"
                                                    value="<?= $edit->precio_unidad ?>" class="form-control">
                                            </div>
                                            <button id="payment-button" type="submit"
                                                class="btn btn-lg btn-info btn-block">
                                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">Editar Venta</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>

                                    </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/index.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="../assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(functio n($) {
            "use strict";
            // Pie chart flotPie1                 var piedata = [{
            label: "Desktop visits",
            data: [
                [1, 32]
            ],
            color: '#5c6bc0'
        }, {
            label: "Tab visits",
            data: [
                [1, 33]
            ],
            color: '#ef5350'
        }, {
            label: "Mobile visits",
            data: [
                [1, 35]
            ],
            color: '#66bb6a'
        }];
        $.plot('#flotPie1', piedata, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.65,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        threshold: 1
                    },
                    stroke: {
                        width: 0
                    }
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        }); // Pie chart flotPie1  End                 // cellPaiChart                 var cellPaiChart = [{
        label: "Direct Sell",
            data: [
                [1, 65]
            ],
                color: '#5b83de'
    }, {
            label: "Channel Sell",
                data: [
                    [1, 35]
                ],
                    color: '#00bfa5'
        }];
        $.plot('#cellPaiChart', cellPaiChart, {
            series: {
                pie: {
                    show: true,
                    stroke: {
                        width: 0
                    }
                }
            },
            legend: {
                show: false
            },
            grid: {
                hoverable: true,
                clickable: true
            }
        }); // cellPaiChart End                 // Line Chart  #flotLine5                 var newCust = [                     [0, 3],                     [1, 5],                     [2, 4],                     [3, 7],                     [4, 9],                     [5, 3],                     [6, 6],                     [7, 4],                     [8, 10]                 ];
        var plot = $.plot($('#flotLine5'), [{
            data: newCust,
            label: 'New Data Flow',
            color: '#fff'
        }], {
            series: {
                lines: {
                    show: true,
                    lineColor: '#fff',
                    lineWidth: 2
                },
                points: {
                    show: true,
                    fill: true,
                    fillColor: "#ffffff",
                    symbol: "circle",
                    radius: 3
                },
                shadowSize: 0
            },
            points: {
                show: true,
            },
            legend: {
                show: false
            },
            grid: {
                show: false
            }
        }); // Line Chart  #flotLine5 End                 // Traffic Chart using chartist                 if ($('#traffic-chart').length) {                     var chart = new Chartist.Line('#traffic-chart', {                         labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],                         series: [                             [0, 18000, 35000, 25000, 22000, 0],                             [0, 33000, 15000, 20000, 15000, 300],                             [0, 15000, 28000, 15000, 30000, 5000]                         ]                     }, {                         low: 0,                         showArea: true,                         showLine: false,                         showPoint: false,                         fullWidth: true,                         axisX: {                             showGrid: true                         }                     });
        chart.on('draw', functio n(data) {
            if(data.type === 'line' || data.type === 'area') {
            data.element.animate({
                d: {
                    begin: 2000 * data.index,
                    dur: 2000,
                    from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height())
                        .stringify(),
                    to: data.path.clone().stringify(),
                    easing: Chartist.Svg.Easing.easeOutQuint
                }
            });
        }
    });
    } // Traffic Chart using chartist End                 //Traffic chart chart-js                 if ($('#TrafficChart').length) {                     var ctx = document.getElementById("TrafficChart");                     ctx.height = 150;                     var myChart = new Chart(ctx, {                         type: 'line',                         data: {                             labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],                             datasets: [{
        label: "Visit",
            borderColor: "rgba(4, 73, 203,.09)",
                borderWidth: "1",
                    backgroundColor: "rgba(4, 73, 203,.5)",
                        data: [0, 2900, 5000, 3300, 6000, 3250, 0]
    }, {
            label: "Bounce",
                borderColor: "rgba(245, 23, 66, 0.9)",
                    borderWidth: "1",
                        backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                                data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
        }, {
            label: "Targeted",
                borderColor: "rgba(40, 169, 46, 0.9)",
                    borderWidth: "1",
                        backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                                data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
        }]
    }, options: {
            responsive: true,
                tooltips: {
                mode: 'index',
                    intersect: false
            },
            hover: {
                mode: 'nearest',
                    intersect: true
            }
        }
    });
    } //Traffic chart chart-js  End                 // Bar Chart #flotBarChart                 $.plot("#flotBarChart", [{                     data: [                         [0, 18],                         [2, 8],                         [4, 5],                         [6, 13],                         [8, 5],                         [10, 7],                         [12, 4],                         [14, 6],                         [16, 15],                         [18, 9],                         [20, 17],                         [22, 7],                         [24, 4],                         [26, 9],                         [28, 11]                     ],                     bars: {                         show: true,                         lineWidth: 0,                         fillColor: '#ffffff8a'                     }                 }], {                     grid: {                         show: false                     }                 });                 // Bar Chart #flotBarChart End             });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


</body>

</html>