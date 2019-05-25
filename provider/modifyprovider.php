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
$provider_id = $_POST["provider_id"];
$provider_first_name = $_POST["first_name_provider"];
$provider_second_name = $_POST["second_name_provider"];
$provider_first_lastname = $_POST["first_lastname_provider"];
$provider_second_lastname = $_POST["second_lastname_provider"];
$provider_NCR = $_POST["nit_provider"];
$provider_NIT = $_POST["ncr_provider"];
$provider_PhoneNumber = $_POST["phone_number_provider"];
$provider_nature = $_POST["nature_provider"];
    
    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');	
	if ($cnn){
		$sqlnr = mysqli_query($cnn, "UPDATE provider_table SET provider_first_name = '". $provider_first_name ."', provider_second_name = '". $provider_second_name ."', provider_first_lastname = '". $provider_first_lastname ."', provider_second_lastname = '". $provider_second_lastname ."', provider_NIT = ". $provider_NIT .", provider_NCR = ". $provider_NCR .",provider_PhoneNumber = ". $provider_PhoneNumber .", provider_nature = ". $provider_nature ." WHERE provider_id = '". $provider_id ."'");
        echo($sqlnr);
		if ($sqlnr){
        $_SESSION['notification'] = "provider_modified";
        echo "<script type='text/javascript'>window.location.href = 'createprovider.php';</script>";
        header("location:selectprovider.php");
        }
		else{
        $_SESSION['notification'] = "provider_no_modified";
        echo "<script type='text/javascript'>window.location.href = 'createprovider.php';</script>";
        header("location:selectprovider.php");
		}
	}
	else{
        $_SESSION['notification'] = "provider_cant_modified";
        echo "<script type='text/javascript'>window.location.href = 'createprovider.php';</script>";
        header("location:selectprovider.php");
	}
	mysqli_close($cnn);
?>