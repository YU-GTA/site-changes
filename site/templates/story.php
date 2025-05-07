<?php snippet('html_start') ?>
<?php snippet('blocks/navbar-news') ?>
<section >
  <div class="headerngrid">
    <div class="headernbackground"></div>
    <div class="headern1">
      <h1 class="headernheader"><?= $page->title()->html() ?></h1>
    </div>
    <div class="headern2"></div>
  </div>
</section>
<article class="story">
  <div class="storydate"><time><?= $page->date()->toDate('d / m / Y') ?></time></div>
  <h2 class="storyheader"><?= $page->name()->html() ?></h2>
  <div class="storysub"><?= $page->subheading()->kt() ?></div>
  <img class="storyimg" alt="<?= $page->alttext()->html() ?>" src=<?= $page->image()->url() ?>>
  <div class="storytext"><?= $page->body()->kt() ?></div>
  <div class="storysocial">
    <p>Share</p> 
    <a href="" id="fb_share"><img class="ssocial" src="\.\assets\images\svgs\fbgrey.svg"></a>
    <a href="" id="tw_share"><img class="ssocial" src="\.\assets\images\svgs\twittergrey.svg"></a>
  </div>
</article>
<script>
    window.onload = function() {
        fb_share.href ='http://www.facebook.com/share.php?u=' + encodeURIComponent(location.href); 
        tw_share.href ='https://twitter.com/intent/tweet?url=' + encodeURIComponent(location.href); 
    }  
</script>
<?php snippet('footer') ?>
<?php snippet('html_end') ?>
