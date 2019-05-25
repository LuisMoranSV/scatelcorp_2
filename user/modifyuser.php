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
$user_idcarried = $_POST["user_idcarried"];
$user_id = $_POST["user_id"];
$user_first_name = $_POST["first_name_user"];
$user_second_name = $_POST["second_name_user"];
$user_first_lastname = $_POST["first_lastname_user"];
$user_second_lastname = $_POST["second_lastname_user"];
$user_password = $_POST["password_user"];
$user_password_md5 = md5($user_password);
$user_role = $_POST["role_user"];
$user_DUI = $_POST["dui_user"];
$user_NIT = $_POST["nit_user"];
$user_phone = $_POST["phone_number_client"];


    
    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');	
	if ($cnn){
		$sqlnr = mysqli_query($cnn, "UPDATE user_table SET user_id = '". $user_id ."', user_first_name = '". $user_first_name ."', user_second_name = '". $user_second_name ."', user_first_lastname = '". $user_first_lastname ."', user_second_lastname = '". $user_second_lastname ."', user_password = '". $user_password_md5 ."', user_role = ". $user_role .", user_DUI = ". $user_DUI .", user_NIT = ". $user_NIT .", user_phone = ". $user_phone ." WHERE user_id = '". $user_idcarried ."';");
        echo($sqlnr);
		if ($sqlnr){
        $_SESSION['notification'] = "user_modified";
        echo "<script type='text/javascript'>window.location.href = 'createuser.php';</script>";
        header("location:selectuser.php");
        }
		else{
        $_SESSION['notification'] = "user_no_modified";
        echo "<script type='text/javascript'>window.location.href = 'createuser.php';</script>";
        header("location:selectuser.php");
		}
	}
	else{
        $_SESSION['notification'] = "user_cant_modified";
        echo "<script type='text/javascript'>window.location.href = 'createuser.php';</script>";
        header("location:selectuser.php");
	}
	mysqli_close($cnn);
?>