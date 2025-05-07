<section>
  <div class="faqgrid">
    <div class="faq1">
      <h2 class="faqheader"><?= $data->heading()->html() ?></h2>
      <div class="faqtext"><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton faqbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
    <div class="faq2">
      <button class="accordion"><?= $data->question1()->html() ?></button>
      <div class="panel">
        <?= $data->answer1()->kirbytext() ?>
      </div>

      <button class="accordion"><?= $data->question2()->html() ?></button>
      <div class="panel">
        <?= $data->answer2()->kirbytext() ?>
      </div>

      <button class="accordion"><?= $data->question3()->html() ?></button>
      <div class="panel">
        <?= $data->answer3()->kirbytext() ?>
      </div> 

      <button class="accordion"><?= $data->question4()->html() ?></button>
      <div class="panel">
        <?= $data->answer4()->kirbytext() ?>
      </div>
    </div> 

    <div class="faq3">
       <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>
  </div>
</section>