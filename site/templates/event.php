<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-news') ?>
<section >
  <div class="headerngrid">
    <div class="headernbackground"></div>
    <div class="headern1">
      <h1 class="headernheader"><?= $page->name()->html() ?></h1>
    </div>
    <div class="headern2"></div>
  </div>
</section>
<div class="eventgrid">
  <article class="event1">
    <p class="eventsub">Event Details</p>
    <div class="eventdate"><time><?= $page->eventdate()->toDate('l jS F, Y') ?></time></div>
    <div class="eventloc"><?= $page->location()->html() ?></div>
    <a href="<?= $page->link()->toLinkObject() ?>"><button class="bbutton eventb"><?= $page->button()->html() ?></button></a>
    <p class="eventsub">About</p>
    <div class="eventtext"><?= $page->body()->kt() ?></div>
  </article>
  <div class="event2">
    <?php $topimage = $page->topimage()->toFile() ?>
    <img class="eventimg" alt="<?= $page->alttext()->html() ?>" src="<?= $topimage->url() ?>">
    <?php if ($bottomimage = $page->bottomimage()->toFile()): ?>
      <img class="eventimg beimg" alt="<?= $page->alttext2()->html() ?>" src=<?= $bottomimage->url() ?>>
    <?php endif ?>
  </div> 
</div>
<?php snippet('footer') ?>
<?php snippet('html_end') ?>
