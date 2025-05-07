<section>
  <div class="threeimgtxtgrid">
    <div class="threeimgtxt1">
      <h2 class="threeimgtxtheader"><?= $data->heading()->html() ?></h2>
    </div>
    
    <div class="threeimgtxt2">
      <?php $image = $data->imageleft()->toFile() ?>
      <img class="threeimg" alt="<?= $data->alttextleft()->html() ?>" src="<?= $image->url() ?>">
    </div>
    <div class="threeimgtxt3">
      <div class="threeimgtxtsubhead"><?= $data->subheadleft()->html() ?></div>
    </div>
    <div class="threeimgtxt4">  
      <div class="threeimgtxttext"><?= $data->textleft()->html() ?></div>
    </div>

    <div class="threeimgtxt5">
      <?php $image = $data->imagemid()->toFile() ?>
      <img class="threeimg" alt="<?= $data->alttextmid()->html() ?>" src="<?= $image->url() ?>">
    </div>
    <div class="threeimgtxt6">
      <div class="threeimgtxtsubhead"><?= $data->subheadmid()->html() ?></div>
    </div>
    <div class="threeimgtxt7">  
      <div class="threeimgtxttext"><?= $data->textmid()->html() ?></div>
    </div>

    <div class="threeimgtxt8">
      <?php $image = $data->imageright()->toFile() ?>
      <img class="threeimg" alt="<?= $data->alttextright()->html() ?>" src="<?= $image->url() ?>">
    </div>
    <div class="threeimgtxt9">
      <div class="threeimgtxtsubhead"><?= $data->subheadright()->html() ?></div>
    </div>
    <div class="threeimgtxt10">  
      <div class="threeimgtxttext"><?= $data->textright()->html() ?></div>
    </div>
  </div>
</section>