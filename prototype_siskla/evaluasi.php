<!DOCTYPE html>
<?php
require_once("hitung_wnb2.php");
require_once("performa.php");
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
    <!-- <script src="chart.js"></script> -->
    <script>
        function cart (a1,a2,a3,a4,a5,a6,a7,a8,a9) {
            var chart = new CanvasJS.Chart("chartContainer", {
                backgroundColor: "#2C3E50",
                exportEnabled: true,
                animationEnabled: true,
                title: {
                    text: "Evaluasi Performa Confusion Matrix",
                    fontColor: "#fff"
                },
                subtitles: [{
                    text: "Hasil Pengujian Klasifikasi Weighted Naive Bayes",
                    fontColor: "#fff"
                }],
                axisX: {
                    title: "Confusion Matrix",
                    titleFontColor: "#fff",
                    lineColor: "#fff",
                    labelFontColor: "#fff",
                    tickColor: "#fff",
                },
                axisY: {
                    title: "Performa",
                    titleFontColor: "#fff",
                    lineColor: "#fff",
                    labelFontColor: "#fff",
                    tickColor: "#fff",
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                data: [{
                        type: "column",
                        name: "1 Semester",
                        showInLegend: true,
                        yValueFormatString: "#,##0.#####",
                        dataPoints: [{
                                label: "Precision",
                                y: a1
                            },
                            {
                                label: "Recall",
                                y: a2
                            },
                            {
                                label: "Specificity",
                                y: a3
                            }
                        ]
                    },
                    {
                        type: "column",
                        name: "2 Semester",
                        axisYType: "secondary",
                        showInLegend: true,
                        yValueFormatString: "#,##0.#####",
                        dataPoints: [{
                            label: "Precision",
                            y: a4
                        },
                        {
                            label: "Recall",
                            y: a5
                        },
                        {
                            label: "Specificity",
                            y: a6
                            }
                        ]
                    },
                    {
                        type: "column",
                        name: "3 Semester",
                        axisYType: "third",
                        showInLegend: true,
                        yValueFormatString: "#,##0.#####",
                        dataPoints: [{
                            label: "Precision",
                            y: a7
                        },
                        {
                            label: "Recall",
                            y: a8
                        },
                        {
                            label: "Specificity",
                            y: a9
                            }
                        ]
                    }
                ]
            });
            chart.render();

            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                e.chart.render();
            }

            }
                </script>
    <script src="canvasjs.min.js"></script>
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
                <div class="row">
                <div id="chartContainer" style="height: 600px; max-width: 920px; margin: 0px auto;"></div>
                <script src="canvasjs.min.js"></script>
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
                    <p class="card-subtitle mb-2 text-dark">Prediksi Benar</p>
                    <h1 class="card-title text-dark"><?= count($j11)+count($j22)+count($j33); ?></h1>
                </div>
            </div>
            <br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Prediksi Salah</p>
                    <h1 class="card-title text-dark"><?= count($j12)+count($j13)+count($j21)+count($j23)+count($j31)+count($j32); ?></h1>
                </div>
            </div>
            <br>
            <div class="bg-warning card" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-subtitle mb-2 text-dark">Akurasi</p>
                    <h1 class="card-title text-dark"><?= $ak; ?></h1>
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
<script>
    cart(<?= $pr1 ?>,<?= $re1 ?>,<?= $sp1 ?>,<?= $pr2 ?>,<?= $re2 ?>,<?= $sp2 ?>,<?= $pr3 ?>,<?= $re3 ?>,<?= $sp3 ?>)
</script>

</html>