<section id="latest">
  <ul class="imgtxtlist">
    <?php $entries = new Collection();?>
    <?php if($publicationsPage = page('publications')) : ?>
      <?php $publications = page('publications')->children()->published();?>
      <?php $entries->add($publications);?>
    <?php endif ?>
    <?php if($eventsPage = page('events')) : ?>
      <?php $events = page('events')->children()->published();?>
      <?php $entries->add($events);?>
    <?php endif ?>
    <?php if($storiesPage = page('stories')) : ?>
      <?php $stories = page('stories')->children()->published();?>
      <?php $entries->add($stories);?>
    <?php endif ?>
    <?php $entries = $entries->sortBy('date', 'desc');?>
    <?php foreach ($entries->paginate(1) as $entry) : ?>
      <li>
          <figure class="imgtxtgrid">
            <?php 
              $imageUrl = $entry->topimage()->isNotEmpty() ? $entry->topimage()->toFile()->url() : $entry->image()->url();
            ?>
            <img class="imgtxtimg imgtxt1" alt="<?= $entry->name() ?>" src="<?= $imageUrl ?>">
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