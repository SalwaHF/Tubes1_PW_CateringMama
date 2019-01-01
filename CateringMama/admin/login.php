<?php
	require_once("koneksi.php");
	if (isset($_SESSION)){
		session_start();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			/* Bordered form */
			form {
				border: 3px solid #f1f1f1;
			}
			/* Full-width inputs */
			input[type=text], input[type=password] {
  				width: 100%;
  				padding: 12px 20px;
  				margin: 8px 0;
  				display: inline-block;
  				border: 1px solid #ccc;
  				box-sizing: border-box;
			}
			/* Set a style for all buttons */
			button {
  				background-color: #4CAF50;
  				color: white;
  				padding: 14px 20px;
  				margin: 8px 0;
  				border: none;
  				cursor: pointer;
  				width: 100%;
			}
			/* Add a hover effect for buttons */
			button:hover {
  				opacity: 0.8;
			}
			/* Extra style for the cancel button (red) */
			.cancelbtn {
 				width: auto;
  				padding: 10px 18px;
  				background-color: #f44336;
			}
			/* Center the avatar image inside this container */
			.imgcontainer {
  				text-align: center;
  				margin: 24px 0 12px 0;
			}
			/* Avatar image */
			img.avatar {
  				width: 40%;
  				border-radius: 50%;
			}
			/* Add padding to containers */
			.container {
  				padding: 16px;
			}
			/* The "Forgot password" text */
			span.psw {
  				float: right;
  				padding-top: 16px;
			}
			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
  				span.psw {
    				display: block;
    				float: none;
  				}
  				.cancelbtn {
    				width: 100%;
  				}
			}
		</style>
    <title>Login</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="bg-dark">
		<form action="proseslogin.php" method="POST">
  		<div align="center" class="imgcontainer">
    		<h2><b>CATERING MAMA</b></h2>
  		</div>
  		<div class="container">
    		<label for="username"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="username" required>
    		<label for="username"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" required>
        <label for="captcha">Captcha</label>
        <br><br>
    		<img src="captcha.php" width="70" height="30" alt="Captcha" />
        <input name="kodeval" type="text" id="kodeval" size="6" maxlength="6" />
    		<button type="submit">Login</button>
  		</div>
		</form>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>