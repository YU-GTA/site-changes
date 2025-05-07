<section>
  <div class="footergigrid">
    <div class="footergi1">
      <h2 class="footergihdr"><?= $data->heading()->html() ?></h2>
      <div class="footergitext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="fgibbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
    <div class="footergi2">
      <h2 class="footergihdr"><?= $data->footerheading()->html() ?></h2>
      <a href="<?= $data->Leftbutton()->toLinkObject() ?>"><button class="fgibutton fgibr"><?= $data->Leftbuttontext()->html() ?></button></a>
      <a href="<?= $data->Midbutton()->toLinkObject() ?>"><button class="fgibutton"><?= $data->Midbuttontext()->html() ?></button></a>
      <a href="<?= $data->Rightbutton()->toLinkObject() ?>"><button class="fgibutton"><?= $data->Rightbuttontext()->html() ?></button></a>
    </div>
    <div class="footergi3"></div>
    <div class="footergi4">
      <?php $image = $data->image()->toFile() ?>
      <img class="footergiimg" alt="<?= $data->alttext()->html() ?>" src="<?= $image->url() ?>">
      <?php $image = $data->imagemobile()->toFile() ?>
      <img class="mfootergiimg" alt="<?= $data->alttextmobile()->html() ?>" src="<?= $image->url() ?>">
    </div>
  </div>
</section>
