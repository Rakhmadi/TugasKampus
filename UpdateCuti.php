<?php
Include "Mysqli.php";

$id = $_GET['id'];
$nik_kr = @$_POST['nik_kr'];
$tanggal_cuti = date("Y-m-d",strtotime(@$_POST['tanggal_cuti']));
$keperluan_cuti = @$_POST['keperluan_cuti'];
$x = $Mysqli->query("UPDATE cuti SET nik_kr='{$nik_kr}', tanggal_cuti='{$tanggal_cuti}', keperluan_cuti='{$keperluan_cuti}' WHERE kode_cuti='{$id}'");
header("Location:index.php?page=cuti",true,301);
?>


