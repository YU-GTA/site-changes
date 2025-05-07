<section>
  <div class="sixtabgrid">
    <div class="sixtab1">
      <h2 class="sixtabheader"><?= $data->heading()->html() ?></h2>
      <div class="sixtabtext "><?= $data->text()->kirbytext() ?></div>
    </div>
    
    <div class="sixtab2 stgrid">
      <div class="stgrid1">
        <div class="sixtabtext2"><?= $data->lefttoptext()->kirbytext() ?></div>
      </div>
      <div class="stgrid2">  
        <div class="sixtabtext2"><?= $data->leftmidtext()->kirbytext() ?></div>
      </div>
      <div class="stgrid3">
        <div class="sixtabtext2"><?= $data->leftbottomtext()->kirbytext() ?></div>
      </div>
      <div class="stgrid4">  
        <div class="sixtabtext2"><?= $data->righttoptext()->kirbytext() ?></div>
      </div>
      <div class="stgrid5">
        <div class="sixtabtext2"><?= $data->rightmidtext()->kirbytext() ?></div>
      </div>
      <div class="stgrid6">  
        <div class="sixtabtext2"><?= $data->rightbottomtext()->kirbytext() ?></div>
      </div>
    </div>
  </div>
</section>