<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Ver usuario | SCATEL CORP</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../css/light-bootstrap-dashboard.css" rel="stylesheet" />

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
                <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tabla de usuarios</h4>
                                <p class="category">Cada fila es un usuario</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" id="table_user">
                                    <thead>
                                       <tr>
                                        <th>ID</th>
                                        <th>Primer nombre</th>
                                        <th>Primer apellido</th>
                                        <th>Rol</th>
                                        <th>DUI</th>
                                        <th>NIT</th>
                                        <th>Numero de telefono</th>
                                        <th>Modificar</th>
                                        <th>Des/Activar</th>
                                        <th>Desbloquear</th>
                                        </tr>
                                    </thead>
                                    <tbody id="edit_table_user">
                                        <tr data-row-id="">
                                        <?php
    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');

    $sqlcg = "SELECT user_id, user_first_name, user_first_lastname, user_role, user_DUI, user_NIT, user_phone, user_active, user_login_attemps FROM user_table";
    $result = mysqli_query($cnn, $sqlcg);
    if (!$result)
    {
        echo "No se pudo realizar la consulta";
        exit();
    }
    else
    {
        while ($row = mysqli_fetch_array($result))
        {
            switch ($row[3]) {
    case 0:
        $cargo = "Administrador";
        break;
    case 1:
        $cargo = "Ventas/Compras";
        break;
    case 2:
        $cargo = "Financiero";
        break;
    case 3:
        $cargo = "Proyectos";
        break;
    default:
        $cargo = "Error";
}
            echo ("
                   <tr>
                    <td>". $row[0] ."</td>
                    <td>". $row[1] ."</td>
                    <td>". $row[2] ."</td>
                    <td>". $cargo ."</td>
                    <td>". $row[4] ."</td>
                    <td>". $row[5] ."</td>
                    <td>". $row[6] ."</td>
                    <td>
                    <form action='edituser.php' method='post'>
                  <input type='hidden' name='edit' id='edit' value='". $row[0] ."'>
                  <button type='submit' class='btn btn-primary'>Modificar</button></td>
                    </form>
                    <td>");
            if($row[7] == 0){
                echo("
                <form action='block_activate.php' method='post'>
                  <input type='hidden' name='block_activate' id='block_activate' value='1'>
                  <input type='hidden' name='block_activate_info' id='block_activate_info' value='". $row[0] ."'>
                  <button style='margin-left:20px;' type='submit' class='btn btn-success'>Activar</button>
              </form>");
            }
            else {
               echo("
               <form action='block_activate.php' method='post'>
                  <input type='hidden' name='block_activate' id='block_activate' value='2'>
                  <input type='hidden' name='block_activate_info' id='block_activate_info' value='". $row[0] ."'>
                  <button style='margin-left:10px;' type='submit' class='btn btn-danger'>Desactivar</button>
              </form>");
            }
            echo("</td><td>");
            if($row[8] < 6){
            }
            else {
               echo("
               <form action='block_activate.php' method='post'>
                  <input type='hidden' name='block_activate' id='block_activate' value='3'>
                  <input type='hidden' name='block_activate_info' id='block_activate_info' value='". $row[0] ."'>
                  <button style='margin-left:10px;' type='submit' class='btn btn-info'>Desbloquear</button>
              </form>");
            }
            echo("</td></tr>");


        }
    }
    ?>
                                        </tr>
                                    </tbody>
                                </table>

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
<?php
    switch ($_SESSION['notification']) {
    case "user_activaded":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-user',
            message: 'Usuario Activado Exitosamente'

        }, {
            type: 'success',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "user_no_activaded":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-close-circle',
            message: 'El usuario no pudo ser activado'

        }, {
            type: 'warning',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "user_cant_activaded":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-server',
            message: 'Error de conexion con base de datos'

        }, {
            type: 'danger',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
case "user_deactivaded":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-user',
            message: 'Usuario Desactivado Exitosamente'

        }, {
            type: 'success',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "user_no_deactivaded":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-close-circle',
            message: 'El usuario no pudo ser desactivado'

        }, {
            type: 'warning',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "user_cant_deactivaded":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-server',
            message: 'Error de conexion con base de datos'

        }, {
            type: 'danger',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
case "user_unblocked":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-user',
            message: 'Usuario Desbloqueado Exitosamente'

        }, {
            type: 'success',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "user_no_unblocked":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-close-circle',
            message: 'El usuario no pudo ser desbloqueado'

        }, {
            type: 'warning',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "user_cant_unblocked":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-server',
            message: 'Error de conexion con base de datos'

        }, {
            type: 'danger',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
            case "user_modified":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-user',
            message: 'Usuario Modificado Exitosamente'

        }, {
            type: 'success',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "user_no_modified":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-close-circle',
            message: 'El usuario no pudo ser modificado'

        }, {
            type: 'warning',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "user_cant_modified":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-server',
            message: 'Error de conexion con base de datos'

        }, {
            type: 'danger',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    default:
}

?>
</html>
