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

$item_name = $_POST["item_name"];
$item_cost = $_POST["item_cost"];
$item_quantity = $_POST["item_quantity"];
$item_frecuency = $_POST["item_frecuency"];
$item_deliverytime = $_POST["item_deliverytime"];
$item_provider = $_POST["item_provider"];
$item_marginpercentaje = $_POST["item_marginpercentaje"];
if($_POST["item_iva"] == null){
 $item_iva = 0;
}
else {
   $item_iva = $_POST["item_iva"];
}
if($_POST["item_cesc"] == null){
 $item_cesc = 0;
}
else {
   $item_cesc = $_POST["item_cesc"];
}
if($_POST["item_rent"] == null){
 $item_rent = 0;
}
else {
   $item_rent = $_POST["item_rent"];
}
if($_POST["item_customs"] == null){
 $item_customs = 0;
}
else {
   $item_customs = $_POST["item_customs"];
}
$quotation_id = $_POST["quotation_id"];
$_SESSION['item_quot'] = $quotation_id;
$cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');
    if ($cnn){
        $sqlnr = mysqli_query($cnn, "INSERT INTO item_table(item_cost, item_iva, item_cesc, item_rent, item_customs, item_name, item_quantity, item_frecuency, item_marginpercentaje, item_deliverytime, quotation_id, provider_id) VALUES(". $item_cost .",". $item_iva ." ,". $item_cesc ." ,". $item_rent ." ,". $item_customs ." ,'". $item_name ."',". $item_quantity ." ,". $item_frecuency ." ,". $item_marginpercentaje ." ,". $item_deliverytime ." ,". $quotation_id ." ,". $item_provider ." );");
        echo($sqlnr);
        if ($sqlnr){
        $_SESSION['notification'] = "item_added";
        echo "<script type='text/javascript'>window.location.href = 'item.php';</script>";
        header("location:item.php");
        }
        else{
        $_SESSION['notification'] = "item_no_added";
        echo "<script type='text/javascript'>window.location.href = 'item.php';</script>";
        header("location:item.php");
        }
    }
    else{
        $_SESSION['notification'] = "item_cant_added";
        echo "<script type='text/javascript'>window.location.href = 'item.php';</script>";
        header("location:item.php");
    }
    mysqli_close($cnn);
?>
