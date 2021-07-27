<?php
include "AuthTokenVerify.php";

$x = $Mysqli->query("DELETE FROM users_log Where session_log='{$_SESSION['token']}'");

session_regenerate_id();
session_destroy();

header("Location: login.php?msg=3",true,301);

?>