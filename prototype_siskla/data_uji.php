<!DOCTYPE html>
<?php
require_once("hitung_wnb2.php");
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
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
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
                <button onclick="window.location.href='data_latih.php'"" type=" button"
                    class="btn btn-outline-dark">Data Latih</button>
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
                <button onclick="window.location.href='index.php'" type="button"
                    class="btn btn-outline-dark">Logout</button>
            </div>
        </div>
        <div class="col-8">
        <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h5 style="text-align: left; font-size: 30px;">Data Uji</h5>
                    </div>
                    <div class="col-6" style="text-align: right;">
                    <button onclick="window.location.href='tambah_datauji.php'" type="button" class="btn btn-outline-dark">Tambah Data</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <table class="table table-earnings table-earnings__challenge tableFixHead">
                        <thead>
                            <tr>
                                <th class="th-sm">No
                                </th>
                                <th class="th-sm">Mata Kuliah Dasar
                                </th>
                                <th class="th-sm">Indeks Prestasi Sementara
                                </th>
                                <th class="th-sm">Mata Kuliah Pilihan
                                </th>
                                <th class="th-sm">Semester Awal Skripsi
                                </th>
                                <th class="th-sm">Waktu Penyelesaian
                                </th>
                                <th class="th-sm">Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; while ($result = mysqli_fetch_assoc($actuji)) { ?>
						<tr>
							<td><?= $i ?></td>
							<td><?= $result["mkd_uji"] ?></td>
							<td><?= $result["ips_uji"] ?></td>
							<td><?= $result["mkp_uji"] ?></td>
							<td><?= $result["sas_uji"] ?></td>
							<td><?= $result["wp_aktual"] ?></td>
							<td><a href="edit_datauji.php?&id=<?= $result['id_uji']; ?>" class="link" href="">Ubah</a> <a href="hapus_datauji.php?&id=<?= $result['id_uji']; ?>" class="link" href="">Hapus</a></td>
						</tr>
						<?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-11" style="text-align: right;">
                        <button onclick="window.location.href='uji.php'" type="button" class="btn btn-outline-dark">Klasifikasi Data Uji</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
            <br><br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Jumlah Data Uji</p>
                    <h1 class="card-title text-dark"><?= $dataUji; ?></h1>
                </div>
            </div>
            <br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Probabilitas Akhir 1S</p>
                    <h1 class="card-title text-dark"><?= $probawal1s; ?></h1>
                </div>
            </div>
            <br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Probabilitas Akhir 2S</p>
                    <h1 class="card-title text-dark"><?= $probawal2s; ?></h1>
                </div>
            </div>
            <br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Probabilitas Akhir 3S</p>
                    <h1 class="card-title text-dark"><?= $probawal3s; ?></h1>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>