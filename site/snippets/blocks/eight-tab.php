<section>
  <div class="eighttabgrid">
    <div class="eighttab1">
      <div class="eighttabtext "><?= $data->text()->html() ?></div>
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton eighttabb"><?= $data->buttontext()->html() ?></button></a>
    </div>
    
    <div class="eighttab2 etgrid">
      <div class="etgrid1">
        <div class="eighttabtext2"><?= $data->lefttoptext()->html() ?></div>
      </div>
      <div class="etgrid2">  
        <div class="eighttabtext2"><?= $data->leftuppermidtext()->html() ?></div>
      </div>
      <div class="etgrid3">  
        <div class="eighttabtext2"><?= $data->leftlowermidtext()->html() ?></div>
      </div>
      <div class="etgrid4">
        <div class="eighttabtext2"><?= $data->leftbottomtext()->html() ?></div>
      </div>
      <div class="etgrid5">  
        <div class="eighttabtext2"><?= $data->righttoptext()->html() ?></div>
      </div>
      <div class="etgrid6">
        <div class="eighttabtext2"><?= $data->rightuppermidtext()->html() ?></div>
      </div>
      <div class="etgrid7">  
        <div class="eighttabtext2"><?= $data->rightlowermidtext()->html() ?></div>
      </div>
      <div class="etgrid8">  
        <div class="eighttabtext2"><?= $data->rightbottomtext()->html() ?></div>
      </div>
    </div>

    <div class="eighttab3">
      <a href="<?= $data->button()->toLinkObject() ?>"><button class="bbutton"><?= $data->buttontext()->html() ?></button></a>
    </div>

  </div>
</section>