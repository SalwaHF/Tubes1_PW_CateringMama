<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      td{
        text-align: center;
      }
      th{
        text-align: center;
      }
    </style>

    <title>CATERING MAMA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">CATERING<small>MAMA</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto"></ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="login.php" class="nav-link">Logout</a></li>
          </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
    	<div class="slider-item" style="background-image: url(images/mieayam.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
          	<div class="col-md-8 col-sm-12 text-center ftco-animate">
          		<h1 class="mb-4">CATERING MAMA</h1>
            </div>
				  </div>
        </div>
      </div>
      <div class="slider-item" style="background-image: url(images/NasiTumpeng.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
					  <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4">CATERING MAMA</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item" style="background-image: url(images/bakso.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4">CATERING MAMA</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item" style="background-image: url(images/NasiBox.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4">CATERING MAMA</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item" style="background-image: url(images/snackbox.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <h1 class="mb-4">CATERING MAMA</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br>
    <h1 align="center">Daftar Menu</h1>
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

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text">
            <h1>Daftar Pemesan</h1>
            <table border="1" width="100%">
              <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Tanggal</th>
                <th>Telpon</th>
                <th>Message</th>
                <th>Aksi</th>
              </tr>
              <?php
                // Load file koneksi.php
                include "koneksi.php";
                $query = "SELECT * FROM user"; // Query untuk menampilkan semua data Catering_Mama
                $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                while($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                  echo "<tr>";
                  echo "<td>".$data['id']."</td>";
                  echo "<td>".$data['first_name']."</td>";
                  echo "<td>".$data['last_name']."</td>";
                  echo "<td>".$data['tanggal']."</td>";
                  echo "<td>".$data['telpon']."</td>";
                  echo "<td>".$data['message']."</td>";
                  echo "<td><a href='proseshapus_daftarpesan.php?id=".$data['id']."'>Hapus</a></td>";
                  echo "</tr>";
                }
              ?>
            </table>            		
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br><br><br>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

  	<!-- loader -->
  	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  	<script src="js/jquery.min.js"></script>
  	<script src="js/jquery-migrate-3.0.1.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/jquery.easing.1.3.js"></script>
	  <script src="js/jquery.waypoints.min.js"></script>
	  <script src="js/jquery.stellar.min.js"></script>
	  <script src="js/owl.carousel.min.js"></script>
	  <script src="js/jquery.magnific-popup.min.js"></script>
	  <script src="js/aos.js"></script>
	  <script src="js/jquery.animateNumber.min.js"></script>
	  <script src="js/bootstrap-datepicker.js"></script>
	  <script src="js/jquery.timepicker.min.js"></script>
	  <script src="js/scrollax.min.js"></script>
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	  <script src="js/google-map.js"></script>
	  <script src="js/main.js"></script>    
  </body>
</html>