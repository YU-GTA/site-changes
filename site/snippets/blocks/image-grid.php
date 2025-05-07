<div class="imagegrid">
  <div class="gridimg1">
    <a target="_blank" href="<?= $data->link1()->toLinkObject() ?>">
      <?php $image1 = $data->image1()->toFile() ?>
      <img class="gridimg" alt="<?= $data->alttextleft()->html() ?>" src="<?= $image1->url() ?>">
    </a>
  </div>
  <?php if ($data->image2()->isNotEmpty()) : ?>
    <div class="gridimg2">
      <a target="_blank" href="<?= $data->link2()->toLinkObject() ?>">
      <?php $image2 = $data->image2()->toFile() ?>
      <img class="gridimg" alt="<?= $data->alttextleft()->html() ?>" src="<?= $image2->url() ?>">
      </a>
    </div>
  <?php endif ?>
  <?php if ($data->image3()->isNotEmpty()) : ?>
    <div class="gridimg3">
      <a target="_blank" href="<?= $data->link3()->toLinkObject() ?>">
      <?php $image3 = $data->image3()->toFile() ?>
      <img class="gridimg" alt="<?= $data->alttextleft()->html() ?>" src="<?= $image3->url() ?>">
      </a>
    </div>
  <?php endif ?>
  <?php if ($data->image4()->isNotEmpty()) : ?>
    <div class="gridimg4">
      <a target="_blank" href="<?= $data->link4()->toLinkObject() ?>">
      <?php $image4 = $data->image4()->toFile() ?>
      <img class="gridimg" alt="<?= $data->alttextleft()->html() ?>" src="<?= $image4->url() ?>">
      </a>
    </div>
  <?php endif ?>
</div>