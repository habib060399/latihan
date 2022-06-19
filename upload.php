<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFIleType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($imageFIleType != "jpg" && $imageFIleType != "png" && $imageFIleType != "jpeg") {
        echo "Sorry, only JPG, PNG, JPEG files are allowed";
        $uploadOk = 0;
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<script>File {$target_file}berhasil di upload</script>";
        } else {
            echo "Sorry, there was an error uploading your file";
        }
    }
}
