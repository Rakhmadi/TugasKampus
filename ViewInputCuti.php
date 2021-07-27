<div class="container pt-3">
<div class="mb-4">
    <h3>Input Cuti</h3>
</div>
    <div class="col-5">
        <form action="SaveCuti.php" method="POST">
            <label for="nik_kr" class="form-label">NIK</label>
            <input id="nik_kr" value="" name="nik_kr" class="form-control form-control-sm shadow-none" type="text" required>
            <label for="tanggal_cuti" class="form-label">Tgl lahir</label>
            <input id="tanggal_cuti" value="" name="tanggal_cuti" class="form-control form-control-sm shadow-none" type="date" required>
            <label for="keperluan_cuti" class="form-label">Keperluan Cuti</label>
            <textarea class="shadow-none form-control" name="keperluan_cuti" id="keperluan_cuti" cols="30" rows="10"></textarea>
            <input type="submit" class=" mt-2 btn btn-primary btn-sm shadow-none">
            <input type="reset" class=" mt-2 btn btn-warning btn-sm shadow-none">
            <br>
            <br>
            <br>
              

        </form>
    </div>
</div>