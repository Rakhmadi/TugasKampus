<?php
include "Mysqli.php";
session_start();
$TokenNow = $_SESSION['token'] ;
$ext = $Mysqli->query("SELECT * FROM users_log Where session_log='{$TokenNow}'")->fetch_all(MYSQLI_ASSOC);
if ($ext == NULL) {
    header("Location:login.php?msg=1",true,301);
}