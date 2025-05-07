<section >
  <div class="headermsgrid">
    <?php $backgroundimage = $data->backgroundimage()->toFile() ?>
    <div style="background-image: linear-gradient(rgba(250, 161, 45, .74), rgba(250, 161, 45, .74)), url(<?= $backgroundimage->url() ?>)" class="headermsbackground"></div>
    <div class="headerms1">
      <h1 class="headermsheader"><?= $data->heading()->html() ?></h1>
    </div>
    <div class="headerms2"></div>
  </div>
</section>