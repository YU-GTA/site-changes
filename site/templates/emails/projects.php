<?php snippet('html_start') ?>

<section class="projects">
  <?php $style = 1 ?>
  <?php $srcsets = [
    1 => 'landscape_1',
    2 => 'square',
    3 => 'portrait',
    4 => 'landscape_2',
    5 => 'landscape_1',
    6 => 'square',
    7 => 'portrait',
    8 => 'landscape_2',
  ] ?>
  <?php foreach ($page->children() as $project) : ?>
    <div class="project project-style-<?= $style ?>">
      <figure>
        <a href="<?= $project->url() ?>">
          <div class="position-relative">
            <div class="backdrop lax" data-lax-preset_large="backdrop"></div>
            <?php $image = $project->cover_photo()->isNotEmpty() ?
              $project->cover_photo()->toFile() :
              $project->content()->images()->first()->toFile() ?>
            <div class="img-bounds">
              <img class="img-cover w-100"
                src="<?= $image->url() ?>"
                srcset="<?= $image->srcset("projects_$srcsets[$style]") ?>"
                alt="Featured photo of <?= $project->title()->html() ?>">
            </div>
          </div>
          <h2 class="h3 mb-0"><?= $project->title()->html() ?></h2>
          <figcaption>
            <?php if ($project->category()->isNotEmpty()) : ?>
              <?= $project->category()->html() ?>
            <?php endif ?>
          </figcaption>
        </a>
      </figure>
    </div>
    <?php ++$style > 8 && $style = 1 ?>
  <?php endforeach ?>
</section>

<?php snippet('html_end') ?>
