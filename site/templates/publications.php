<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-news') ?>
<section >
  <div class="headerngrid">
    <div class="headernbackground"></div>
    <div class="headern1">
      <h1 class="headernheader">Publications</h1>
    </div>
    <div class="headern2"></div>
  </div>
</section>
<div>
  <?php $years = $page->children()->listed()->groupBy('year');?>
  <?php foreach($years as $year => $itemsPerYear): ?>
    <h2 class="newsheader"><?= $year ?></h2>
    <ul class="fourgrid pubpad">
      <?php foreach($itemsPerYear as $item) : ?>
        <li class="storyitem">
          <a target="_blank" href="<?= $item->pdf()->toFile() ?>">
            <figure>
              <img class="fourgridimg" alt="<?= $item->alttext()->html() ?>" src=<?= $item->image()->url() ?>>
              <figcaption class="storytitle"><?= $item->name() ?><figcaption>
              <div class="pubdate"></div>
              <time class="jobdate"><?= $item->date()->toDate('d / m / Y') ?></time>
            </figure>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach ?>
</div>
<?php snippet('footer') ?>
<?php snippet('html_end') ?>