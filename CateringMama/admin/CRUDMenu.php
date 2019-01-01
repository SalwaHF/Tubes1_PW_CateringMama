<html>
  <head>
    <title>CRUD MENU</title>
  </head>

  <body>
    <h1>Daftar Menu</h1>
    <a href="form_simpan.php">Tambah Data</a><br><br>
    <table border="1" width="100%">
      <tr>
        <th>Kd_Menu</th>
        <th>Nama_Menu</th>
        <th>Kategori_Menu</th>
        <th>Harga</th>
        <th>Foto</th>
        <th colspan="2">Aksi</th>
      </tr>
      
      <?php
        // Load file koneksi.php
        include "koneksi.php"; 
        $query = "SELECT * FROM Catering_Mama"; // Query untuk menampilkan semua data Catering_Mama
        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
          echo "<tr>";
          echo "<td>".$data['Kd_Menu']."</td>";
          echo "<td>".$data['Nama_Menu']."</td>";
          echo "<td>".$data['Kategori_Menu']."</td>";
          echo "<td>".$data['Harga']."</td>";
          echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
          echo "<td><a href='form_ubah.php?Kd_Menu=".$data['Kd_Menu']."'>Ubah</a></td>";
          echo "<td><a href='proses_hapus.php?Kd_Menu=".$data['Kd_Menu']."'>Hapus</a></td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>