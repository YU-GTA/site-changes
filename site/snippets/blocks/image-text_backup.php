<section id="latest">
<ul class="imgtxtlist">
  <?php if (page('publications')->children()->published()->isNotEmpty()): ?>
    <?php $publications = page('publications')->children()->published();?>
  <?php endif ?>
  <?php $events = page('events')->children()->published();?>
  <?php $stories = page('stories')->children()->published();?>
  <?php $entries = $events->merge($stories, $publications);?>
  <?php $entries = $entries->sortBy('date', 'desc');?>
  <?php foreach ($entries->paginate(1) as $entry) : ?>
    <li>
        <figure class="imgtxtgrid">
          <img class="imgtxtimg imgtxt1" alt="<?= $entry->name() ?>" src=<?= $entry->image()->url() ?>>
          <div class="imgtxt2">
            <span class="imgtxtsubheader">Latest Stories + Events</span>
            <h2 class="imgtxtheader"><?= $entry->name() ?></h2>
            <div class="imgtxttext"><?= $entry->body()->excerpt(75)->kt() ?></div>
            <?php if ($entry->template() == "publication") : ?>
              <a target="_blank" href="<?= $entry->pdf()->toFile() ?>"><button class="bbutton">Learn More</button></a>
            <?php else: ?>
              <a href="<?= $entry->url()?>"><button class="bbutton">Learn More</button></a>
            <?php endif ?>
          </div>
        </figure>
    </li>
  <?php endforeach ?>
</ul>
</section>