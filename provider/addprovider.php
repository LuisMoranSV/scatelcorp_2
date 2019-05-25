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
		$sqlnr = mysqli_query($cnn, "INSERT INTO provider_table(provider_first_name, provider_second_name, provider_first_lastname, provider_second_lastname, provider_NCR, provider_NIT, provider_PhoneNumber, provider_active, provider_nature) VALUES('". $provider_first_name ."','". $provider_second_name ."','". $provider_first_lastname ."','". $provider_second_lastname ."', ". $provider_NCR ." , ". $provider_NIT .", ". $provider_PhoneNumber ." , 1 , ". $provider_nature .");");
        echo($sqlnr);
		if ($sqlnr){
        $_SESSION['notification'] = "provider_added";
        echo "<script type='text/javascript'>window.location.href = 'create.php';</script>";
        header("location:createprovider.php");
        }
		else{
        $_SESSION['notification'] = "provider_no_added";
        echo "<script type='text/javascript'>window.location.href = 'createprovider.php';</script>";
        header("location:createprovider.php");
		}
	}
	else{
        $_SESSION['notification'] = "provider_cant_added";
        echo "<script type='text/javascript'>window.location.href = 'createprovider.php';</script>";
        header("location:createprovider.php");
	}
	mysqli_close($cnn);
    
?>