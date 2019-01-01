<?php
	// Load file koneksi.php
	include "koneksi.php";
	// Ambil data Kd_Menu yang dikirim oleh CRUDMenu.php melalui URL
	$id = $_GET['id'];
	// Query untuk menghapus data Catering_Mama berdasarkan id yang dikirim
	$query2 = "DELETE FROM user WHERE id='".$id."'";
	$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
	if($sql2) { // Cek jika proses simpan ke database sukses atau tidak
  		// Jika Sukses, Lakukan :
  		header("location: menu.php"); // Redirect ke halaman CRUDMenu.php
	} else {
  		// Jika Gagal, Lakukan :
  		echo "Data gagal dihapus. <a href='CRUDMenu.php'>Kembali</a>";
	}
?>