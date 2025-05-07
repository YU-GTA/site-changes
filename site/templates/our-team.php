<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-ourteam') ?>
<div class="legalpage">
<section>
  <div class="headerotgrid">
    <div class="headerotbackground"></div>
    <div class="headerot1">
      <h1 class="headerotheader">Our Team & Staff</h1>
    </div>
  </div>
</section>
<div class="otbuttons">
  <?php $filterBy = get("filter");?>
  <?php $staffs = $page->children()->published()->sortBy('name', 'asc')->when($filterBy, function($filterBy) {
    return $this->filterBy("team", $filterBy);
  });?>
   <?php $teams = page("teams")->children()->published()->sortBy('name', 'asc')->when($filterBy, function($filterBy) {
    return $this->filterBy("name", $filterBy);
  });?>
  <?php $buttons = page("teams")->children()->published()->pluck("name");?>
  <a href="<?= $page->url() ?>"><button class="otbutton">All</button></a>
  <?php foreach ($buttons as $button) : ?>
    <a href="<?= $page->url() ?>?filter=<?= $button ?>"><button class="otbutton"><?= $button ?></button></a>
  <?php endforeach ?>
</div>
<ul class="fivegrid otpad">
  <?php foreach ($teams as $team) : ?>
    <?php if ($team->name() == $filterBy) : ?>
      <li class="teambox">
        <a href="<?= $team->url() ?>">
        <figure>
          <div class="teamsub"><?= $team->name() ?></div>
          <div class="teamtxt teamc"><?= $team->righttext()->excerpt(140)->kt() ?></div>
          <span class="teamlink">View Team Page ›</span>
        </figure>
        </a>
      </li>
    <?php endif ?>
  <?php endforeach ?>
  <?php foreach ($staffs as $staff) : ?>
    <li class="staffitem">
      <a href="<?= $staff->url() ?>">
        <figure>
          <img class="fivegridimg" alt="Image of <?= $staff->name() ?>" src=<?= $staff->image()->url() ?>>
          <figcaption class="staffname"><?= $staff->name() ?><figcaption>
          <div class="staffpos"><?= $staff->position() ?></div>
          <div class="staffloc"><?= $staff->team() ?></div>
        </figure>
      </a>
    </li>
  <?php endforeach ?>
</ul>
<div class="push"></div>
</div>
<div class="sfooter">
  <?php snippet('footer') ?>
</div>
<?php snippet('html_end') ?>