<a href="<?= $data->mbutton()->toLinkObject() ?>"><button class="mbutton"><?= $data->mbuttontext()->html() ?></button></a>
 <div class="headerhgrid">
     <?php $backgroundimage = $data->backgroundimage()->toFile() ?>
    <div style="background-image: linear-gradient(rgba(26, 61, 161, .74), rgba(92, 99, 250, .74)), url(<?= $backgroundimage->url() ?>)" class="headerhbackground">
    </div>
    <div class="headerh1">
      <h1 class="headerhtheader"><?= $data->heading()->html() ?></h1>
      <div class="headerhttext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="pbutton"><?= $data->buttontext()->html() ?></button></a>
      </div>
    <div class="headerh3">
      <div class="headerhsubh"><?= $data->bottomsubhead()->html() ?></div>
      <h2 class="headerhbheader"><?= $data->bottomheading()->html() ?></h2>
      <div class="headerhbtext"><?= $data->bottomtext()->html() ?></div>
    </div>
    <div class="headerh2">
      <?php $image = $data->image()->toFile() ?>
      <img class="headerhimg" alt="<?= $data->alttext()->html() ?>" src="<?= $image->url() ?>">
    </div>
    <div class="headerh4">
      <img class="headerhlogo" alt="" src="./assets/images/svgs/goldquote.svg">
    </div>
  </div>