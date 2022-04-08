<!DOCTYPE html>
<?php
require_once("hitung_wnb.php");
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
        <div class="col-8">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-6">
                        <h5 style="text-align: left;">Hasil Klasifikasi Data Latih</h5>
                    </div>
                </div>
                <div></div>
                <div class="row">
                    <table class="table table-earnings table-earnings__challenge tableFixHead" style="height: 530px;">
                        <thead>
                            <tr>
                                <th class="th-sm">No
                                </th>
                                <th class="th-sm">Probabilitas 1S
                                </th>
                                <th class="th-sm">Probabilitas 2S
                                </th>
                                <th class="th-sm">Probabilitas 3S
                                </th>
                                <th class="th-sm">Prediksi Waktu Penyelesaian
                                </th>
                                <th class="th-sm">Aktual Waktu Penyelesaian
                                </th>
                                <th class="th-sm">Akurasi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
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
                            while ($dataL = mysqli_fetch_assoc($actlatih)) {
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkd_latih"] == $a[$i]) {
                                        $mkd1s = $a_mkd1s[$i];
                                        $probmkd1s = pow($mkd1s, 0.145833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["ips_latih"] == $a[$i]) {
                                        $ips1s = $a_ips1s[$i];
                                        $probips1s = pow($ips1s, 0.520833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkp_latih"] == $a[$i]) {
                                        $mkp1s = $a_mkp1s[$i];
                                        $probmkp1s = pow($mkp1s, 0.0625);
                                    }
                                }
                                for ($i = 0; $i < 3; $i++) {
                                    if ($dataL["sas_latih"] == $b[$i]) {
                                        $sas1s = $a_sas1s[$i];
                                        $probsas1s = pow($sas1s, 0.270833);
                                    }
                                }
                                $prob_1s = $probawal1 * $probmkd1s * $probips1s * $probmkp1s * $probsas1s;
                                array_push($hasil_prob1s, $prob_1s);
                                // if($dataL["id_latih"]==133){

                                //     echo $dataL["mkd_latih"], $dataL["ips_latih"], $dataL["mkp_latih"], $dataL["sas_latih"];
                                //     echo round($probmkd1s,5), round($probips1s,5), round($probmkp1s,5), round($probsas1s,5), round($prob_1s,5);
                                // }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkd_latih"] == $a[$i]) {
                                        $mkd2s = $a_mkd2s[$i];
                                        $probmkd2s = pow($mkd2s, 0.145833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["ips_latih"] == $a[$i]) {
                                        $ips2s = $a_ips2s[$i];
                                        $probips2s = pow($ips2s, 0.520833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkp_latih"] == $a[$i]) {
                                        $mkp2s = $a_mkp2s[$i];
                                        $probmkp2s = pow($mkp2s, 0.0625);
                                    }
                                }
                                for ($i = 0; $i < 3; $i++) {
                                    if ($dataL["sas_latih"] == $b[$i]) {
                                        $sas2s = $a_sas2s[$i];
                                        $probsas2s = pow($sas2s, 0.270833);
                                    }
                                }
                                $prob_2s = $probawal2 * $probmkd2s * $probips2s * $probmkp2s * $probsas2s;
                                array_push($hasil_prob2s, $prob_2s);
                                // if($dataL["id_latih"]==133){

                                //     echo $dataL["mkd_latih"], $dataL["ips_latih"], $dataL["mkp_latih"], $dataL["sas_latih"];
                                //     echo round($probmkd2s,5), round($probips2s,5), round($probmkp2s,5), round($probsas2s,5), round($prob_2s,5);
                                // }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkd_latih"] == $a[$i]) {
                                        $mkd3s = $a_mkd3s[$i];
                                        $probmkd3s = pow($mkd3s, 0.145833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["ips_latih"] == $a[$i]) {
                                        $ips3s = $a_ips3s[$i];
                                        $probips3s = pow($ips3s, 0.520833);
                                    }
                                }
                                for ($i = 0; $i < 4; $i++) {
                                    if ($dataL["mkp_latih"] == $a[$i]) {
                                        $mkp3s = $a_mkp3s[$i];
                                        $probmkp3s = pow($mkp3s, 0.0625);
                                    }
                                }
                                for ($i = 0; $i < 3; $i++) {
                                    if ($dataL["sas_latih"] == $b[$i]) {
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
                                if ($dataL["wp_aktual"] == $prediksi) {
                                    $akurasi = "BENAR";
                                    array_push($hasil_akurasi, $akurasi);
                                } else {
                                    $akurasi = "SALAH";
                                    array_push($hasil_akurasi, $akurasi);
                                }
                                if ($akurasi == "BENAR") {
                                    array_push($benar, $z);
                                }
                                if ($akurasi == "SALAH") {
                                    array_push($salah, $z);
                                }
                            ?>
                                <tr>
                                    <td><?= $z ?></td>
                                    <td><?= $prob_1s ?></td>
                                    <td><?= $prob_2s ?></td>
                                    <td><?= $prob_3s ?></td>
                                    <td><?= $prediksi ?></td>
                                    <td><?= $dataL["wp_aktual"] ?></td>
                                    <td><?= $akurasi ?></td>
                                </tr>
                            <?php
                                $query_update = "UPDATE data_latih SET wp_prediksi='".$prediksi."' WHERE id_latih=".$dataL["id_latih"]."";
                                $qd = mysqli_query($Dbobj->getdbconnect(), $query_update);
                                $z++;
                            }
                            // $jumlah_prediksi = count($hasil_prediksi);
                            // for ($i=0; $i < $jumlah_prediksi; $i++) { 
                            //     $query_insert = "INSERT INTO klasifikasi_latih(prob1s, prob2s, prob3s, id_latih, wp_prediksi, akurasi) VALUES (".$hasil_prob1s[$i].",".$hasil_prob2s[$i].",".$hasil_prob3s[$i].",".$i.",".$hasil_prediksi[$i].", ".$hasil_akurasi[$i].")";
                            //     $qi = mysqli_query($Dbobj->getdbconnect(), $query_insert);
                            // }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-2">
            <br><br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Jumlah Data Latih</p>
                    <h1 class="card-title text-dark"><?= $dataLatih; ?></h1>
                </div>
            </div>
            <br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Probabilitas Akhir 1S</p>
                    <h1 class="card-title text-dark"><?= round(array_count_values($hasil_prediksi)["1S"] / count($hasil_prediksi), 5); ?></h1>
                </div>
            </div>
            <br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Probabilitas Akhir 2S</p>
                    <h1 class="card-title text-dark"><?= round(array_count_values($hasil_prediksi)["2S"] / count($hasil_prediksi), 5); ?></h1>
                </div>
            </div>
            <br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Probabilitas Akhir 3S</p>
                    <h1 class="card-title text-dark"><?= round(array_count_values($hasil_prediksi)["3S"] / count($hasil_prediksi), 5); ?></h1>
                </div>
            </div>
            <br>
            <!-- <div class="card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2">Prediksi Salah</p>
                    <h1 class="card-title"><?= count($salah); ?></h1>
                </div>
            </div>
            <br> -->
            <!-- <div class="card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2">Akurasi</p>
                    <h1 class="card-title"><?= round(count($benar) / (count($benar) + count($salah)), 5); ?></h1>
                </div>
            </div> -->
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