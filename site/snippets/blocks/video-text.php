<section >
  <?php if ($data->position()->toBool() === false) : ?>
    <div class="videogrid2">
      <div class="imgtxtalt1">
        <?php if ($data->heading()->isNotEmpty()) : ?>
          <h2 class="txtimgaltheader"><?= $data->heading()->html() ?></h2>
        <?php endif ?>
        <div class="txtimgalttext"><?= $data->text()->html() ?></div>
        <?php if ($data->buttontext()->isNotEmpty()) : ?>
          <a href="<?= $data->button()->toLinkObject()?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
        <?php endif ?>
      </div>   
      <div class="imgtxtalt2">
        <iframe class="wwdvideo" src="<?= $data->video()->toLinkObject() ?>"></iframe>
        <?php if ($data->caption()->isNotEmpty()) : ?>
          <div class="vidsubheader"><?= $data->caption()->html() ?></div>
        <?php endif ?>
      </div>
    </div>
  <?php endif ?>
  <?php if ($data->position()->toBool() === true) : ?>
    <div class="videogrid1">
      <div class="imgtxtalt1">
        <iframe class="wwdvideo" src="<?= $data->video()->toLinkObject() ?>"></iframe>
        <?php if ($data->caption()->isNotEmpty()) : ?>
          <div class="vidsubheader"><?= $data->caption()->html() ?></div>
        <?php endif ?>
      </div>
      <div class="imgtxtalt2">
        <?php if ($data->heading()->isNotEmpty()) : ?>
          <h2 class="txtimgaltheader"><?= $data->heading()->html() ?></h2>
        <?php endif ?>
        <div class="txtimgalttext"><?= $data->text()->html() ?></div>
        <?php if ($data->buttontext()->isNotEmpty()) : ?>
          <a href="<?= $data->button()->toLinkObject()?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
        <?php endif ?>
      </div>   
    </div>
  <?php endif ?>
</section>