<?php
	require_once("koneksi.php");
	$Dbobj = new DBConnection();
	if(isset($_POST["submit"])){
		$query = "INSERT INTO pengujian (mkd, ips, mkp, sas) 
		VALUES ('".$_POST['mkd']."','".$_POST['ips']."','".$_POST['mkp']."','".$_POST['sas']."')";
		$act = mysqli_query($Dbobj->getdbconnect(), $query);
		header("location: ".$Dbobj->baseurl."pengujian.php");
	}
	if(isset($_POST["refresh"])){
		header("location: ".$Dbobj->baseurl."pengujian.php");
	}
?>