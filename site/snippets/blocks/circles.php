<section>
  <div class="circlegrid">
    <div class="circle1 cgrid">
      <div class="cgrid1">
        <h2 class="circleheader"><?= $data->Texttopleft()->html() ?></h2>
        <div class="circletext pinkbg"><?= $data->Textbottomleft()->html() ?></div>
      </div>
      <div class="cgrid2">
        <?php $image = $data->Imageleft()->toFile() ?>
        <img class="circleimg" alt="<?= $data->alttextleft()->html() ?>" src="<?= $image->url() ?>">
      </div>
    </div>

    <div class="circle2 cgrid">
      <div class="cgrid1">
        <h2 class="circleheader"><?= $data->Texttopmid()->html() ?></h2>
        <div class="circletext greenbg"><?= $data->Textbottommid()->html() ?></div>
      </div>
      <div class="cgrid2">
        <?php $image = $data->Imagemid()->toFile() ?>
        <img class="circleimg" alt="<?= $data->alttextmid()->html() ?>" src="<?= $image->url() ?>">
      </div>
    </div>

    <div class="circle3 cgrid">
      <div class="cgrid1">
        <h2 class="circleheader"><?= $data->Texttopright()->html() ?></h2>
        <div class="circletext orangebg"><?= $data->Textbottomright()->html() ?></div>
      </div>
      <div class="cgrid2">
        <?php $image = $data->Imageright()->toFile() ?>
        <img class="circleimg" alt="<?= $data->alttextright()->html() ?>" src="<?= $image->url() ?>">
      </div>
    </div>
  </div>
</section>