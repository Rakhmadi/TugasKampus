<?php
    include 'Mysqli.php';
    include "AuthTokenVerify.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/mdiIcon/css/materialdesignicons.css">
    <link href="./bootstrap/mdiIcon/fonts/materialdesignicons-webfont.ttf" rel="stylesheet">
    <title>Tugas</title>
    <style>
        .custom-shadow{
            box-shadow: 0rem 0rem 3rem rgba(48, 46, 49, 0.15)!important;
        }
        .cust-radius{
            border-radius:  0.75rem;
        }
        .n{
            background:#82868f00!important;
            transition: .3s;
        }
        .n:hover{
            background:#293b5f0b !important;
        }
        .btn-primary{
            background-color:#8462ce !important;
            border:none;
        }
        .x{
            display: inline-block;
            vertical-align: top;
        }

    </style>
</head>
<body>
<nav style="background-color:#8462ce" class="navbar navbar-expand-lg navbar-dark ">
  <div class="container">
    <a class="navbar-brand" href="index.php">Aplikasi Pengajuan Cuti</a>
  </div>
</nav>
<div class="container pt-2">
    <div class="row mt-4">
        <div class="col-3">
            <div class="card border-0 custom-shadow cust-radius p-2 ">
                <div class="p-2">

                </div>
                <nav class="nav flex-column">
                    <a class="n btn btn-ligth btn-md w-100 mt-1 shadow-none cust-radius border-0 text-start bg-transparent fs-5" href="index.php?page=karyawan">Data karyawan</a>
                    <a class="n btn btn-ligth btn-md w-100 mt-1 shadow-none cust-radius border-0 text-start bg-transparent fs-5" href="index.php?page=cuti">Data cuti</a>
                    <a class="n btn btn-ligth btn-md w-100 mt-1 shadow-none cust-radius border-0 text-start bg-transparent fs-5" href="AuthLogout.php">Logout</a>
                  </nav>
            </div>
        </div>
        <div class="col-9 ps-3">
            <div class="card h-100 border-0 custom-shadow cust-radius p-2">
                <?php
                    $payLoad = @$_GET['page'];
                    if ($payLoad == "karyawan") {
                        include 'ViewKaryawan.php';
                    }elseif($payLoad == "cuti"){
                        include 'ViewCuti.php';
                    }elseif($payLoad == "inputKaryawan"){
                        include 'ViewInputKaryawan.php';
                    }elseif($payLoad == "updateKaryawan"){
                        include 'ViewUpdateKaryawan.php';
                    }elseif($payLoad == "inputCuti"){
                        include 'ViewInputCuti.php';
                    }elseif($payLoad == "updateCuti"){
                        include 'ViewUpdateCuti.php';
                    }else{
                        include 'ViewKaryawan.php';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="./bootstrap/js/bootstrap.js"></script>
<script>
</script>
</body>
</html>