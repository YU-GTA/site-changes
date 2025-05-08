<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-news') ?>
<section >
  <div class="headerngrid">
    <div class="headernbackground"></div>
    <div class="headern1">
      <h1 class="headernheader">News + Stories</h1>
    </div>
    <div class="headern2"></div>
  </div>
</section>

<h2 class="newsheader">Latest</h2>
<ul class="latestblock">
  <?php $publications = page('publications')->children()->published();?>
  <?php $events = page('events')->children()->published();?>
  <?php $stories = page('stories')->children()->published();?>
  <?php $entries = $events->merge($stories);?>
  <?php $entries = $entries->sortBy('date', 'desc');?>
  <?php foreach ($entries->paginate(1) as $entry) : ?>
    <li>
      <a href="<?= $entry->url() ?>">
        <figure class="latestgrid">
        <img class="latestimg" alt="<?= $entry->name() ?>" src=<?= $entry->image()->url() ?>>
          <div class="latesttxt">
            <p class="latestsub">Latest Stories + Events</p>
            <h2 class="latestheader"><?= $entry->name() ?></h2>
            <div class="storysum"><?= $entry->body()->excerpt(100)->kt() ?></div>
            <time class="jobdate latest"><?= $entry->date()->toDate('d / m / Y') ?></time>
          </div>
        </figure>
      </a>
    </li>
  <?php endforeach ?>
</ul>
<h2 class="newsheader">Events<a class="newsall" href="events">SEE ALL  ›</a></h2>
<ul class="threegrid">
  <?php foreach ($events->sortBy('date', 'desc')->paginate(3) as $event) : ?>
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
<h2 class="newsheader">Stories<a class="newsall" href="stories">SEE ALL  ›</a></h2>
<ul class="threegrid">
  <?php foreach ($stories->sortBy('date', 'desc')->paginate(3) as $story) : ?>
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
<h2 class="newsheader">Publications<a class="newsall" href="publications">SEE ALL  ›</a></h2>
<ul class="fourgrid pubpad">
  <?php foreach ($publications->sortBy('date', 'desc')->paginate(4) as $publication) : ?>
    <li class="storyitem">
      <a target="_blank" aria-label="Open PDF" title="Open PDF" href="<?= $publication->pdf()->toFile() ?>">
        <figure>
          <img class="fourgridimg" alt="<?= $publication->alttext()->html() ?>" src=<?= $publication->image()->url() ?>>
          <figcaption class="storytitle"><?= $publication->name() ?><figcaption>
          <div class="pubdate"></div>
          <time class="jobdate"><?= $publication->date()->toDate('d / m / Y') ?></time>
        </figure>
      </a>
    </li>
  <?php endforeach ?>
</ul>
<?php snippet('footer') ?>
<?php snippet('html_end') ?>