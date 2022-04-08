<?php
	require_once("koneksi.php");
	session_start();
	$Dbobj = new DBConnection();
	$query = "SELECT * FROM users WHERE USERNAME='".$_POST['username']."' AND PASSWORD ='".$_POST['password']."'";
	$act = mysqli_query($Dbobj->getdbconnect(), $query);
	if(mysqli_num_rows($act) > 0){
		$data = mysqli_fetch_row($act);
		$_SESSION["login"] = true;
		$_SESSION["user"] = $data[1];
		header("location: ".$Dbobj->baseurl."data_latih.php");
	} else {
		header("location: ".$Dbobj->baseurl."index.php?info=error");
	}
?>