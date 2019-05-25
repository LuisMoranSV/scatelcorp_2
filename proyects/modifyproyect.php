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
$proyect_id = $_POST["proyect_id"];
$proyect_name = $_POST["proyect_name"];
$proyect_client = $_POST["proyect_client"];
$cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');
    if ($cnn){
        $sqlnr = mysqli_query($cnn, "UPDATE proyect_table SET proyect_name = '" . $proyect_name . "', client_id = ". $proyect_client ." WHERE proyect_id = ". $proyect_id .";");
        echo($sqlnr);
        if ($sqlnr){
        $_SESSION['notification'] = "proyect_modified";
        echo "<script type='text/javascript'>window.location.href = 'selectproyect.php';</script>";
        header("location:selectproyect.php");
        }
        else{
        $_SESSION['notification'] = "proyect_no_modified";
        echo "<script type='text/javascript'>window.location.href = 'selectproyect.php';</script>";
        header("location:selectproyect.php");
        }
    }
    else{
        $_SESSION['notification'] = "proyect_cant_modified";
        echo "<script type='text/javascript'>window.location.href = 'selectproyect.php';</script>";
        header("location:selectproyect.php");
    }
    mysqli_close($cnn);
?>
