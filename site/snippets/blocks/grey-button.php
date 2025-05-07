<section>
  <div class="greygrid">
    <div class="grey1">
      <h2 class="greyheader"><?= $data->heading()->html() ?></h2>
    </div>
    <div class="grey3"></div>
    <div class="grey2">
      <div class="greytext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
  </div>
</section>