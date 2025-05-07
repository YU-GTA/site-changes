<section>
  <div class="threeboxesgrid">
    <div class="threeboxes1">
      <h2 class="threeboxesheader"><?= $data->heading()->html() ?></h2>
    </div>
    
    <div class="threeboxes2">
      <div class="threeboxessubhead"><?= $data->leftheading()->html() ?></div> 
      <div class="threeboxestext"><?= $data->lefttext()->html() ?></div>
    </div>

    <div class="threeboxes3">
      <div class="threeboxessubhead"><?= $data->midheading()->html() ?></div>
      <div class="threeboxestext"><?= $data->midtext()->html() ?></div>
    </div>

    <div class="threeboxes4">
      <div class="threeboxessubhead"><?= $data->rightheading()->html() ?></div>
      <div class="threeboxestext"><?= $data->righttext()->html() ?></div>
      <a class="threeboxestext threeboxlink" href="<?= $data->link()->toLinkObject() ?>"><?= $data->linktext()->html() ?></a>
  </div>
</section>