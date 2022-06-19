<?php require_once("template/header.php");


$saldo = 5000000;
$result = 0;

if (isset($_POST['submit'])) {
    $uang = $_POST['uang'];

    if ($uang) {
        $result = $saldo - $uang;
    }
}
?>

<div class="col-md-8">
    <div class="card-body">
        <select class="form-select" id="selectBox" onchange="changeFunc();">
            <option disabled selected>Silahkan Pilih Menu</option>
            <option value="lihat_saldo" name="lihat_saldo">Lihat Saldo</option>
            <option value="penarikan" name="penarikan">Penarikan</option>
        </select>
        <h5 id="sisa_saldo" value="<?php echo $saldo ?>" onchange="Saldo(this.value);">sisa saldo: Rp.<?php echo $result; ?></h5>
        <div style="visibility: hidden;" class="mb-3" id="informasi_saldo">
            <fieldset disabled="disabled">
                <label for="disabledTextInput" class="form-label">Informasi Saldo</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="0" value="Rp.<?php echo $saldo; ?>">
            </fieldset>
        </div>
        <div style="visibility: hidden;" class="mb-3" id="penarikan">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="disabledTextInput" class="form-label">Penarikan</label>
                <input type="number" class="form-control" placeholder="Disabled input" name="uang">
                <button type="submit" name="submit">ambil</button>
            </form>
        </div>
    </div>
</div>

<script>
    function changeFunc() {
        var selectBox = document.getElementById("selectBox");
        var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        // alert(selectedValue);
        if (selectedValue == 'lihat_saldo') {
            // console.log('mau ambil saldo berapa');
            document.getElementById('informasi_saldo').style.visibility = 'visible';
            document.getElementById('penarikan').style.visibility = 'hidden';
        } else {
            document.getElementById('penarikan').style.visibility = 'visible';
            document.getElementById('informasi_saldo').style.visibility = 'hidden';
        }
    }
</script>