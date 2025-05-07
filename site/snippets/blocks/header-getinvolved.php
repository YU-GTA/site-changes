<section >
  <div class="headergigrid">
    <?php $backgroundimage = $data->backgroundimage()->toFile() ?>
    <div style="background-image: linear-gradient(rgba(191, 217, 37, .95), rgba(191, 217, 37, .95)), url(<?= $backgroundimage->url() ?>)" class="headergibackground"></div>
    <div class="headergi1">
      <h1 class="headergiheader"><?= $data->heading()->html() ?></h1>
    </div>
    <div class="headergi3">
      <div class="headergisubh"><?= $data->bottomsubhead()->html() ?></div>
      <div class="headergitext"><?= $data->bottomhtext()->html() ?></div>
    </div>
    <div class="headergi2">
      <?php $image = $data->image()->toFile() ?>
      <img class="headergiimg" alt="<?= $data->alttext()->html() ?>" src="<?= $image->url() ?>">
    </div>
    <div class="headergi4">
      <img class="headergilogo" alt="" src="./assets/images/svgs/bluequote.svg">
    </div>
  </div>
</section>