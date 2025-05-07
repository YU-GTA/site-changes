<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-ourteam') ?>
<section>
  <div class="headerotgrid">
    <div class="headerotbackground"></div>
    <div class="headerot1">
      <h2 class="headerotheader"><?= $page->name()->html() ?></h2>
    </div>
  </div>
</section>
<section class="teambg">
  <div class="team1">
    <div class="tt1 teamltxt"><?= $page->lefttext()->html() ?></div>
    <div class="tt2">
      <div class="teamtxt"><?= $page->righttext()->kt() ?></div>
      <a href="<?= $page->donatelink()->toLinkObject() ?>" target="_blank"><button class="bbutton abutton">Donate Now</button></a>
      <a href="<?= $page->learnlink()->toLinkObject() ?>" target="_blank"><button class="pbutton tbutton"><?= $page->buttontext()->html() ?></button></a>
    </div>
  </div>
  <h2 class="teamheading"><?= $page->headingone()->html() ?></h2>
  <div class="team2">
    <div class="tt3 teamsub"><?= $page->titleone()->html() ?></div>
    <div class="tt4 teamtxt"><?= $page->textone()->kt() ?></div>
    <div class="tt5 teamsub"><?= $page->titletwo()->html() ?></div>
    <div class="tt6 teamtxt"><?= $page->texttwo()->kt() ?></div>
    <div class="tt7 teamsub"><?= $page->titlethree()->html() ?></div>
    <div class="tt8 teamtxt"><?= $page->textthree()->kt() ?></div>
    <div class="tt9 teamsub"><?= $page->titlefour()->html() ?></div>
    <div class="tt10 teamtxt"><?= $page->textfour()->kt() ?></div>
    <div class="tt11 teamsub"><?= $page->titlefive()->html() ?></div>
    <div class="tt12 teamtxt"><?= $page->textfive()->kt() ?></div>
    <div class="tt13 teamsub"><?= $page->titlesix()->html() ?></div>
    <div class="tt14 teamtxt"><?= $page->textsix()->kt() ?></div>
  </div>
  <h2 class="teamheading">Team</h2>
  <div class="team3">
    <ul class="staffgrid">
      <?php $name = $page->name()->html();?>
      <?php $staffs = page('our-team')->children()->published()->sortBy('name', 'asc');?>
      <?php foreach ($staffs->filterBy('team', $name) as $staff) : ?>
        <li class="">
          <a href="<?= $staff->url() ?>">
            <figure>
              <img class="fivegridimg" src=<?= $staff->image()->url() ?>>
              <figcaption class="staffname"><?= $staff->name() ?><figcaption>
              <div class="staffpos"><?= $staff->position() ?></div>
              <div class="staffloc"><?= $staff->team() ?></div>
            </figure>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
  <h2 class="teamheading"><?= $page->headingtwo()->html() ?></h2>
  <div class="team4">
    <div class="teamltxt tt15"><?= $page->stats()->kt() ?></div>
    <img class="tt16" alt="<?= $page->alttext()->html() ?>" src=<?= $page->image()->url() ?>>
  </div>
  <div class="footertgrid">
    <div class="footert1">
      <h2 class="footerthdr"><?= $page->footer()->html() ?></h2>
      <a href="<?= $page->donatelink()->toLinkObject() ?>"><button class="fabbutton">Donate Now &nbsp; ›</button></a>
    </div>
  </div>
</section>
<?php snippet('footer') ?>
<?php snippet('html_end') ?>