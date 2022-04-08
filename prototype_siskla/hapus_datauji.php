<?php
	require_once("koneksi.php");
	$Dbobj = new DBConnection();
	$query = "DELETE FROM data_uji WHERE id_uji = ".$_GET['id'];
	$act = mysqli_query($Dbobj->getdbconnect(), $query);
	header("location: ".$Dbobj->baseurl."data_uji.php");
?>