<?php
	$connect=mysqli_connect("localhost","root","","catering_mama");
	if (!$connect) {
		die("DATABASE TIDAK DITEMUKAN".mysqli_connect_error());
	}
?>