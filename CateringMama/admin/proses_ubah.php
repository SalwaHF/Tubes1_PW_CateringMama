<?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data Kd_Menu yang dikirim oleh form_ubah.php melalui URL
  $Kd_Menu = $_GET['Kd_Menu'];
  // Ambil Data yang Dikirim dari Form
  $Nama_Menu = $_POST['Nama_Menu'];
  $Kategori_Menu = $_POST['Kategori_Menu'];
  $Harga = $_POST['Harga'];
  // Cek apakah user ingin mengubah fotonya atau tidak
  if(isset($_POST['ubah_foto'])) { // Jika user menceklis checkbox yang ada di form ubah, lakukan :
    // Ambil data foto yang dipilih dari form
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$foto;  
    // Set path folder tempat menyimpan fotonya
    $path = "images/".$fotobaru;
    // Proses upload
    if(move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
      // Query untuk menampilkan data Catering_Mama berdasarkan Kd_Menu yang dikirim
      $query = "SELECT * FROM Catering_Mama WHERE Kd_Menu='".$Kd_Menu."'";
      $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
      $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
      // Cek apakah file foto sebelumnya ada di folder images
      if(is_file("images/".$data['foto'])) // Jika foto ada
      unlink("images/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images    
      // Proses ubah data ke Database
      $query = "UPDATE Catering_Mama SET Nama_Menu='".$Nama_Menu."', Kategori_Menu='".$Kategori_Menu."', Harga='".$Harga."', foto='".$fotobaru."' WHERE Kd_Menu='".$Kd_Menu."'";
      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
      if($sql) { // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: menu.php"); // Redirect ke halaman CRUDMenu.php
      } else {
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
      }
    } else {
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
  } else { // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
    // Proses ubah data ke Database
    $query = "UPDATE Catering_Mama SET Nama_Menu='".$Nama_Menu."', Kategori_Menu='".$Kategori_Menu."', Harga='".$Harga."' WHERE Kd_Menu='".$Kd_Menu."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql) { // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: CRUDMenu.php"); // Redirect ke halaman CRUDMenu.php
    } else {
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
  }
?>