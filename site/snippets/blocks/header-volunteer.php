<section >
  <div class="headervgrid">
    <?php $backgroundimage = $data->backgroundimage()->toFile() ?>
    <div style="background-image: linear-gradient(rgba(191, 217, 37, .95), rgba(191, 217, 37, .95)), url(<?= $backgroundimage->url() ?>)" class="headervbackground"></div>
    <div class="headerv1">
      <h1 class="headervheader"><?= $data->heading()->html() ?></h1>
    </div>
  </div>
</section>