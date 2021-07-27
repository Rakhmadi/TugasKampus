<?php
    include "Mysqli.php";
    
    session_start();

    $nama = @$_POST['nama'];
    $pass = @$_POST['password'];
    $pass = md5($pass);

    $sesion = session_id();

    $ext = $Mysqli->query("SELECT * FROM users WHERE username = '{$nama}' AND password = '${pass}'");
    $date = date('Y-m-d\TH:i:s');
    if ($ext->num_rows >= 1) {

        $Mysqli->query("INSERT INTO users_log VALUES('','{$ext->fetch_all(MYSQLI_ASSOC)[0]['kode_usr']}','{$sesion}' , '{$date}' ) ");
        $_SESSION['token'] = $sesion;
        echo $_SESSION['token'];
        header("Location:index.php",true,301);        

    }else{
       header("Location:login.php?msg=2",true,301);
    }

?>