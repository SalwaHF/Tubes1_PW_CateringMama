<html>
  <head>
    <title>CRUD MENU</title>
  </head>
  
  <body>
    <h1>Tambah Menu</h1>
    <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
      <table cellpadding="8">
        <tr>
          <td>Kd_Menu</td>
          <td><input type="text" name="Kd_Menu"></td>
        </tr>
        <tr>
          <td>Nama_Menu</td>
          <td><input type="text" name="Nama_Menu"></td>
        </tr>
        <tr>
          <td>Kategori_Menu</td>
          <td><input type="text" name="Kategori_Menu"></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input type="text" name="Harga"></td>
        </tr>
        <tr>
          <td>Foto</td>
          <td><input type="file" name="foto"></td>
        </tr>
      </table>
      <hr>
      <input type="submit" value="Simpan">
      <a href="menu.php"><input type="button" value="Batal"></a>
    </form>
  </body>
</html>