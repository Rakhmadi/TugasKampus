<?php
include "Mysqli.php";
$nik_kr = @$_POST["nik_kr"];
$tanggal_cuti = date('Y-m-d', strtotime($_POST["tanggal_cuti"]));
$keperluan_cuti = @$_POST["keperluan_cuti"];

$x = $Mysqli->query("INSERT INTO cuti (nik_kr,tanggal_cuti,keperluan_cuti) VALUES ('{$nik_kr}', '{$tanggal_cuti}', '{$keperluan_cuti}')");

header("Location:index.php?page=cuti",true,301);


?>