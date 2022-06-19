<?php
include("template/koneksi.php");

// $email = "";
// $nama = "";
// $nim = "";
// $textarea = "";
// $file = "";
// $get_name = "";

if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $textarea = $_POST['textarea'];


  $target_dir = "uploads/";
  $get_name = basename($_FILES["file"]["name"]);
  $target_file = $target_dir . $get_name;
  $uploadOk = 1;
  $imageFIleType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if ($imageFIleType != "jpg" && $imageFIleType != "png" && $imageFIleType != "jpeg") {
    $err = "Sorry, only JPG, PNG, JPEG files are allowed";
    $uploadOk = 0;
  } else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
      $sucs = "File $target_file. berhasil di upload";
    } else {
      $err = "File tidak berhasil diupload";
    }
  }


  $input = "INSERT INTO tbl_mahasiswa(email, nama, nim, keterangan, foto) VALUES('$email', '$nama', '$nim', '$textarea', '$get_name')";
  $input_query = mysqli_query($conn, $input);
  if ($input_query) {
    echo "<script>
  alert('Data berhasil ditambahkan');
  </script>";
  } else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
  }
}
