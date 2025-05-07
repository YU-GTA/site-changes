<section>
  <div class="imgtxtaltgrid">
    <div class="imgtxtalt1">
      <?php $image = $data->image()->toFile() ?>
      <img class="textimgalt" alt="<?= $data->alttext()->html() ?>" src="<?= $image->url() ?>">
    </div>

    <div class="imgtxtalt2">
      <h2 class="imgtxtaltheader"><?= $data->heading()->html() ?></h2>
      <div class="imgtxtalttext"><?= $data->text()->html() ?></div>
      <?php if ($data->buttontext()->isNotEmpty()) : ?>
        <a href="<?= $data->button()->toLinkObject()?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
      <?php endif ?>
    </div>
  </div>
</section>