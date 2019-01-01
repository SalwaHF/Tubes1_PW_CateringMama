<?php
	// Load file koneksi.php
	include "koneksi.php";
	// Ambil data Kd_Menu yang dikirim oleh CRUDMenu.php melalui URL
	$Kd_Menu = $_GET['Kd_Menu'];
	// Query untuk menampilkan data Catering_Mama berdasarkan Kd_Menu yang dikirim
	$query = "SELECT * FROM Catering_Mama WHERE Kd_Menu='".$Kd_Menu."'";
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	// Cek apakah file fotonya ada di folder images
	if(is_file("images/".$data['foto'])) // Jika foto ada
  	unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images
	// Query untuk menghapus data Catering_Mama berdasarkan Kd_Menu yang dikirim
	$query2 = "DELETE FROM Catering_Mama WHERE Kd_Menu='".$Kd_Menu."'";
	$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query
	if($sql2) { // Cek jika proses simpan ke database sukses atau tidak
  		// Jika Sukses, Lakukan :
  		header("location: menu.php"); // Redirect ke halaman CRUDMenu.php
	} else {
  		// Jika Gagal, Lakukan :
  		echo "Data gagal dihapus. <a href='CRUDMenu.php'>Kembali</a>";
	}
?>