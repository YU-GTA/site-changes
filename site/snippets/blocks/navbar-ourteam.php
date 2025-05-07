<nav class="navteam navstick">
  <div class="mnavbar">
    <a href="/./home"><img class="navlogo" alt="Youth Unlimited Logo" src="\.\assets\images\svgs\YUlogoblack.svg"></a>
    <a href="/./mnav"><img class="hamburger" alt="Navagation Menu Icon" src="\.\assets\images\svgs\hamburger.svg"></a>
  </div>
  <div class="navbar">
    <a href="/./home"><img class="navlogo" alt="Youth Unlimited Logo" src="\.\assets\images\svgs\YUlogoblack.svg"></a>
    <div class="navlinks">
      <div class="dropdown navtext">
        <a href="/./about-us" class="navtext">About Us</a>
        <div class="dropdown-content">
          <a href="/./what-we-do">What We Do</a>
          <a href="./our-strategy">Our Strategy</a>
          <a target="_blank" aria-label="Open PDF" title="Open PDF" href="<?= page('impact-report')->pdf()->toFile() ?>">Impact Report</a>
        </div>
      </div>
      <div class="dropdown navtext">
        <a href="/./get-involved" class="navtext">Get Involved</a>
        <div class="dropdown-content">
          <a href="./careers">Careers</a>
          <a href="/./volunteer">Volunteer</a>
          <a href="/./fundraise">Fundraise</a>
          <a href="/./partner-with-us">Partner</a>
          <a href="/./internship-program">Internship</a>
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
        <a href="/./our-team" class="navtext">Our Team<br><img class="navcaret" src="\.\assets\images\svgs\blackcaret.svg"></img></a>
      </div>
      <div><a href="/./donate" class=""><button class="navbutton">Donate</button></a></div>
      <div><a href="/./search" class=""><img class="search" alt="Search Icon" src="\.\assets\images\svgs\searchblack.svg"></a></div>
    </div>
  </div>
</nav>