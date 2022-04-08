<?php
	require_once("koneksi.php");
	$Dbobj = new DBConnection();
	if(isset($_POST["edit_uji"])){
		$query = "UPDATE data_uji SET mkd_uji='".$_POST['mkd']."', ips_uji='".$_POST['ips']."', mkp_uji='".$_POST['mkp']."', sas_uji='".$_POST['sas']."', wp_aktual='".$_POST['wp_aktual']."' WHERE id_uji=".$_POST['id_uji']."";
		$act = mysqli_query($Dbobj->getdbconnect(), $query);
		header("location: ".$Dbobj->baseurl."data_uji.php");
	}
?>