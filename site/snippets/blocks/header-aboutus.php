<section >
  <div class="headerabgrid">
    <?php $backgroundimage = $data->backgroundimage()->toFile() ?>
    <div style="background-image: linear-gradient(rgba(250, 161, 45, .74), rgba(250, 161, 45, .74)), url(<?= $backgroundimage->url() ?>)" class="headerabbackground"></div>
    <div class="headerabbackground"></div>
    <div class="headerab1">
      <h1 class="headerabheader"><?= $data->heading()->html() ?></h1>
    </div>
    <div class="headerab3">
      <div class="headerabsubh"><?= $data->bottomsubhead()->html() ?></div>
      <div class="headerabtext"><?= $data->bottomhtext()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
    <div class="headerab2">
      <?php $image = $data->image()->toFile() ?>
      <img class="headerabimg" alt="<?= $data->alttext()->html() ?>" src="<?= $image->url() ?>">
    </div>
    <div class="headerab4">
      <img class="headerablogo" alt="" src="./assets/images/svgs/goldquote.svg">
    </div>
  </div>
</section>