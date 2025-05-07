<div class="container">
  <div class="breadcrumbs">
    <a href="<?= $page->parent()->url() ?>" class="h6 m-0 text-uppercase d-inline-flex align-items-center">
      <span class="btn btn-square btn-beige mr-3">
        <?= svg('site/svg/arrow-left.svg') ?>
      </span>
      <?= $page->parent()->title()->html() ?>
    </a>
  </div>
</div>
