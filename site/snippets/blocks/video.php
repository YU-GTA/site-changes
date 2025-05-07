<section >
  <div class="video">
    <?php if ($data->heading()->isNotEmpty()) : ?>
      <h2 class="videoheader"><?= $data->heading()->html() ?></h2>
    <?php endif ?>
    <?php if ($data->text()->isNotEmpty()) : ?>
      <h2 class="vidtext"><?= $data->text()->html() ?></h2>
    <?php endif ?>
    <iframe class="wwdvideo" src="<?= $data->video()->toLinkObject() ?>"></iframe>
    <?php if ($data->caption()->isNotEmpty()) : ?>
      <div class="vidsubheader"><?= $data->caption()->html() ?></div>
    <?php endif ?>
  </div>
</section>