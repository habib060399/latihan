<?php require_once("template/header.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("ERROR tidak ada id yang dipilih");
}

$uploads = glob("uploads/*.*");

$sql = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE id=$id");
$result = mysqli_fetch_array($sql);
?>

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">

            <?php echo "<img src='uploads/$result[foto]'  style='max-width: 100px;'/>" ?>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $result['nama'] ?></h5>
                <p class="card-text">Nim: <?php echo $result['nim'] ?></p>
                <p class="card-text">Email: <?php echo $result['email'] ?></p>
                <p class="card-text">Keterangan: <?php echo $result['keterangan'] ?></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>