<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Ver Cotización | SCATEL CORP</title>

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
                        <div class="col-md-12">
                            <div class="card">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                   <?php
                    if($_POST["edit"] == null){
                       $quotation_id = $_SESSION['item_quot'];
                    }
                    else {
                     $quotation_id = $_POST["edit"];
                    }
                    $_SESSION['item_quot'] = null;
                    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
                                                or die('cant conect');
                                                $sqlcg = "SELECT quotation_table.quotation_name, quotation_table.quotation_version, user_table.user_first_name, user_table.user_first_lastname, client_table.client_first_name, client_table.client_first_lastname, quotation_table.quotation_date FROM quotation_table
                                                INNER JOIN user_table ON quotation_table.user_id = user_table.user_id
                                                INNER JOIN proyect_table ON  quotation_table.proyect_id = proyect_table.proyect_id
                                                INNER JOIN client_table ON proyect_table.client_id = client_table.client_id
                                                Where quotation_table.quotation_id = ". $quotation_id;
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
                                                        echo ("
                    <div class='container-fluid'>
                        <div class='row'>
                            <div class='col-md-auto'>
                                <div class='card'>
                                    <div class='header'>
                                        <h4 class='title'>Su Cotizacion es:</h4>
                                    </div>
                                    <div class='content'>
                                        <div class='row'>
                                            <div class='col-md-4'>
                                                <div>
                                                    <label>Nombre de la cotización:</label>
                                                    <label for=''><u>". $row[0] ."</u></label>
                                                </div>
                                            </div>
                                            <div class='col-md-4'>
                                                <div class=''>
                                                    <label>Versión de la cotización:</label>
                                                    <label for=''><u>". $row[1] ."</u></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-4'>
                                                <div class=''>
                                                    <label>Usuario:</label>
                                                    <label for=''><u>". $row[2] ." ". $row[3] ."</u></label>
                                                </div>
                                            </div>
                                            <div class='col-md-3'>
                                                <div class=''>
                                                    <label>Cliente:</label>
                                                    <label for=''><u>". $row[4] ." ". $row[5] ."</u></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-4'>
                                                <div class=''>
                                                    <label>Fecha de la cotizacion:</label>
                                                    <label for=''><u>". $row[6] ."</u></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ");
                                                    }
                                                }
                    ?>
                </div>
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='card'>
                                <div class='header'>
                                    <h4 class='title'>Tabla de Items</h4>
                                    <p class='category'>Cada Fila es un item de la cotizacion seleccionada</p>
                                </div>
                                <div class='content table-responsive table-full-width'>
                                    <table class='table table-hover table-striped' id='table_quotation'>
                                        <thead>
                                            <tr>
                                                <!--<th>ID del item</th> -->
                                                <th>N. item</th>
                                                <th>Costo item</th>
                                                <th>Cantidad</th>
                                                <th>Frecuencia</th>
                                                <th>T. entrega</th>
                                                <th>N. prov.</th>
                                                <th>% ganancia</th>
                                                <th>IVA</th>
                                                <th>CESC</th>
                                                <th>Renta</th>
                                                <th>Aduanas</th>
                                                <th>Modificar</th>
                                                <th>Deshabilitar</th>
                                            </tr>
                                        </thead>
                                        <tbody id='edit_table_quotation'>
                                            <tr data-row-id=''>
                                               <?php
                                                $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
                                                or die('cant conect');
                                                $sqlcg = "SELECT item_table.item_name, item_table.item_cost, item_table.item_quantity, item_table.item_frecuency, item_table.item_deliverytime, provider_first_name, provider_first_lastname, item_table.item_marginpercentaje, item_table.item_iva,
                                                item_table.item_cesc, item_table.item_rent, item_table.item_customs FROM item_table
                                                INNER JOIN provider_table ON item_table.provider_id = provider_table.provider_id
                                                WHERE quotation_id = ". $quotation_id .";";
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
                                                        echo ("
                                                               <tr>
                                                                <td>". $row[0] ."</td>
                                                                <td>". $row[1] ."</td>
                                                                <td>". $row[2] ."</td>
                                                                <td>". $row[3] ."</td>
                                                                <td>". $row[4] ."</td>
                                                                <td>". $row[5] ." ".$row[6] ."</td>
                                                                <td>". $row[7] ."</td>
                                                                <td>");
                                                              if($row[8] == 0)
                                                               echo("No");
                                                              else{
                                                                  echo("Si");
                                                              }
                                                              echo("</td>
                                                                <td>");
                                                              if($row[9] == 0)
                                                               echo("No");
                                                              else{
                                                                  echo("Si");
                                                              }
                                                              echo("</td>
                                                                <td>");
                                                              if($row[10] == 0)
                                                               echo("No");
                                                              else{
                                                                  echo("Si");
                                                              }
                                                              echo("</td>
                                                                <td>");
                                                              if($row[11] == 0)
                                                               echo("No");
                                                              else{
                                                                  echo("Si");
                                                              }
                                                              echo("</td>
                                                                <td>
                                                                <form action='editquotation.php' method='post'>
                                                                <input type='hidden' name='edit' id='edit' value='". $row[0] ."'>
                                                                <button type='submit' class='btn btn-primary'>Modificar</button>
                                                                </form>
                                                                </td>
                                                                <td>
                                                                <form action='editquotation.php' method='post'>
                                                                <input type='hidden' name='edit' id='edit' value='". $row[0] ."'>
                                                                <button type='submit' class='btn btn-info'>Deshabilitar</button></td>
                                                                </form>
                                                                </td>"
                                                             );
                                                        echo("'</tr>'");
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
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-auto">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Ingreso de nuevo item</h4>
                                    </div>
                                    <div class="content">
                                        <form action="additem.php" method="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nombre del item</label>
                                                        <input type="text" class="form-control" id="item_name" name="item_name" placeholder="Nombre del item" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Costo del item</label>
                                                        <input type="text" name="item_cost" id="item_cost" class="form-control" placeholder="costo" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Cantidad</label>
                                                        <input type="text" class="form-control" id="item_quantity" name="item_quantity" placeholder="cantidad" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Frecuencia</label>
                                                        <input type="text" class="form-control" id="item_frecuency" name="item_frecuency" placeholder="Cliente" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Tiempo de entrega</label>
                                                        <input type="text" name="item_deliverytime" id="item_deliverytime" class="form-control" placeholder="Tiempo de entrega" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Id proveedor</label>
                                                        <div>
                                                        <datalist id="proyect_providerlist">
                                                           <?php
                                                            $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
                                                            or die('cant conect');

                                                            $sqlcg = "SELECT provider_id, provider_first_name, provider_first_lastname FROM provider_table WHERE provider_active = 1";
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
                                                                    echo("<option value='". $row[0] ."'>". $row[1] . " " . $row[2] ."</option>");
                                                                }
                                                            }
                                                            ?>
                                                        </datalist>
                                                        <input  autoComplete="on" list="proyect_providerlist" id="item_provider" name="item_provider" class="col-sm-6 custom-select custom-select-sm"/>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Margen de ganancia <span>(en porcentaje)</span></label>
                                                        <input type="number" name="item_marginpercentaje" id="item_marginpercentaje" class="form-control" placeholder="Porcentaje de la ganancia" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-">
                                                    <div class="form-group">
                                                        <div class="checkboxes">
                                                            &nbsp;<label for="">Impuestos y costos extras</label><br>
                                                            &nbsp; <label for="item_iva"><input type="checkbox" id="item_iva" name="item_iva" value='1'/> <span>&nbsp;&nbsp;&nbsp;I.V.A&nbsp;&nbsp;&nbsp;</span></label>
                                                            &nbsp; <label for="item_cesc"><input type="checkbox" id="item_cesc" name="item_cesc" value='1'/> <span>&nbsp;&nbsp;&nbsp;CESC&nbsp;&nbsp;&nbsp;</span></label>
                                                            &nbsp; <label for="item_rent"><input type="checkbox" id="item_rent" name="item_rent" value='1'/> <span>&nbsp;&nbsp;&nbsp;RENTA&nbsp;&nbsp;&nbsp;</span></label>
                                                            &nbsp;<label for="item_customs"><input type="checkbox" id="item_customs" name="item_customs" value='1'/> <span>&nbsp;&nbsp;&nbsp;ADUANAS&nbsp;&nbsp;&nbsp;</span></label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <input type="hidden" id="quotation_id" name="quotation_id" value="<?php echo($quotation_id) ?>">
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>

                                            <div class="clearfix"></div>
                                        </form>
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
<?php
    switch ($_SESSION['notification']) {
    case "item_added":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-user',
            message: 'Item Agregado Exitosamente'

        }, {
            type: 'success',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "item_no_added":
        echo("
    <script type='text/javascript'>
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-close-circle',
            message: 'El item no pudo ser agregado'

        }, {
            type: 'warning',
            timer: 4000
        });

    });
</script>");
    $_SESSION['notification'] = null;
        break;
    case "item_cant_added":
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
