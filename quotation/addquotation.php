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

$quotation_name = $_POST["quotation_name"];
$quotation_version = $_POST["quotation_version"];
$quotation_proyect = $_POST["quotation_proyect"];
$quotation_valid = $_POST["quotation_valid"];
$quotation_payment = $_POST["quotation_payment"];
$quotation_delivery = $_POST["quotation_deliverytime"];
$quotation_conditions = $_POST["quotation_conditions"];
$quotation_warranty = $_POST["quotation_warranty"];
$cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');
    if ($cnn){
        $sqlnr = mysqli_query($cnn, "insert into quotation_table(quotation_name, quotation_version, proyect_id, quotation_validthru, quotation_paymentmethod, quotation_conditions, quotation_warranty, quotation_deliverytime, user_id, quotation_date, quotation_active) values('". $quotation_name ."',". $quotation_version .",". $quotation_proyect .",". $quotation_valid .",". $quotation_payment .",'". $quotation_conditions ."','". $quotation_warranty ."',". $quotation_delivery .",'". $_SESSION['sesion_user'] ."','". date("Y-m-d H:i:s") ."', 1);");
        echo($sqlnr);
        if ($sqlnr){
        $_SESSION['notification'] = "proyect_added";
        echo "<script type='text/javascript'>window.location.href = 'createquotation.php';</script>";
        header("location:createquotation.php");
        }
        else{
        $_SESSION['notification'] = "proyect_no_added";
        echo "<script type='text/javascript'>window.location.href = 'createquotation.php';</script>";
        header("location:createquotation.php");
        }
    }
    else{
        $_SESSION['notification'] = "proyect_cant_added";
        echo "<script type='text/javascript'>window.location.href = 'createquotation.php';</script>";
        header("location:createquotation.php");
    }
    mysqli_close($cnn);
?>
