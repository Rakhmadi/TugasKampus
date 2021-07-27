<?php
include "Mysqli.php";
$nikGET = @$_GET['nik'];
$nik_kr = @$_POST["nik_kr"];
$nama_kr = @$_POST["nama_kr"];
$jenis_kelamin_kr = @$_POST["jenis_kelamin_kr"];
$tempat_lahir_kr = @$_POST["tempat_lahir_kr"];
$tanggal_lahir_kr = date('Y-m-d', strtotime(@$_POST["tanggal_lahir_kr"]));
$alamat_kota_kr = @$_POST["alamat_kota_kr"];
$x = $Mysqli->query("UPDATE karyawan SET nik_kr='{$nik_kr}', nama_kr='{$nama_kr}', jenis_kelamin_kr='{$jenis_kelamin_kr}', tempat_lahir_kr='{$tempat_lahir_kr}', tanggal_lahir_kr='{$tanggal_lahir_kr}', alamat_kota_kr='{$alamat_kota_kr}' Where nik_kr='{$nikGET}'");

header("location:index.php?page=karyawan",true,301);

?>