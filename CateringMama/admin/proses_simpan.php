<?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil Data yang Dikirim dari Form
  $Kd_Menu = $_POST['Kd_Menu'];
  $Nama_Menu = $_POST['Nama_Menu'];
  $Kategori_Menu = $_POST['Kategori_Menu'];
  $Harga = $_POST['Harga'];
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$foto;
  // Set path folder tempat menyimpan fotonya
  $path = "images/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
    // Proses simpan ke Database
    $query = "INSERT INTO Catering_Mama VALUES('".$Kd_Menu."', '".$Nama_Menu."', '".$Kategori_Menu."', '".$Harga."', '".$fotobaru."')";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql) { // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: menu.php"); // Redirect ke halaman CRUDMenu.php
    } else {
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
    }
  } else {
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
?>