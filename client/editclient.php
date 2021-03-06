<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Modificar cliente | SCATEL CORP</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../css/light-bootstrap-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="../css/pe-icon-7-stroke.css" rel="stylesheet" />
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
        <div class="sidebar" data-color="<?php
                                         if($_SESSION['sesion_position'] == 0){
                                             echo("green");
                                         }
                                         if($_SESSION['sesion_position'] == 1){
                                             echo("orange");
                                         }
                                         ?>" data-image="../assets/img/sidebar-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="<?php
                         if($_SESSION['sesion_position'] == 0){
                             echo("../0.php");
                         }
                         if($_SESSION['sesion_position'] == 1){
                             echo("../1.php");
                         }
                         ?>" class="simple-text">
                        SCATEL CORP
                    </a>
                </div>

                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-shopbag"></i>Clientes</a>
                        <ul class="dropdown-menu col"role="menu">
                            <li><a href="createclient.php">Nuevo</a></li>
                            <li><a href="selectclient.php">Gestionar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-box1"></i>Proveedores</a>
                        <ul class="dropdown-menu col" role="menu">
                            <li><a href="../provider/createprovider.php">Nuevo</a></li>
                            <li><a href="../provider/selectprovider.php">Gestionar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-display2"></i>Proyecto</a>
                        <ul class="dropdown-menu col" role="menu">
                            <li><a href="../proyects/createproyect.php">Nuevo</a></li>
                            <li><a href="../proyects/selectproyect.php">Gestionar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-note2"></i>Cotizaciones</a>
                        <ul class="dropdown-menu col" role="menu">
                            <li><a href="../quotation/createquotation.php">Nueva</a></li>
                            <li><a href="../quotation/selectquotation.php">Editar</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-display1"></i>Ofertas</a>
                        <ul class="dropdown-menu col" role="menu">
                            <li><a href="../ofertas/offer.php">Nueva</a></li>
                            <li><a href="../ofertas/selectoffer.html">Editar</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-cash"></i>Facturas</a>
                        <ul class="dropdown-menu col" role="menu">
                            <li><a href="#">Nueva</a></li>
                            <li><a href="#">Editar</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-piggy"></i>Operaciones Financieras</a>
                        <ul class="dropdown-menu col" role="menu">
                            <li><a href="#">Estado de cuenta</a>
                            </li>
                            <li><a href="#">Nuevo movimiento</a>
                            </li>
                            <li><a href="#">Editar</a></li>
                        </ul>
                    </li>

                    <?php
                         if($_SESSION['sesion_position'] == 0){
                             echo("
                             <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'><i class='pe-7s-users'></i>Administracion de usuarios</a>
                        <ul class='dropdown-menu col' role='menu'>
                            <li><a href='../user/createuser.php'>Nuevo</a></li>
                            <li><a href='../user/selectuser.php'>Gestionar</a></li>
                        </ul>
                    </li>
                             ");
                         }
                        ?>
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
                                <a href="#">

                                    <?php
                                    echo("<img src='../img/". $_SESSION['sesion_photo'] ."' height='40px' width='40px'>");
                                    echo($_SESSION['sesion_name']);
                                    ?>
                                </a>
                            </li>

                            <li>
                                <a href="../logout.php">
                                    <p style="margin-top: 10px;"></p>Log out
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
                                    <h4 class="title">Modificar los datos del cliente</h4>
                                </div>
                                <div class="content">
                                    <?php
                                    $client_id = $_POST['edit'];
                                    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');

    $sqlcg = "SELECT client_first_name, client_second_name, client_first_lastname, client_second_lastname, client_NIT,  client_NCR, client_PhoneNumber, client_nature FROM client_table WHERE client_id = '". $client_id ."';";
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
                                    <form action='modifyclient.php' method='post'>
                                    <div class='row'>
                                          <div class='col-md-5'></div>
                                          <div class='col-md-7'>
                                           <div class='form-group'>
                                                        <label style='margin-left: 20px;'>Tipo de persona</label>
                                                         <div class='input-group mb-3'>");
                                if($row[7]==0){
                                                         echo(" <input type='radio' id='nature_client' name='nature_client' value='0' onclick='natural()' checked>Natural
                                                         <input type='radio' id='nature_client' name='nature_client' value='1' onclick='ejecutiva()'>Ejecutiva
                                                         ");
                                }
                                if($row[7]==1){
                                                          echo(" <input type='radio' id='nature_client' name='nature_client' value='0' onclick='natural()' >Natural
                                                         <input type='radio' id='nature_client' name='nature_client' value='1' onclick='ejecutiva()' checked>Ejecutiva
                                                         <script>
                                                             window.onload = function ejecutiva() {
                                                                document.getElementById('second_name_client').disabled = true;
                                                                document.getElementById('first_lastname_client').disabled = true;
                                                                document.getElementById('second_lastname_client').disabled = true;
                                                            }
                                                            </script>
                                                         ");
                                }
        echo("
                                                          <br>
                                                          <script>
                                                            function natural() {
                                                                document.getElementById('second_name_client').disabled = false;
                                                                document.getElementById('first_lastname_client').disabled = false;
                                                                document.getElementById('second_lastname_client').disabled = false;
                                                            }
                                                              function ejecutiva() {
                                                                document.getElementById('second_name_client').disabled = true;
                                                                document.getElementById('first_lastname_client').disabled = true;
                                                                document.getElementById('second_lastname_client').disabled = true;
                                                                document.getElementById('second_name_client').value = '';
                                                                document.getElementById('first_lastname_client').value = '';
                                                                document.getElementById('second_lastname_client').value = '';
                                                            }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Primer nombre</label>
                                                    <input type='text' class='form-control' name='first_name_client' id='first_name_client' placeholder='Primer nombre' required value='". $row[0] ."'>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Segundo nombre</label>
                                                    <input type='text' name='second_name_client' id='second_name_client' class='form-control alpha-only' placeholder='Segundo nombre' value='". $row[1] ."'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Primer apellido</label>
                                                    <input type='text' class='form-control alpha-only' name='first_lastname_client' id='first_lastname_client' placeholder='Primer apellido' value='". $row[2] ."'>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Segundo apellido</label>
                                                    <input type='text' name='second_lastname_client' id='second_lastname_client' class='form-control alpha-only' placeholder='Segundo apellido' value='". $row[3] ."'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label>NIT</label>
                                                    <input type='text' class='form-control allownumericwithoutdecimal nit' id='nit_client' name='nit_client' placeholder='NIT' required value='". $row[4] ."'>
                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label>NCR</label>
                                                    <input type='text' class='form-control allownumericwithoutdecimal ncr' id='ncr_client' name='ncr_client' placeholder='NCR' required value='". $row[5] ."'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-5'>
                                                <div class='form-group'>
                                                    <label>Numero de telefono</label>
                                                    <input type='text' class='form-control allownumericwithoutdecimal' placeholder='Numero de telefono' name='phone_number_client' id='phone_number_client' value='". $row[6] ."' required>
                                                <input type='hidden' name='client_id' id='client_id' value='". $client_id ."'>
                                                </div>
                                            </div>
                                        </div>
                                        <button type='submit' class='btn btn-info btn-fill pull-right'>Guardar</button>
                                        <div class='clearfix'></div>
                                    </form>
                                    ");
    }
                                        ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cliente</label>
                                            <div>
                                                <datalist id="proyect_clientlist">
                                                    <?php
                                                            $cnn2 = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
                                                            or die('cant conect');

                                                            $sqlcg2 = "SELECT client_id, client_first_name, client_first_lastname FROM client_table WHERE client_active = 1";
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
                                                                    echo("<option value='". $row2[0] ."'>". $row2[1] . " " . $row2[2] ."</option>");
                                                                }
                                                            }
                                                            ?>
                                                </datalist>
                                                <input autoComplete="on" list="proyect_clientlist" id="proyect_client" name="proyect_client" class="col-sm-6 custom-select custom-select-sm" />
                                            </div>
                                        </div>
                                    </div>
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
<script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="../js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="../js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="../js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="../js/demo.js"></script>

</html>
