<?php
include "Mysqli.php";

$x = $Mysqli->query("DELETE FROM karyawan WHERE nik_kr = '{$_GET['nik']}'");

header("location:index.php?page=karyawan",true,301);
?>