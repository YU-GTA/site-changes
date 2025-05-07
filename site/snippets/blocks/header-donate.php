<section >
  <div class="headerdgrid">
    <?php $backgroundimage = $data->backgroundimage()->toFile() ?>
    <div style="background-image: linear-gradient(rgba(239, 75, 73, .74), rgba(239, 75, 73, .74)), url(<?= $backgroundimage->url() ?>)" class="headerdbackground"></div>
    <div class="headerd1">
      <h1 class="headerdheader"><?= $data->heading()->html() ?></h1>
    </div>
  </div>
</section>