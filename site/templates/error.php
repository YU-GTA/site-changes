<?php snippet('html_start') ?>
<div class="legalpage">
  <nav class="navlegal navstick">
    <div class="mnavbar">
      <a href="/./home"><img class="navlogo" src="\.\assets\images\svgs\YUlogoblack.svg"></a>
      <a href="/./mnav"><img class="hamburger" src="\.\assets\images\svgs\hamburger.svg"></a>
    </div>
    <div class="navbar">
    <a href="/./home"><img class="navlogo" src="\.\assets\images\svgs\YUlogoblack.svg"></a>
      <div class="navlinks">
        <div class="dropdown navtext">
          <a href="/./about-us" class="navtext">About Us</a>
          <div class="dropdown-content">
            <a href="/./what-we-do">What We Do</a>
            <a href="/./making-space">Making Space</a>
            <a href="<?= page('impact-report')->pdf()->toFile() ?>">Impact Report</a>
          </div>
        </div>
        <div class="dropdown navtext">
          <a href="/./get-involved" class="navtext">Get Involved</a>
          <div class="dropdown-content">
            <a href="/./job-openings">Job Openings</a>
            <a href="/./volunteer">Volunteer</a>
            <a href="/./fundraise">Fundraise</a>
          </div>
        </div>
        <div class="dropdown navtext">
          <a href="/./news" class="navtext">News + Stories</a>
          <div class="dropdown-content">
            <a href="/./events">Events</a>
            <a href="/./stories">Stories</a>
            <a href="/./publications">Publications</a>
          </div>
        </div>
        <div class="dropdown navtext">
          <a href="/./our-team" class="navtext">Our Team</a>
        </div>
        <div><a href="/./donate" class=""><button class="navbutton">Donate</button></a></div>
        <div><a href="/./search" class=""><img class="search" src="\.\assets\images\svgs\searchblack.svg"></a></div>
      </div>
    </div>
  </nav>
  <section >
    <div class="headerlgrid">
      <div class="headerlbackground"></div>
      <div class="headerl1">
        <h2 class="headerlheader">Page Not Found</h2>
      </div>
    </div>
  </section>
  <div class="errorpage">
    <span class="errortxt">Uh oh! Looks like you're lost.<br>Were you looking for...?</span>
    <div>
      <a href="/./volunteer"><button class="errbutton">Volunteer  ›</button></a>
      <a href="/./job-openings"><button class="errbutton merrbutton">Job Openings  ›</button></a>
      <a href="/./donate"><button class="errbutton">Donate  ›</button></a>
    </div>
  </div>
  <div class="push"></div>
</div>
<div class="sfooter">
  <?php snippet('footer') ?>
</div>
<?php snippet('html_end') ?>