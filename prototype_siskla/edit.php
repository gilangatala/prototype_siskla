<?php
	require_once("koneksi.php");
	$Dbobj = new DBConnection();
	if(isset($_POST["edit_latih"])){
		$query = "UPDATE data_latih SET mkd_latih='".$_POST['mkd']."', ips_latih='".$_POST['ips']."', mkp_latih='".$_POST['mkp']."', sas_latih='".$_POST['sas']."', wp_aktual='".$_POST['wp_aktual']."' WHERE id_latih=".$_POST['id_latih']."";
		$act = mysqli_query($Dbobj->getdbconnect(), $query);
		header("location: ".$Dbobj->baseurl."data_latih.php");
	}
?>