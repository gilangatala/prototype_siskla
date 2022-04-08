<?php
	require_once("koneksi.php");
	$Dbobj = new DBConnection();
	if(isset($_POST["submit"])){
		$query = "INSERT INTO data_uji (mkd_uji, ips_uji, mkp_uji, sas_uji, wp_aktual) 
		VALUES ('".$_POST['mkd']."','".$_POST['ips']."','".$_POST['mkp']."','".$_POST['sas']."','".$_POST['wp_aktual']."')";
		$act = mysqli_query($Dbobj->getdbconnect(), $query);
		header("location: ".$Dbobj->baseurl."data_uji.php");
	}
?>