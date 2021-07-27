<div class="container pt-3">
                   <a href="index.php?page=inputCuti" class="btn btn-primary btn-sm mb-2 rounded-4 shadow-none">Add Data <span class="mdi mdi-plus"></span></a>
            <div class="table-responsive">
                                    <table id="myTb" class="table table-bordered">
                        <thead>
                            <tr>
                              <th>No</th>
                              <th>NIK</th>
                              <th>Tanggal Cuti</th>
                              <th>Keperluan Cuti</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                $no=1;
                                if (@$_GET['n'] === "x") {
                                    $data = $Mysqli->query("SELECT * FROM cuti WHERE nik_kr = '{$_GET['nik']}'")->fetch_all(MYSQLI_ASSOC);
                                }else{
                                    $data = $Mysqli->query("SELECT * FROM cuti ")->fetch_all(MYSQLI_ASSOC);
                                }
                            ?>
                            <?php
                                foreach($data as $item){
                            ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$item['nik_kr']?></td>
                                    <td><?=date('d F Y',strtotime($item['tanggal_cuti']))?></td>
                                    <td><?=$item['keperluan_cuti']?></td>
                                    
                                    <td class="col-md-8">
                                        <a class="btn btn-group btn-warning btn-sm m-1 x" role="button" href="<?="index.php?page=updateCuti&id={$item["kode_cuti"]}"?>">Edit</a>
                                        <a class="btn btn-group btn-danger btn-sm m-1 x" role="button" href="<?="DeleteCuti.php?id={$item["kode_cuti"]}"?>">Delete</a>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                          </tbody>
                    </table>
            </div>
</div>