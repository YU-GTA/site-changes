<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-news') ?>
<section >
  <div class="headerngrid">
    <div class="headernbackground"></div>
    <div class="headern1">
      <h1 class="headernheader">Stories</h1>
    </div>
    <div class="headern2"></div>
  </div>
</section>
<ul class="threegrid">
  <?php foreach ($page->children()->published()->sortBy('date', 'desc')->paginate(9) as $story) : ?>
    <li class="storyitem">
      <a href="<?= $story->url() ?>">
        <figure>
          <img class="threegridimg" alt="<?= $story->alttext()->html() ?>" src=<?= $story->image()->url() ?>>
          <figcaption class="storytitle"><?= $story->name() ?><figcaption>
          <div class="storysum"><?= $story->body()->excerpt(150)->kt() ?></div>
          <time class="jobdate"><?= $story->date()->toDate('d / m / Y') ?></time>
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