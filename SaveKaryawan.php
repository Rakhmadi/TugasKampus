<?php
include "Mysqli.php";
$nik_kr = @$_POST["nik_kr"];
$nama_kr = @$_POST["nama_kr"];
$jenis_kelamin_kr = @$_POST["jenis_kelamin_kr"];
$tempat_lahir_kr = @$_POST["tempat_lahir_kr"];
$tanggal_lahir_kr = date('Y-m-d', strtotime(@$_POST["tanggal_lahir_kr"]));
$alamat_kota_kr = @$_POST["alamat_kota_kr"];
$x = $Mysqli->query("INSERT INTO karyawan VALUES('{$nik_kr}','{$nama_kr}','{$jenis_kelamin_kr}','{$tempat_lahir_kr}','{$tanggal_lahir_kr}','{$alamat_kota_kr}')");


header("Location:index.php?page=karyawan",true,301);

?>