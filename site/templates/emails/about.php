<?php snippet('html_start') ?>

<section class="staff position-relative hr-before">

  <?php if ($page->caption()) : ?>
    <figcaption class="text-maroon d-md-none pt-0 pb-2">
      <?= $page->caption()->html() ?>
    </figcaption>
  <?php endif ?>

  <?php if ($page->heading()) : ?>
    <h2 class="h3 mb-5 text-md-center"><?= $page->heading()->html() ?></h2>
  <?php endif ?>

  <div class="row position-relative">

    <?php foreach ($page->children() as $profile) : ?>
      <div class="col-5">
        <?php if ($profile->content()->image()->isEmpty()) : ?>
          <div class="square bg-gray-dark"></div>
        <?php else : ?>
          <?php $image = $profile->content()->image()->toFile() ?>
          <img class="img-cover"
            src="<?= $image->url() ?>"
            srcset="<?= $image->srcset('hero') ?>"
            alt="<?= $profile->title()->html() ?>">
        <?php endif ?>
        <h3 class="h4 w-25"><?= $profile->title()->html() ?></h3>
        <div class="small"><?= $profile->position()->html() ?></div>
      </div>
    <?php endforeach ?>

    <div class="backdrop">
      <?php if ($page->caption()) : ?>
        <figcaption class="text-maroon d-none d-md-inline-block position-absolute sideways-md">
          <?= $page->caption()->html() ?>
        </figcaption>
      <?php endif ?>
    </div>

  </div>

</section>

<?php snippet('html_end') ?>
