<?PHP

    session_start();

    $cnn = mysqli_connect("50.62.177.60","asi1","proyecto","scatel")
    or die('cant conect');	

    $user = $_POST["dat1"];
    $pass = $_POST["dat2"];
    $passmd5 = md5($pass);
    $_SESSION['sesion_user'] = $user;
    $_SESSION['sesion_pass'] = $pass;

    $sqlcon = "SELECT user_id, user_first_name, user_first_lastname, user_password, user_login_attemps, user_role, user_photo, user_active FROM user_table WHERE user_id = '". $_SESSION['sesion_user'] ."'";
	$result = mysqli_query ($cnn, $sqlcon);
    $row = mysqli_fetch_row($result);
    $name = $row[1] . " " . $row[2];
    $passdb = $row[3];
    $attemps = $row[4];
    $position = $row[5];
    $photo = $row[6];
    $active = $row[7];
    $_SESSION['sesion_name'] = $name;
    $_SESSION['sesion_attemps'] = $attemps;
    $_SESSION['sesion_position'] = $position;
    $_SESSION['sesion_active'] = $active;
    $_SESSION['sesion_photo'] = $photo;
    if ($passmd5 == $passdb) {
       if($active == '1'){
            if($attemps < 6){
               if($position == 0){
                    header("location:0.php");
                }
                if($position == 1){
                    header("location:1.php");
                }
                if($position == 2){
                    header("location:2.php");
                }
                if($position == 3){
                    header("location:3.php");
                } 
            }
            else {
               header('Location:login_blocked.html'); 
            }
        }
        else {
            header('Location:login_deactivaded.html');
        }
    }
    else {
           header('Location:login_denied.html'); 
    }
         
?>