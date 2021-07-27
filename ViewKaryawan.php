<div class="container pt-3">
                   <a href="index.php?page=inputKaryawan" class="btn btn-primary btn-sm mb-2 rounded-4 shadow-none">Add Data <span class="mdi mdi-plus"></span></a>
            <div class="table-responsive">
                                    <table id="myTb" class="table table-bordered">
                        <thead>
                            <tr>
                              <th>No</th>
                              <th>NIK</th>
                              <th>Nama Karyawan</th>
                              <th>Jenis Kelamin</th>
                              <th>Tempat Lahir</th>
                              <th>Tanggal Lahir</th>
                              <th>Kota</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                $no=1;
                                $data = $Mysqli->query("SELECT * FROM karyawan")->fetch_all(MYSQLI_ASSOC);
                            ?>
                            <?php
                                foreach($data as $item){
                            ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$item['nik_kr']?></td>
                                    <td><?=$item['nama_kr']?></td>
                                    <td><?=$item['jenis_kelamin_kr']?></td>
                                    <td><?=$item['tempat_lahir_kr']?></td>
                                    <td><?=date('d F Y',strtotime($item['tanggal_lahir_kr']))?></td>
                                    <td><?=$item['alamat_kota_kr']?></td>
                                    <td class="col-md-8">
                                        <a class="btn btn-group btn-primary btn-sm m-1 x" role="button" href="<?="index.php?page=cuti&n=x&nik={$item['nik_kr']}"?>">Detail Cuti</a>
                                        <a class="btn btn-group btn-warning btn-sm m-1 x" role="button" href="<?="index.php?page=updateKaryawan&nik={$item['nik_kr']}"?>">Edit</a>
                                        <a class="btn btn-group btn-danger btn-sm m-1 x" role="button" href="<?="DeleteKaryawan.php?nik={$item['nik_kr']}"?>">Delete</a>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                          </tbody>
                    </table>
            </div>
</div>