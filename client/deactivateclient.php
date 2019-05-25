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
$option = $_POST["block_activate"];
$data = $_POST["block_activate_info"];
    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');
switch ($option) {
    case 1:
if ($cnn){
        $sqlnr = mysqli_query($cnn, "UPDATE client_table SET client_active = 0 WHERE client_id = '". $data ."';");
        echo($sqlnr);
        if ($sqlnr){
        $_SESSION['notification'] = "client_deactivaded";
        echo "<script type='text/javascript'>window.location.href = 'selectclient.php';</script>";
        header("location:selectclient.php");
        }
        else{
        $_SESSION['notification'] = "client_no_deactivaded";
        echo "<script type='text/javascript'>window.location.href = 'selectclient.php';</script>";
        header("location:selectclient.php");
        }
    }
    else{
        $_SESSION['notification'] = "client_cant_be_deactivaded";
        echo "<script type='text/javascript'>window.location.href = 'selectclient.php';</script>";
        header("location:selectclient.php");
    }
        break;
    case 2:
if ($cnn){
        $sqlnr = mysqli_query($cnn, "UPDATE client_table SET client_active = 1 WHERE client_id = '". $data ."';");
        echo($sqlnr);
        if ($sqlnr){
        $_SESSION['notification'] = "client_activaded";
        echo "<script type='text/javascript'>window.location.href = 'selectclient.php';</script>";
        header("location:selectclient.php");
        }
        else{
        $_SESSION['notification'] = "client_no_activaded";
        echo "<script type='text/javascript'>window.location.href = 'selectclient.php';</script>";
        header("location:selectclient.php");
        }
    }
    else{
        $_SESSION['notification'] = "client_cant_be_activaded";
        echo "<script type='text/javascript'>window.location.href = 'selectclient.php';</script>";
        header("location:selectclient.php");
    }
        break;
}

    mysqli_close($cnn);
?>
