<?php
include "Mysqli.php";

$x = $Mysqli->query("DELETE FROM cuti WHERE kode_cuti = '{$_GET['id']}'");

header("location:index.php?page=cuti",true,301);
?>