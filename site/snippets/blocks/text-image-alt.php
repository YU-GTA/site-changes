<section>
  <div class="txtimgaltgrid">
    <div class="txtimgalt1">
      <h2 class="txtimgaltheader"><?= $data->heading()->html() ?></h2>
      <div class="txtimgalttext"><?= $data->text()->html() ?></div>
      <?php if ($data->buttontext()->isNotEmpty()) : ?>
        <a href="<?= $data->button()->toLinkObject()?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
      <?php endif ?>
    </div>
    
    <div class="txtimgalt2">
      <?php $image = $data->image()->toFile() ?>
      <img class="textimgalt" alt="<?= $data->alttext()->html() ?>" src="<?= $image->url() ?>">
    </div>
  </div>
</section>