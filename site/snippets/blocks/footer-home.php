<section>
  <div class="footerhgrid">
    <div class="footerh1">
      <h2 class="footerhhdr"><?= $data->heading()->html() ?></h2>
      <a href="<?= $data->Leftbutton()->toLinkObject() ?>"><button class="fhbutton"><?= $data->Leftbuttontext()->html() ?></button></a>
      <a href="<?= $data->Midbutton()->toLinkObject() ?>"><button class="fhbutton"><?= $data->Midbuttontext()->html() ?></button></a>
      <a href="<?= $data->Rightbutton()->toLinkObject() ?>"><button class="fhbutton"><?= $data->Rightbuttontext()->html() ?></button></a>
    </div>
    <div class="footerh2"></div>
    <div class="footerh3"></div>
    <div class="footerh4"></div>
  </div>
</section>
