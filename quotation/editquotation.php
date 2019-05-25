<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Modificar Cotización | SCATEL CORP</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>
<?php
    session_start();
    error_reporting(0);
    if($_SESSION['sesion_name'] == null){
        header('Location:../index.html');
    }
    else {
    if($_SESSION['sesion_active'] == '1'){
            if($_SESSION['sesion_attemps'] < 6){
                if(($_SESSION['sesion_position'] == 0) || ($_SESSION['sesion_position'] == 1)){
                }
                else{
                    session_destroy();
                    header('Location:../index.html');
                }
            }
            else{
              header('Location:../login_blocked.html');
            }
    }
    else {
    header('Location:../login_deactivaded.html');
    }
    }
    if($_SESSION['sesion_position'] == 0){
        echo("<style>
       /*verde*/
       .col{
           background-color:#669933;
           margin-left: 40px;
       }
    </style>");
     }
     if($_SESSION['sesion_position'] == 1){
         echo("<style>
        /*naranja*/
       .col{
           background-color:#b9b331;
       margin-left: 40px;
       }
    </style>");
     }
?>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="../assets/img/sidebar-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="dashboard.html" class="simple-text">
                        SCATEL CORP
                    </a>
                </div>

                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-shopbag"></i>Clientes</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="../client/createclient.php">Nuevo</a></li>
                            <li><a href="../client/selectclient.php">Editar</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-box1"></i>Proveedores</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="../provider/createprovider.php">Nuevo</a></li>
                            <li><a href="../provider/selectprovider.php">Editar</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-display2"></i>Proyecto</a>
                        <ul class="dropdown-menu" style="background-color:#b9b331; margin-left: 40px;" role="menu">
                            <li><a href="../proyects/createproyect.php">Nuevo</a></li>
                            <li><a href="../proyects/selectproyect.php">Gestionar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-note2"></i>Cotizaciones</a>
                        <ul class="dropdown-menu col" role="menu">
                            <li><a href="createquotation.php">Nueva</a></li>
                            <li><a href="selectquotation.php">Gestionar</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-display1"></i>Ofertas</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="../ofertas/offer.php">Nueva</a></li>
                            <li><a href="../ofertas/selectoffer.html">Editar</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-cash"></i>Facturas</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="#">Nueva</a></li>
                            <li><a href="#">Editar</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-piggy"></i>Operaciones Financieras</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="#">Estado de cuenta</a>
                            </li>
                            <li><a href="#">Nuevo movimiento</a>
                            </li>
                            <li><a href="#">Editar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-users"></i>Administracion de usuarios</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="../user/createuser.php">Nuevo</a></li>
                            <li><a href="../user/selectuser.php">Gestionar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">

                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="">
                                    Account
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-auto">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Modifique los datos de la cotización</h4>
                                </div>
                                <div class="content">
                                   <?php
                                    $quotation_id = $_POST['edit'];
                                    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');

    $sqlcg = "SELECT quotation_name, quotation_version, proyect_id, quotation_validthru, quotation_conditions, quotation_deliverytime, quotation_warranty, quotation_paymentmethod FROM quotation_table WHERE quotation_id = ". $quotation_id ." ;";
    $result = mysqli_query($cnn, $sqlcg);
    if (!$result)
    {
        echo "No se pudo realizar la consulta";
        exit();
    }
    else
    {
        $row = mysqli_fetch_array($result);
        echo("
        <form action='modifyquotation.php' method='post'>
                                        <div class='row'>
                                            <div class='col-md-5'>
                                                <div class='form-group'>
                                                    <label>Nombre de la cotización</label>
                                                    <input type='text' class='form-control' name='quotation_name' placeholder='Nombre de la cotización' value='". $row[0] ."' required>
                                                    <input type='hidden' name='quotation_id' id='quotation_id' value='". $quotation_id ."'>
                                                </div>
                                            </div>
                                            <div class='col-md-2'>
                                                <div class='form-group'>
                                                    <label>Versión de la cotización</label>
                                                    <input type='text' name='quotation_version' id='quotation_version' class='form-control' value='". $row[1] ."' placeholder='Versión' required>
                                                </div>
                                            </div>
                                            <div class='col-md-5'>
                                                <div class='form-group'>
                                                    <label>Proyecto</label>
                                                    <div>
                                                        <datalist id='proyect_quotationlist'>");
                                                            $cnn2 = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
                                                            or die('cant conect');
                                                            $sqlcg2 = "SELECT proyect_id, proyect_name FROM proyect_table WHERE proyect_active = 1";
                                                            $result2 = mysqli_query($cnn2, $sqlcg2);
                                                            if (!$result2)
                                                            {
                                                                echo "No se pudo realizar la consulta";
                                                                exit();
                                                            }
                                                            else
                                                            {
                                                                while ($row2 = mysqli_fetch_array($result2))
                                                                {
                                                                    echo("<option value='". $row2[0] ."'>". $row2[1] . "</option>");
                                                                }
                                                            }
        echo("
                                                        </datalist>
                                                        <input  autoComplete='on' list='proyect_quotationlist' id='quotation_proyect' name='quotation_proyect' value='". $row[2] ."' class='col-sm-6 custom-select custom-select-sm'/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-2'>
                                                <div class='form-group'>
                                                    <label>Val. cotizacion</label>
                                                    <input type='text' class='form-control' placeholder='Valides de la cotización' name='quotation_valid' value='". $row[3] ."' id='quotation_valid' required>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label>Forma de pago</label>
                                                    <select name='quotation_payment' id='quotation_payment' class='form-control' value='". $row[7] ."' required>
                                                        <option value='1'>Efectivo</option>
                                                        <option value='2'>Deposito</option>
                                                        <option value='3'>Cheque</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class='form-group'>
                                                    <label>Tiempo de entrega</label>
                                                    <input type='text' name='quotation_deliverytime' id='quotation_deliverytime' value='". $row[5] ."' class='form-control' placeholder='15 dias' required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='row'>
                                            <div class='col-md-12'>
                                                <div class='form-group'>
                                                    <label>Condiciones</label>
                                                    <textarea rows='5' class='form-control' id='quotation_conditions' value='' name='quotation_conditions' placeholder='Aqui escriba las condiciones' required>". $row[4] ." </textarea>
                                                </div>
                                            </div>
                                        </div>



                                        <div clas='row'>
                                            <div class='col-md-12'>
                                                <div class='form-group'>
                                                    <label>Garantia </label>
                                                    <textarea rows='5' class='form-control' id='quotation_warranty' value='' name='quotation_warranty' placeholder='Aqui escriba la garantia' required>". $row[6] ."</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type='submit' class='btn btn-info btn-fill pull-right'>Guardar</button>

                                        <div class='clearfix'></div>
                                    </form>
                                    ");
    }
                                        ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy; 2019 <a href="#">Creative Tim</a>, SCATEL CORP
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="../assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
