<?php
	require_once("koneksi.php");
	$Dbobj = new DBConnection();
	$query = "DELETE FROM data_latih WHERE id_latih = ".$_GET['id'];
	$act = mysqli_query($Dbobj->getdbconnect(), $query);
	header("location: ".$Dbobj->baseurl."data_latih.php");
?>