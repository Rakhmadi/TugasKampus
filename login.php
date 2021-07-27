<?php
    include 'Mysqli.php';
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
    <a class="navbar-brand" href="index.php">Perpustakaan</a>
  </div>
</nav>
<div class="container pt-2">
    <div class="row mt-4  d-flex flex-row justify-content-center">
        <div class="col-9 col-lg-5">
             <div class=" card h-100 border-0 custom-shadow cust-radius p-2">
                <form action="AuthLogin.php" method="POST">
                    <?php
                        function msg($msg){
                            return '<div class=" m-4 mb-0 alert alert-warning alert-dismissible fade show" role="alert">
                            '.$msg.'
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        }
                        $x = @$_GET['msg'];
                        if ($x == 1) {
                            echo msg("Login terlebih dahulu");
                        }elseif ($x == 2) {
                            echo msg("Nama atau pass salah");
                        }elseif($x == 3){
                            echo msg("Logout Success");
                        }
                    ?>
                    <div class="p-4 pb-0"><h1>Login</h1></div>
                    <div class="p-4">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control mb-2 shadow-none" name="nama" id="nama" required>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control mb-2 shadow-none" name="password" id="password" required>
                        <input class="btn btn-primary shadow-none" type="submit" value="Login">
                    </div>
                </form>
             </div>
        </div>  
    </div>
</div>
<script src="./bootstrap/js/bootstrap.js"></script>
<script>
</script>
</body>
</html>