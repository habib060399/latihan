<?php require_once("template/header.php");

?>


<div class="container mt-30px">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "SELECT * FROM tbl_mahasiswa";
                $result = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['nim'] ?></td>
                        <td><?php echo $data['keterangan'] ?></td>
                        <td>
                            <a href="calculate.php" type="submit" class="btn btn-primary btn-sm" name="detail">Detail</a>
                            <button class="btn btn-primary btn-sm">Hapus</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once("template/footer.php"); ?>