<section>
  <div id="collapsetab" class="collapse">
    <div class="">
      <h2 class="sixslideheader"><?= $data->heading()->html() ?></h2>
    </div>
        <div class="tab scrolling-wrapper-flexbox">
          <button class="card tablinks five" onclick="openTab(event, '<?= $data->slide1heading()->html() ?>')" id="defaultOpen"><?= $data->slide1heading()->html() ?></button>
          <button class="card tablinks five" onclick="openTab(event, '<?= $data->slide2heading()->html() ?>')"><?= $data->slide2heading()->html() ?></button>
          <button class="card tablinks five" onclick="openTab(event, '<?= $data->slide3heading()->html() ?>')"><?= $data->slide3heading()->html() ?></button>
          <button class="card tablinks five" onclick="openTab(event, '<?= $data->slide4heading()->html() ?>')"><?= $data->slide4heading()->html() ?></button>
          <button class="card tablinks five" onclick="openTab(event, '<?= $data->slide5heading()->html() ?>')"><?= $data->slide5heading()->html() ?></button>
        </div>
    <div id="<?= $data->slide1heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide1heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide1text()->kt() ?></div>
      </div>
      <div class="tab2 tabmgrid">
      <div class="tabm1">
        <div class="tabnumber"><?= $data->slide1topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide1toptext()->html() ?></div>
        </div>
        <div class="tabm2">  
        <div class="tabnumber"><?= $data->slide1bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide1bottomtext()->html() ?></div>
        </div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide1image()->toFile() ?>
        <img class="tabimg" alt="<?= $data->alttext1()->html() ?>" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide2heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide2heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide2text()->kt() ?></div>
      </div>
      <div class="tab2">
      <div class="tabm1">
        <div class="tabnumber"><?= $data->slide2topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide2toptext()->html() ?></div>
        </div>
        <div class="tabm2">  
        <div class="tabnumber"><?= $data->slide2bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide2bottomtext()->html() ?></div>
        </div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide2image()->toFile() ?>
        <img class="tabimg" alt="<?= $data->alttext2()->html() ?>" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide3heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide3heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide3text()->kt() ?></div>
      </div>
      <div class="tab2">
      <div class="tabm1">
        <div class="tabnumber"><?= $data->slide3topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide3toptext()->html() ?></div>
        </div>
        <div class="tabm2">  
        <div class="tabnumber"><?= $data->slide3bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide3bottomtext()->html() ?></div>
        </div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide3image()->toFile() ?>
        <img class="tabimg" alt="<?= $data->alttext3()->html() ?>" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide4heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide4heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide4text()->kt() ?></div>
      </div>
      <div class="tab2">
        <div class="tabm1">
          <div class="tabnumber"><?= $data->slide4topheading()->html() ?></div>
          <div class="tabnumbertxt"><?= $data->slide4toptext()->html() ?></div>
        </div>
        <div class="tabm2">         
          <div class="tabnumber"><?= $data->slide4bottomheading()->html() ?></div>
          <div class="tabnumbertxt"><?= $data->slide4bottomtext()->html() ?></div>
        </div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide4image()->toFile() ?>
        <img class="tabimg" alt="<?= $data->alttext4()->html() ?>" src="<?= $image->url() ?>">
      </div>
    </div>

    <div id="<?= $data->slide5heading()->html() ?>" class="tabcontent">
      <div class="tab1">
        <div class="tabheader"><?= $data->slide5heading()->html() ?></div>
        <div class="tabtext"><?= $data->slide5text()->kt() ?></div>
      </div>
      <div class="tab2">
      <div class="tabm1">
        <div class="tabnumber"><?= $data->slide5topheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide5toptext()->html() ?></div>
        </div>
        <div class="tabm2">  
        <div class="tabnumber"><?= $data->slide5bottomheading()->html() ?></div>
        <div class="tabnumbertxt"><?= $data->slide5bottomtext()->html() ?></div>
        </div>
      </div>
      <div class="tab3">
        <?php $image = $data->slide5image()->toFile() ?>
        <img class="tabimg" alt="<?= $data->alttext5()->html() ?>" src="<?= $image->url() ?>">
      </div>
    </div>
  </div>
  <label id="colbut" for="chckcol" class="collapse-label">Read More</label>
  <input type="checkbox" id="chckcol" checked="checked">
</section>
