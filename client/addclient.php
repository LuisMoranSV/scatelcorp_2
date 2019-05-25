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
    
$client_first_name = $_POST["first_name_client"];
$client_second_name = $_POST["second_name_client"];
$client_first_lastname = $_POST["first_lastname_client"];
$client_second_lastname = $_POST["second_lastname_client"];
$client_NIT = $_POST["nit_client"];
$client_NCR = $_POST["ncr_client"];
$client_PhoneNumber = $_POST["phone_number_client"];
$client_nature = $_POST["nature_client"];
  
    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');	
	if ($cnn){
		$sqlnr = mysqli_query($cnn, "INSERT INTO client_table(client_first_name, client_second_name, client_first_lastname, client_second_lastname, client_NIT, client_NCR, client_PhoneNumber, client_active, client_nature) VALUES('". $client_first_name ."','". $client_second_name ."','". $client_first_lastname ."','". $client_second_lastname ."',". $client_NIT ." ,". $client_NCR ." ,". $client_PhoneNumber ." , 1, ". $client_nature .");");
        echo($sqlnr);
		if ($sqlnr){
        $_SESSION['notification'] = "client_added";
        echo "<script type='text/javascript'>window.location.href = 'createclient.php';</script>";
        header("location:createclient.php");
        }
		else{
        $_SESSION['notification'] = "client_no_added";
        echo "<script type='text/javascript'>window.location.href = 'createclient.php';</script>";
        header("location:createclient.php");
		}
	}
	else{
        $_SESSION['notification'] = "client_cant_added";
        echo "<script type='text/javascript'>window.location.href = 'createclient.php';</script>";
        header("location:createclient.php");
	}
	mysqli_close($cnn);
    
?>