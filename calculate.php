<?php require_once("template/header.php"); ?>

<?php
$hasil = "";
$number1 = $number2 = $operasi = "";

if (isset($_POST['submit'])) {
    $number1 = $_POST['a'];
    $number2 = $_POST['b'];
    $operasi = $_POST['operasi'];

    switch ($operasi) {
        case "kali":
            $hasil = $number1 * $number2;
            break;
        case "bagi":
            $hasil = $number1 / $number2;
            break;
        case "tambah":
            $hasil = $number1 + $number2;
            break;
        case "kurang":
            $hasil = $number1 - $number2;
            break;
    }
}
?>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="input-group input-group-sm mb-3">
            <input type="number" class="form-control" aria-label="Sizing example input" name="a" autocomplete="off">
        </div>

        <select class="form-select form-select-sm" name="operasi">
            <option selected>Open this select menu</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
            <option value="tambah">+</option>
            <option value="kurang">-</option>
        </select>

        <div class="input-group input-group-sm mb-3">
            <input type="number" class="form-control" aria-label="Sizing example input" name="b" autocomplete="off">
        </div>
        <button type="submit" name="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
    <fieldset disabled>
        <div class="mb-3">
            <input type="text" value="<?php echo $hasil; ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
    </fieldset>
</div>
<div id="simpleCalender" class="simpleCalender"></div>