<div class="container pt-3">
<div class="mb-4">
    <h3>Input Karyawan</h3>
</div>
    <div class="col-5">
        <form action="SaveKaryawan.php" method="POST">
            <label for="nik_kr" class="form-label">NIK</label>
            <input id="nik_kr" value="" name="nik_kr" class="form-control form-control-sm shadow-none" type="text" required>
            <label for="nama_kr" class="form-label">Nama Karyawan</label>
            <input id="nama_kr" value="" name="nama_kr" class="form-control form-control-sm shadow-none" type="text" required>  
            <label for="jenis_kelamin_kr" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin_kr" id="jenis_kelamin_kr">
                <option selected>Pilih Gender</option>
                <option default value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <label for="tempat_lahir_kr" class="form-label">Tempat Lahir</label>
            <input id="tempat_lahir_kr" value="" name="tempat_lahir_kr" class="form-control form-control-sm shadow-none" type="text" required>
            <label for="tanggal_lahir_kr" class="form-label">Tgl lahir</label>
            <input id="tanggal_lahir_kr" value="" name="tanggal_lahir_kr" class="form-control form-control-sm shadow-none" type="date" required>

            <label for="alamat_kota_kr" class="form-label">Alamat Kota</label>
            <input id="alamat_kota_kr" value="" name="alamat_kota_kr" class="form-control form-control-sm shadow-none" type="text" required>
            <input type="submit" class=" mt-2 btn btn-primary btn-sm shadow-none">
            <input type="reset" class=" mt-2 btn btn-warning btn-sm shadow-none">  
            <br>
            <br>
            <br>
              

        </form>
    </div>
</div>