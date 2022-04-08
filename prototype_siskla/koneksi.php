<?php
	class DBConnection{
		public $baseurl = "http://127.0.0.1/prototype_siskla/";
		function getdbconnect(){
			$conn = mysqli_connect("localhost","root","","sistem_klasifikasi") or die("Couldn't connect");
			return $conn;
		}
	}
?>