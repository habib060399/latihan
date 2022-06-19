<?php require_once("template/header.php"); ?>


<br>
<section class="section-1">
  <div class="container">
    <div class="row row-cols-2">
      <div>
        <form action="form.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nim</label>
            <input type="text" name="nim" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" name="file" type="file" id="file">
          </div>
          <button type="submit" name="submit" class="btn btn-outline-primary">Simpan</button>
        </form>
      </div>
      <!-- <div class="" style="padding-left: 70px; padding-right: 10px;">
        <fieldset disabled>
          <h2>Your Input</h2>
          <form action="">
            <div class="mb-3">
              <input type="email" value="<?php echo $email; ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
              <input type="text" value="<?php echo $textarea; ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <img src="<?php echo $target_file ?>" alt="" style="max-width: 300px;">

          </form>
        </fieldset>
      </div> -->

    </div>
  </div>
</section>
<?php require_once("template/footer.php"); ?>