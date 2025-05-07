<?php snippet('html_start') ?>

<?php snippet('large_carousel') ?>

<div class="row project-details">
  <div class="col-8 col-md-7 col-xl-6 pt-4 pt-md-4 pb-5 pb-md-4 pr-5">
    <div class="backdrop bg-gray-green"></div>
    <h2 class="h4 mb-2">Project Details:</h2>
    <?= $page->details()->nl2br() ?>
  </div>
</div>

<div class="row project-summary">
  <div class="col-md-7 col-xl-6">
    <h2 class="h4">Project Summary:</h2>
    <div class="kirbytext">
      <?= $page->summary()->kirbytext() ?>
    </div>
  </div>
</div>

<?php snippet('html_end') ?>
