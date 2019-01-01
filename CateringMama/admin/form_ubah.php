<html>
  <head>
    <title>CRUD MENU</title>
  </head>

  <body>
    <h1>Ubah Menu</h1>
    <?php
      // Load file koneksi.php
      include "koneksi.php";
      // Ambil data Kd_Menu yang dikirim oleh CRUDMenu.php melalui URL
      $Kd_Menu = $_GET['Kd_Menu'];
      // Query untuk menampilkan data Catering_Mama berdasarkan Kd_Menu yang dikirim
      $query = "SELECT * FROM Catering_Mama WHERE Kd_Menu='".$Kd_Menu."'";
      $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
      $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    ?>

    <form method="post" action="proses_ubah.php?Kd_Menu=<?php echo $Kd_Menu; ?>" enctype="multipart/form-data">
      <table cellpadding="8">
        <tr>
          <td>Nama_Menu</td>
          <td><input type="text" name="Nama_Menu" value="<?php echo $data['Nama_Menu']; ?>"></td>
        </tr>
        <tr>
          <td>Kategori_Menu</td>
          <td><input type="text" name="Kategori_Menu" value="<?php echo $data['Kategori_Menu']; ?>"></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input type="text" name="Harga" value="<?php echo $data['Harga']; ?>"></td>
        </tr>
        <tr>
          <td>Foto</td>
          <td>
            <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
            <input type="file" name="foto">
          </td>
        </tr>
      </table>  
      <hr>
      <input type="submit" value="Ubah">
      <a href="menu.php"><input type="button" value="Batal"></a>
    </form>
  </body>
</html>