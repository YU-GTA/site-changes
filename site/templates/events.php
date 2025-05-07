<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-news') ?>
<section >
  <div class="headerngrid">
    <div class="headernbackground"></div>
    <div class="headern1">
      <h1 class="headernheader">Events</h1>
    </div>
    <div class="headern2"></div>
  </div>
</section>
<ul class="threegrid">
  <?php foreach ($page->children()->published()->sortBy('date', 'desc')->paginate(9) as $event) : ?>
    <li class="storyitem">
      <a href="<?= $event->url() ?>">
        <figure>
        <?php $topimage = $event->topimage()->toFile() ?>
        <img class="threegridimg" alt="<?= $event->alttext()->html() ?>" src="<?= $topimage->url() ?>">
          <figcaption class="storytitle"><?= $event->name() ?><figcaption>
          <div class="storysum"><?= $event->body()->excerpt(150)->kt() ?></div>
          <time class="jobdate"><?= $event->date()->toDate('d / m / Y') ?></time>
        </figure>
      </a>
    </li>
  <?php endforeach ?>
</ul>
<?php $pagination = $page->children()->published()->sortBy('date', 'desc')->paginate(9)->pagination(); ?>
<nav class="pagnav">
  <a href="<?= $pagination->prevPageUrl() ?>"><button class="pagbutton">Last Page</button></a>
  <a href="<?= $pagination->nextPageUrl() ?>"><button class="pagbutton rbutton">Next Page</button></a>
</nav>
<?php snippet('footer') ?>
<?php snippet('html_end') ?>