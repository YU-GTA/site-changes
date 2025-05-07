<section>
  <div class="txtimggrid">
    <div class="txtimg1">
      <h2 class="txtimgheader"><?= $data->heading()->html() ?></h2>
      <div class="txtimgtext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
    
    <div class="txtimg2">
      <?php $image = $data->image()->toFile() ?>
      <img class="textimg" alt="<?= $data->alttext()->html() ?>" src="<?= $image->url() ?>">
    </div>

    <div class="txtimg3 redblob"></div>
    <div class="txtimg3 blueblob"></div>
    <div class="txtimg3 blackdots"></div>
  </div>
</section>