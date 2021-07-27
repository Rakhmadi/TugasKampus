<div class="container pt-3">
<div class="mb-4">
    <?php
    $n = $_GET["nik"];
    $query = "SELECT * FROM karyawan WHERE nik_kr='$n'";
    $x = $Mysqli->query($query)->fetch_all(MYSQLI_ASSOC)[0];
?>
    <h3>Update Karyawan</h3>
    <h6>NIK - <?=$x['nik_kr']?></h6>
</div>

    <div class="col-5">
        <form action="UpdateKaryawan.php?nik=<?=$x['nik_kr']?>" method="POST">
            <label for="nik_kr" class="form-label">NIK</label>
            <input value="<?=$x['nik_kr']?>" id="nik_kr" value="" name="nik_kr" class="form-control form-control-sm shadow-none" type="text" required>
            <label for="nama_kr" class="form-label">Nama Karyawan</label>
            <input  value="<?=$x['nama_kr']?>" id="nama_kr" value="" name="nama_kr" class="form-control form-control-sm shadow-none" type="text" required>  
            <label for="jenis_kelamin_kr" class="form-label">Jenis Kelamin</label>
            <select  value="" class="form-select" name="jenis_kelamin_kr" id="jenis_kelamin_kr">
                <option selected><?=$x['jenis_kelamin_kr']?></option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <label for="tempat_lahir_kr" class="form-label">Tempat Lahir</label>
            <input value="<?=$x['tempat_lahir_kr']?>" id="tempat_lahir_kr" value="" name="tempat_lahir_kr" class="form-control form-control-sm shadow-none" type="text" required>
            <label for="tanggal_lahir_kr" class="form-label">Tgl lahir</label>
            <input value="<?=date("Y-m-d",strtotime($x['tanggal_lahir_kr']))?>" id="tanggal_lahir_kr" name="tanggal_lahir_kr" class="form-control form-control-sm shadow-none" type="date" required>

            <label for="alamat_kota_kr" class="form-label">Alamat Kota</label>
            <input value="<?=$x['alamat_kota_kr']?>" id="alamat_kota_kr" value="" name="alamat_kota_kr" class="form-control form-control-sm shadow-none" type="text" required>
            <input type="submit" class=" mt-2 btn btn-primary btn-sm shadow-none">
            <input type="reset" class=" mt-2 btn btn-warning btn-sm shadow-none">  
            <br>
            <br>
            <br>
              

        </form>
    </div>
</div>