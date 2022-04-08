<!DOCTYPE html>
<?php
session_start();
if (empty($_SESSION["login"])) {
    header("Location: index.php");
}
require_once("koneksi.php");
$Dbobj = new DBConnection();
$query = "SELECT * FROM data_latih ORDER BY id_latih DESC";
$act = mysqli_query($Dbobj->getdbconnect(), $query);
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Klasifikasi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/icon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="bg-secondary text-white" id="page_top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <a href="#page_top" class="navbar-brand">Sistem Klasifikasi Waktu Penyelesaian Skripsi</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class=" row">
        <br><br><br><br><br>
    </div>
    <div class="row text-center">
        <div class="col-2">
            <img class="masthead-logoavatar mb-2" src="assets/img/av1.png" alt="..." />
            <h5>Ketua<br>Program Studi</h5>
            <br><br>
            <div>
                <button onclick="window.location.href='data_latih.php'"" type=" button" class="btn btn-outline-dark">Data Latih</button>
            </div>
            <br>
            <div>
                <button onclick="window.location.href='data_uji.php'" type="button" class="btn btn-outline-dark">Data
                    Uji</button>
            </div>
            <br>
            
            <div>
                <button onclick="window.location.href='pengujian.php'" type="button" class="btn btn-outline-dark">Pengujian</button>
            </div>
            <br><br><br><br>
            <div>
                <button onclick="window.location.href='index.php'" type="button" class="btn btn-outline-dark">Logout</button>
            </div>
        </div>
        <div class="col-10">
            <div class="container">
                <form method="POST" action="insert.php" class="container d-flex flex-column" style="text-align: left;">
                    <label><h5>Mata Kuliah Praktikum</h5></label>
                    <select name="mkd" id="mkd" class="form-control">
                        <option value="SANGAT BAIK">SANGAT BAIK</option>
                        <option value="BAIK">BAIK</option>
                        <option value="CUKUP">CUKUP</option>
                        <option value="KURANG">KURANG</option>
                        <option value="SANGAT KURANG">SANGAT KURANG</option>
                    </select>
                    <br />
                    <label>
                        <h5>Indeks Prestasi Sementara</h5>
                    </label>
                    <select name="ips" id="ips" class="form-control">
                        <option value="SANGAT BAIK">SANGAT BAIK</option>
                        <option value="BAIK">BAIK</option>
                        <option value="CUKUP">CUKUP</option>
                        <option value="KURANG">KURANG</option>
                        <option value="SANGAT KURANG">SANGAT KURANG</option>
                    </select>
                    <br />
                    <label><h5>Mata Kuliah Pilihan</h5></label>
                    <select name="mkp" id="mkp" class="form-control">
                        <option value="SANGAT BAIK">SANGAT BAIK</option>
                        <option value="BAIK">BAIK</option>
                        <option value="CUKUP">CUKUP</option>
                        <option value="KURANG">KURANG</option>
                        <option value="SANGAT KURANG">SANGAT KURANG</option>
                    </select>
                    <br />
                    <label><h5>Semester Awal Skripsi</h5></label>
                    <select name="sas" id="sas" class="form-control">
                        <option value="SANGAT BAIK">SANGAT BAIK</option>
                        <option value="BAIK">BAIK</option>
                        <option value="KURANG">KURANG</option>
                        <option value="SANGAT KURANG">SANGAT KURANG</option>
                    </select>
                    <br />
                    <label><h5>Waktu Penyelesaian</h5></label>
                    <select name="wp_aktual" id="wp_aktual" class="form-control">
                        <option value="1S">1S</option>
                        <option value="2S">2S</option>
                        <option value="3S">3S</option>
                    </select>
                    <br>
            <div class="d-grid gap-2 col-2">
                <input type="submit" name="submit" value="Tambah Data Latih" class="btn btn-info"/>
            </div>
            </div>
            
            </form>
        </div>
    </div>
    </div>

</body>

</html>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>