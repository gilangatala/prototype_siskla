<!DOCTYPE html>
<?php
require_once("hitung_wnb2.php");
require_once("koneksi.php");
$Dbobj = new DBConnection();
$query = "SELECT * FROM pengujian ORDER BY id DESC LIMIT 1";
$querypengujian = "SELECT * FROM pengujian";
$act = mysqli_query($Dbobj->getdbconnect(), $query);
$actpengujian = mysqli_query($Dbobj->getdbconnect(), $querypengujian);
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
                <div class="row">
                    <form method="POST" action="insert_penguji.php" class="container d-flex flex-column" style="text-align: left;">
                        <label>
                            <h5>Mata Kuliah Praktikum</h5>
                        </label>
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
                        <label>
                            <h5>Mata Kuliah Pilihan</h5>
                        </label>
                        <select name="mkp" id="mkp" class="form-control">
                            <option value="SANGAT BAIK">SANGAT BAIK</option>
                            <option value="BAIK">BAIK</option>
                            <option value="CUKUP">CUKUP</option>
                            <option value="KURANG">KURANG</option>
                            <option value="SANGAT KURANG">SANGAT KURANG</option>
                        </select>
                        <br />
                        <label>
                            <h5>Semester Awal Skripsi</h5>
                        </label>
                        <select name="sas" id="sas" class="form-control">
                            <option value="SANGAT BAIK">SANGAT BAIK</option>
                            <option value="BAIK">BAIK</option>
                            <option value="KURANG">KURANG</option>
                            <option value="SANGAT KURANG">SANGAT KURANG</option>
                        </select>
                        <br />
                        
                </div>
                <div class="row">
                    <div class="col-2">
                    <div class="d-grid gap-2 col-2">
                            <input type="submit" name="submit" value="Tambah Data" class="btn btn-info" />
                        </div>
                    </div>
                    <div class="col-10">
                    <div class="d-grid gap-2 col-2" style="text-align: left;">
                            <input type="submit" name="refresh" value="Klasifikasi Data" class="btn btn-info" />
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col-9">
                    <br>
                    <table class="table table-earnings table-earnings__challenge tableFixHead" style="height: 90px; width: 905px;">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            $z = 1;
                            $benar = array();
                            $salah = array();
                            $hasil_prediksi = array();
                            $hasil_prob1s = array();
                            $hasil_prob2s = array();
                            $hasil_prob3s = array();
                            $hasil_akurasi = array();
                            $a = array("SANGAT BAIK", "BAIK", "CUKUP", "KURANG", "SANGAT KURANG");
                            $b = array("SANGAT BAIK", "BAIK", "KURANG", "SANGAT KURANG");
                            $a_mkd1s = array($prob_mkd_latih_sb1s, $prob_mkd_latih_b1s, $prob_mkd_latih_c1s, $prob_mkd_latih_k1s, $prob_mkd_latih_sk1s);
                            $a_ips1s = array($prob_ips_latih_sb1s, $prob_ips_latih_b1s, $prob_ips_latih_c1s, $prob_ips_latih_k1s, $prob_ips_latih_sk1s);
                            $a_mkp1s = array($prob_mkp_latih_sb1s, $prob_mkp_latih_b1s, $prob_mkp_latih_c1s, $prob_mkp_latih_k1s, $prob_mkp_latih_sk1s);
                            $a_sas1s = array($prob_sas_latih_sb2s, $prob_sas_latih_b1s, $prob_sas_latih_k1s, $prob_sas_latih_sk1s);
                            $a_mkd2s = array($prob_mkd_latih_sb2s, $prob_mkd_latih_b2s, $prob_mkd_latih_c2s, $prob_mkd_latih_k2s, $prob_mkd_latih_sk2s);
                            $a_ips2s = array($prob_ips_latih_sb2s, $prob_ips_latih_b2s, $prob_ips_latih_c2s, $prob_ips_latih_k2s, $prob_ips_latih_sk2s);
                            $a_mkp2s = array($prob_mkp_latih_sb2s, $prob_mkp_latih_b2s, $prob_mkp_latih_c2s, $prob_mkp_latih_k2s, $prob_mkp_latih_sk2s);
                            $a_sas2s = array($prob_sas_latih_sb2s, $prob_sas_latih_b2s, $prob_sas_latih_k2s, $prob_sas_latih_sk2s);
                            $a_mkd3s = array($prob_mkd_latih_sb3s, $prob_mkd_latih_b3s, $prob_mkd_latih_c3s, $prob_mkd_latih_k3s, $prob_mkd_latih_sk3s);
                            $a_ips3s = array($prob_ips_latih_sb3s, $prob_ips_latih_b3s, $prob_ips_latih_c3s, $prob_ips_latih_k3s, $prob_ips_latih_sk3s);
                            $a_mkp3s = array($prob_mkp_latih_sb3s, $prob_mkp_latih_b3s, $prob_mkp_latih_c3s, $prob_mkp_latih_k3s, $prob_mkp_latih_sk3s);
                            $a_sas3s = array($prob_sas_latih_sb3s, $prob_sas_latih_b3s, $prob_sas_latih_k3s, $prob_sas_latih_sk3s);
                            while ($dataL = mysqli_fetch_assoc($actpengujian)) {
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkd"] == $a[$i]) {
                                        $mkd1s = $a_mkd1s[$i];
                                        $probmkd1s = pow($mkd1s, 0.145833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["ips"] == $a[$i]) {
                                        $ips1s = $a_ips1s[$i];
                                        $probips1s = pow($ips1s, 0.520833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkp"] == $a[$i]) {
                                        $mkp1s = $a_mkp1s[$i];
                                        $probmkp1s = pow($mkp1s, 0.0625);
                                    }
                                }
                                for ($i = 0; $i < 3; $i++) {
                                    if ($dataL["sas"] == $b[$i]) {
                                        $sas1s = $a_sas1s[$i];
                                        $probsas1s = pow($sas1s, 0.270833);
                                    }
                                }
                                $prob_1s = $probawal1 * $probmkd1s * $probips1s * $probmkp1s * $probsas1s;
                                array_push($hasil_prob1s, $prob_1s);
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkd"] == $a[$i]) {
                                        $mkd2s = $a_mkd2s[$i];
                                        $probmkd2s = pow($mkd2s, 0.145833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["ips"] == $a[$i]) {
                                        $ips2s = $a_ips2s[$i];
                                        $probips2s = pow($ips2s, 0.520833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkp"] == $a[$i]) {
                                        $mkp2s = $a_mkp2s[$i];
                                        $probmkp2s = pow($mkp2s, 0.0625);
                                    }
                                }
                                for ($i = 0; $i < 3; $i++) {
                                    if ($dataL["sas"] == $b[$i]) {
                                        $sas2s = $a_sas2s[$i];
                                        $probsas2s = pow($sas2s, 0.270833);
                                    }
                                }
                                $prob_2s = $probawal2 * $probmkd2s * $probips2s * $probmkp2s * $probsas2s;
                                array_push($hasil_prob2s, $prob_2s);
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkd"] == $a[$i]) {
                                        $mkd3s = $a_mkd3s[$i];
                                        $probmkd3s = pow($mkd3s, 0.145833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["ips"] == $a[$i]) {
                                        $ips3s = $a_ips3s[$i];
                                        $probips3s = pow($ips3s, 0.520833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkp"] == $a[$i]) {
                                        $mkp3s = $a_mkp3s[$i];
                                        $probmkp3s = pow($mkp3s, 0.0625);
                                    }
                                }
                                for ($i = 0; $i < 3; $i++) {
                                    if ($dataL["sas"] == $b[$i]) {
                                        $sas3s = $a_sas3s[$i];
                                        $probsas3s = pow($sas3s, 0.270833);
                                    }
                                }
                                $prob_3s = $probawal3 * $probmkd3s * $probips3s * $probmkp3s * $probsas3s;
                                array_push($hasil_prob3s, $prob_3s);
                                $max_prob = max($prob_1s, $prob_2s, $prob_3s);
                                if ($max_prob == $prob_1s) {
                                    $prediksi = "1S";
                                    array_push($hasil_prediksi, $prediksi);
                                } else if ($max_prob == $prob_2s) {
                                    $prediksi = "2S";
                                    array_push($hasil_prediksi, $prediksi);
                                } else if ($max_prob == $prob_3s) {
                                    $prediksi = "3S";
                                    array_push($hasil_prediksi, $prediksi);
                                }
                                $query_update = "UPDATE pengujian SET wp='" . $prediksi . "' WHERE id=" . $dataL["id"] . "";
                                $qd = mysqli_query($Dbobj->getdbconnect(), $query_update);
                                $z++;
                            }
                            while ($result = mysqli_fetch_assoc($act)) { ?>
                                <tr>
                                    <td><?= $result["id"] ?></td>
                                    <td><?= $result["mkd"] ?></td>
                                    <td><?= $result["ips"] ?></td>
                                    <td><?= $result["mkp"] ?></td>
                                    <td><?= $result["sas"] ?></td>
                                    <td><?= $result["wp"] ?></td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-3"></div>
            </div>

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