<?php snippet('html_start') ?>
<div class="searchpage">
  <a href="./home"><img class="smallcross" alt="Exit button" src="./assets/images/svgs/smallcross.svg"></a>
  <form class="searchbar">
    <input class="searchinput" type="search" aria-label="Search Form" name="q" value="<?= html($query) ?>">
    <input class="searchbutton" type="image" alt="Search Button" src="./assets/images/svgs/searchwhite.svg">
  </form>
  <?php $types = $results->groupBy('template');?>
    <?php foreach($types as $type => $itemsPerType): ?>
      <?php if ($type == "story") : ?>
        <h2 class="searchheader">Stories</h2>
      <?php endif ?>
      <ul class="threegrid">
      <?php foreach($itemsPerType as $item) : ?>
        <?php if ($item->template() == "story") : ?>
          <li class="searchitem">
            <a href="<?= $item->url() ?>">
              <figure>
                <img class="threegridimg" src=<?= $item->image()->url() ?>>
                <figcaption class="storytitle wtext"><?= $item->name() ?><figcaption>
                <div class="storysum wtext"><?= $item->body()->excerpt(150)->kt() ?></div>
                <time class="jobdate wtext"><?= $item->date()->toDate('d / m / Y') ?></time>
              </figure>
            </a>
          </li>
        <?php endif ?>
      <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
    <?php foreach($types as $type => $itemsPerType): ?>
      <?php if ($type == "event") : ?>
        <h2 class="searchheader">Events</h2>
      <?php endif ?>
      <ul class="threegrid">
      <?php foreach($itemsPerType as $item) : ?>
        <?php if ($item->template() == "event") : ?>
          <li class="searchitem">
            <a href="<?= $item->url() ?>">
              <figure>
                <img class="threegridimg" src=<?= $item->image()->url() ?>>
                <figcaption class="storytitle wtext"><?= $item->name() ?><figcaption>
                <div class="storysum wtext"><?= $item->body()->excerpt(150)->kt() ?></div>
                <time class="jobdate wtext"><?= $item->date()->toDate('d / m / Y') ?></time>
              </figure>
            </a>
          </li>
        <?php endif ?>
      <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
    <?php foreach($types as $type => $itemsPerType): ?>
      <?php if ($type == "publication") : ?>
        <h2 class="searchheader">Publications</h2>
      <?php endif ?>
      <ul class="fourgrid">
      <?php foreach($itemsPerType as $item) : ?>
        <?php if ($item->template() == "publication") : ?>
          <li class="searchitem">
            <a target="_blank" href="<?= $item->pdf()->toFile() ?>">
              <figure>
                <img class="fourgridimg" src=<?= $item->image()->url() ?>>
                <figcaption class="storytitle wtext"><?= $item->name() ?><figcaption>
                <div class="pubdate wtext"></div>
                <time class="jobdate wtext"><?= $item->date()->toDate('d / m / Y') ?></time>
              </figure>
            </a>
          </li>
        <?php endif ?>
      <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
  </ul>
    <?php foreach($types as $type => $itemsPerType): ?>
      <?php if ($type == "staff") : ?>
        <h2 class="searchheader">Team Members</h2>
      <?php endif ?>
      <ul class="fivegrid">
      <?php foreach($itemsPerType as $item) : ?>
        <?php if ($item->template() == "staff") : ?>
          <li class="searchitem">
          <a href="<?= $item->url() ?>">
            <figure>
              <img class="fivegridimg" src=<?= $item->image()->url() ?>>
              <figcaption class="staffname wtext"><?= $item->name() ?><figcaption>
              <div class="staffpos wtext"><?= $item->position() ?></div>
              <div class="staffloc wtext"><?= $item->team() ?></div>
            </figure>
          </a>
          </li>
        <?php endif ?>
      <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
    <?php foreach($types as $type => $itemsPerType): ?>
      <?php if ($type == "team") : ?>
        <h2 class="searchheader">Teams</h2>
      <?php endif ?>
      <ul class="fivegrid">
      <?php foreach($itemsPerType as $item) : ?>
        <?php if ($item->template() == "team") : ?>
          <li class="teambox searchitem">
          <a href="<?= $item->url() ?>">
            <figure>
            <div class="teamsub wtext"><?= $item->name() ?></div>
            <div class="teamtxt teamc wtext"><?= $item->righttext()->excerpt(120)->kt() ?></div>
            <span class="wtext">View Team Page ›</span>
            </figure>
          </a>
          </li>
        <?php endif ?>
      <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
  </ul>
  <div class="push"></div>
</div>
<div class="sfooter">
  <?php snippet('footer') ?>
</div>
<?php snippet('html_end') ?>