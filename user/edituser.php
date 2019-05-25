<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Modificar usuario | SCATEL CORP</title>

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
                if($_SESSION['sesion_position'] == 0){
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

?>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="../img/sidebar-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="../0.php" class="simple-text">
                        SCATEL CORP
                    </a>
                </div>

                <ul class="nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-shopbag"></i>Clientes</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="../client/createclient.php">Nuevo</a></li>
                            <li><a href="../client/selectclient.php">Gestionar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-box1"></i>Proveedores</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="../provider/createprovider.php">Nuevo</a></li>
                            <li><a href="../provider/selectprovider.php">Gestionar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="pe-7s-note2"></i>Cotizaciones</a>
                        <ul class="dropdown-menu" style="background-color:#669933; margin-left: 40px;" role="menu">
                            <li><a href="../quotation/createquotation.php">Nueva</a></li>
                            <li><a href="../quotation/selectquotation.php">Editar</a></li>

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
                            <li><a href="createuser.php">Nuevo</a></li>
                            <li><a href="selectuser.php">Gestionar</a></li>
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
                                <a href="#">

                            <?php
                                    echo("<img src='../images/". $_SESSION['sesion_photo'] ."' height='40px' width='40px'>");
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
                        <div class="col-md">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Modificar los datos del usuario</h4>
                                </div>
                                <div class="content">
                                <?php
                                    $user_id = $_POST['edit'];
                                    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');

    $sqlcg = "SELECT user_id, user_first_name, user_second_name, user_first_lastname, user_second_lastname, user_password, user_role, user_DUI, user_NIT, user_phone, user_photo FROM user_table WHERE user_id = '" . $user_id . "'";
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
                                <form action='modifyuser.php' method='post'>
                                       <div class='row'>
                                       <div class='form-group'>
                                                   <div class='col-md'>
                                                    <label>ID de usuario</label>
                                                    <input type='email' maxlength='200' class='form-control' name='user_id' id='user_id' placeholder='juan@hotmail.com' value='". $user_id ."' required>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Primer nombre</label>
                                                    <input type='text' class='form-control alpha-only' name='first_name_user' id='first_name_user' placeholder='Primer nombre' value='". $row[1] ."' required>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Segundo nombre</label>
                                                    <input type='text' name='second_name_user' id='second_name_user' class='form-control alpha-only' placeholder='Segundo nombre' value='". $row[2] ."' required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Primer apellido</label>
                                                    <input type='text' class='form-control alpha-only' name='first_lastname_user' id='first_lastname_user' placeholder='Primer apellido' value='". $row[3] ."' required>
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Segundo apellido</label>
                                                    <input type='text' name='second_lastname_user' id='second_lastname_user' class='form-control alpha-only' placeholder='Segundo apellido' value='". $row[4] ."' required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Contraseña</label>
                                                    <input type='text' class='form-control' id='password_user' name='password_user' placeholder='Contraseña'  required>
                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label>Rol</label>
                                                     <div class='input-group mb-3'>");
                                                     switch($row[6]){
                                                         case 0:
                                                             echo("<input type='radio' id='role_user' name='role_user' checked value='0'>Administrador<br>
                                                      <input type='radio' id='role_user' name='role_user' value='1'>Ejecutivo ventas/compras<br>
                                                      <input type='radio' id='role_user' name='role_user' value='3'>Gerente de proyecto<br>
                                                      <input type='radio' id='role_user' name='role_user' value='2'>Agente Financiero<br>");
                                                         break;
                                                        case 1:
                                                             echo("<input type='radio' id='role_user' name='role_user' value='0'>Administrador<br>
                                                      <input type='radio' id='role_user' name='role_user' checked value='1'>Ejecutivo ventas/compras<br>
                                                      <input type='radio' id='role_user' name='role_user' value='3'>Gerente de proyecto<br>
                                                      <input type='radio' id='role_user' name='role_user' value='2'>Agente Financiero<br>");
                                                         break;
                                                        case 2:
                                                             echo("<input type='radio' id='role_user' name='role_user' value='0'>Administrador<br>
                                                      <input type='radio' id='role_user' name='role_user' value='1'>Ejecutivo ventas/compras<br>
                                                      <input type='radio' id='role_user' name='role_user' value='3'>Gerente de proyecto<br>
                                                      <input type='radio' id='role_user' name='role_user' checked value='2'>Agente Financiero<br>");
                                                         break;
                                                      case 3:
                                                             echo("<input type='radio' id='role_user' name='role_user' value='0'>Administrador<br>
                                                      <input type='radio' id='role_user' name='role_user' value='1'>Ejecutivo ventas/compras<br>
                                                      <input type='radio' id='role_user' name='role_user' checked value='3'>Gerente de proyecto<br>
                                                      <input type='radio' id='role_user' name='role_user' value='2'>Agente Financiero<br>");
                                                         break;
                                                     }

                                                    echo("
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='row'>
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label>DUI</label>
                                                    <input type='number' class='form-control allownumericwithoutdecimal' id='dui_user' name='dui_user' placeholder='DUI' value='". $row[7] ."' required>
                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                <div class='form-group'>
                                                    <label>NIT</label>
                                                    <input type='number' class='form-control allownumericwithoutdecimal' id='nit_user' name='nit_user' placeholder='NIT' value='". $row[8] ."' required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='row'>
                                            <div class='col-md-5'>
                                                <div class='form-group'>
                                                    <label>Numero de telefono</label>
                                                    <input type='number' class='form-control allownumericwithoutdecimal' placeholder='Numero de telefono' name='phone_number_client' id='phone_number_client' value='". $row[9] ."' required>
                                                </div>
                                            </div>
                                            <div class='col-md-5'>
                                                <div class='form-group'>
                                                    <label>Subir la foto del usuario</label>
                                                    <input type='file' size='60' name='file_user' value='". $row[10] ."' id='file_user'>
                                                    <input type='hidden' value='". $user_id ."' name='user_idcarried' id='user_idcarried'>
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
<script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/validations.js" type="text/javascript"></script>

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
