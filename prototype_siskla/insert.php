<?php
	require_once("koneksi.php");
	$Dbobj = new DBConnection();
	if(isset($_POST["submit"])){
		$query = "INSERT INTO data_latih (mkd_latih, ips_latih, mkp_latih, sas_latih, wp_aktual) 
		VALUES ('".$_POST['mkd']."','".$_POST['ips']."','".$_POST['mkp']."','".$_POST['sas']."','".$_POST['wp_aktual']."')";
		$act = mysqli_query($Dbobj->getdbconnect(), $query);
		header("location: ".$Dbobj->baseurl."data_latih.php");
	}
?>