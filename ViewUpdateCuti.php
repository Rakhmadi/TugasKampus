<div class="container pt-3">
<div class="mb-4">
<?php
    $n = $_GET["id"];
    $query = "SELECT * FROM cuti WHERE kode_cuti='$n'";
    $x = $Mysqli->query($query)->fetch_all(MYSQLI_ASSOC)[0];
?>
    <h3>Update Cuti</h3>
</div>
    <div class="col-5">
        <form action="UpdateCuti.php?id=<?= $x['kode_cuti']?>" method="POST">
            <label for="nik_kr" class="form-label">NIK</label>
            <input value="<?= $x['nik_kr']?>" id="nik_kr" value="" name="nik_kr" class="form-control form-control-sm shadow-none" type="text" required>
            <label for="tanggal_cuti" class="form-label">Tgl lahir</label>
            <input value="<?= $x['tanggal_cuti']?>" id="tanggal_cuti" value="" name="tanggal_cuti" class="form-control form-control-sm shadow-none" type="date" required>
            <label for="keperluan_cuti" class="form-label">Keperluan Cuti</label>
            <textarea value="" class="shadow-none form-control" name="keperluan_cuti" id="keperluan_cuti" cols="30" rows="10"><?=$x['keperluan_cuti']?></textarea>
            <input type="submit" class=" mt-2 btn btn-primary btn-sm shadow-none">
            <input type="reset" class=" mt-2 btn btn-warning btn-sm shadow-none">
            <br>
            <br>
            <br>
        </form>
    </div>
</div>