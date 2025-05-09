<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-getinvolved') ?>
<div class="legalpage">
<section >
  <div class="headervgrid">
    <div class="headervbackground"></div>
    <div class="headerv1">
      <h2 class="headervheader">Job Openings</h2>
    </div>
  </div>
</section>
<ul class="jobgrid">
  <?php foreach ($page->children()->published()->sortBy('date', 'desc')->paginate(20) as $job) : ?>
    <li class="jobitem">
      <a class="joblink" target="_blank" href="<?= $job->link()->toLinkObject() ?>">
        <figure>
          <div class="jobtitle"><?= $job->jobtitle() ?><img class="jobarrow" src=".\assets\images\svgs\bluearrow.svg"></div>
          <time class="jobdate jobopenings"><?= $job->date()->toDate('d / m / Y') ?></time>
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