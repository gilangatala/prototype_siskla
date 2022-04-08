<?php
require_once("koneksi.php");
$Dbobj = new DBConnection();
$j11 = array();
$j12 = array();
$j13 = array();
$j21 = array();
$j22 = array();
$j23 = array();
$j31 = array();
$j32 = array();
$j33 = array();
$uji = "SELECT id_uji, wp_aktual, wp_prediksi FROM data_uji ORDER BY id_uji ASC";
$cuji = mysqli_query($Dbobj->getdbconnect(), $uji);
$w = 1;
while ($dataP = mysqli_fetch_assoc($cuji)) {
    if ($dataP["wp_aktual"] == "1S" & $dataP["wp_prediksi"] == "1S") {
        array_push($j11, "11.");
    } else if ($dataP["wp_aktual"] == "2S" & $dataP["wp_prediksi"] == "2S") {
        array_push($j22, "22.");
    } else if ($dataP["wp_aktual"] == "3S" & $dataP["wp_prediksi"] == "3S") {
        array_push($j33, "33.");
    } else if ($dataP["wp_aktual"] == "1S" & $dataP["wp_prediksi"] == "2S") {
        array_push($j12, "12.");
    } else if ($dataP["wp_aktual"] == "1S" & $dataP["wp_prediksi"] == "3S") {
        array_push($j13, "13.");
    } else if ($dataP["wp_aktual"] == "2S" & $dataP["wp_prediksi"] == "1S") {
        array_push($j21, "21.");
    } else if ($dataP["wp_aktual"] == "2S" & $dataP["wp_prediksi"] == "3S") {
        array_push($j23, "23.");
    } else if ($dataP["wp_aktual"] == "3S" & $dataP["wp_prediksi"] == "1S") {
        array_push($j31, "31.");
    } else if ($dataP["wp_aktual"] == "3S" & $dataP["wp_prediksi"] == "2S") {
        array_push($j32, "32.");
    }
    $w++;
}
$tp1 = count($j11);
$tp2 = count($j22);
$tp3 = count($j33);
$tn1 = count($j22) + count($j23) + count($j32) + count($j33);
$tn2 = count($j11) + count($j13) + count($j31) + count($j33);
$tn3 = count($j11) + count($j12) + count($j21) + count($j22);
$fp1 = count($j21) + count($j31);
$fp2 = count($j12) + count($j32);
$fp3 = count($j13) + count($j23);
$fn1 = count($j12) + count($j13);
$fn2 = count($j21) + count($j23);
$fn3 = count($j31) + count($j32);

$ak = (count($j11)+count($j22)+count($j33))/(count($j11)+count($j12)+count($j13)+count($j21)+count($j22)+count($j23)+count($j31)+count($j32)+count($j33));
$pr1 = $tp1/($tp1+$fp1);
$pr2 = $tp2/($tp2+$fp2);
$pr3 = $tp3/($tp3+$fp3);
$re1 = $tp1/($tp1+$fn1);
$re2 = $tp2/($tp2+$fn2);
$re3 = $tp3/($tp3+$fn3);
$sp1 = $tn1/($tn1+$fp1);
$sp2 = $tn2/($tn2+$fp2);
$sp3 = $tn3/($tn3+$fp3);
?>
