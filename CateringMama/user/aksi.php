<?php
  include 'koneksi.php';
  if (isset($_POST['Go'])) {
    $first_name= $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $telpon = $_POST['telpon'];
    $tanggal = $_POST['tanggal'];
    $message = $_POST['message'];
    // $tanggal = date('Y-m-d H:i:s');
    // $targetDir = "../img/";
    // $fileName = basename($_FILES["image"]["name"]);
    // $targetFilePath = $targetDir . $fileName;
    // $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // $allowTypes = array('jpg','png','jpeg','gif');
    // in_array($fileType,$allowTypes);
    // move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
    $sql = "INSERT INTO user (first_name,last_name,tanggal,telpon,message) values ('$first_name','$last_name',CURRENT_TIMESTAMP,'$telpon',$message)";
    $hasil = mysqli_query($connect, $sql);
    if ($hasil) {
      echo '<script language="javascript">alert("Terima kasih sudah memesan"); document.location="index.html";</script>';
    } else {
      echo "error".$sql;
    }
  }
?>