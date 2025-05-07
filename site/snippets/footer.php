<footer>
  <div class="footergrid">
    <div class="footer1">
      <a class="footerheader footerlink" href="/./about-us">About</a>
      <a class="footertext footerlink" href="/./what-we-do">What We Do</a>
      <a class="footertext footerlink" href="/./our-strategy">Our Strategy</a>
      <a class="footertext footerlink" target="_blank" aria-label="Open PDF" title="Open PDF" href="<?= page('impact-report')->pdf()->toFile() ?>">Impact Report</a>
    </div>
    <div class="footer2">
    <a class="footerheader footerlink" href="/./get-involved">Get Involved</span>
      <a class="footertext footerlink" href="/./volunteer">Volunteer</a>
      <a class="footertext footerlink" href="/./fundraise">Fundraise</a>
      <a class="footertext footerlink" href="/./job-openings">Job Openings</a>
      <a class="footertext footerlink" href="/./partner-with-us">Partner</a>
      <a class="footertext footerlink" href="/./internship-program">Internship</a>
    </div>
    <div class="footer3">
    <a class="footerheader footerlink" href="/./news">News</span>
    <a class="footertext footerlink" href="/./stories">Stories</a>
      <a class="footertext footerlink" href="/./events">Events</a>
      <a class="footertext footerlink" href="/./publications">Publications</a>
    </div>
    <div class="footer4">
      <a class="footerheader footerlink" href="/./our-team">Our Team</span>
      <a class="footerheader footerlink" href="/./donate">Donate</a>
      <a class="footerheader footerlink" href="/./governance">Governance</a>
      <a class="footerheader footerlink" href="/./encountering-injustice">Encountering Injustice</a>
    </div>
    <div class="footer5">
      <span class="footertextbold">Stay up to date and sign up for our newsletter</span>
        <form method="post" action="<?= $page->url() ?>" enctype="text/plain" id="contact-form">
          <input class="emailinput" title="Email Form" aria-label="Email Form" type="email" id="email" placeholder="Email address" name="email" value="<?= $data['email'] ?? '' ?>" required>
          <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
        <input class="submit emailbutton" type="submit" name="submit" value="Submit">
        </form>
        <span class="footertext">
          <a class="footerlink" href="mailto:info@yugta.ca">info@yugta.ca</a>
            <a class="social social1" href="https://www.facebook.com/youthunlimitedtoronto/" target="_blank"><img class="social" alt="Facebook Logo" src="\.\assets\images\svgs\fbgrey.svg"></a>
          <a class="social" href="https://www.instagram.com/youthunlimitedtoronto/" target="_blank"><img class="social" alt="Instagram Logo" src="\.\assets\images\svgs\instagrey.svg"></a>
          <a class="social" href="https://ca.linkedin.com/company/youth-unlimited-gta" target="_blank"><img class="social" alt="Linkedin Logo" src="\.\assets\images\svgs\linkedin.svg"></a>
      </span>
      <span class="footertext">(416) 383-1477</span>
      <span class="footertext">95 Jonesville Cres. Toronto, ON M4A 1H2</span>
    </div>
    <div class="footer6">
      <a class="footersmalltext footerlink" href="/./privacy">Privacy</a>
      <a class="footersmalltext footerlink" href="/./terms-of-service">Terms</a>
      <a class="footersmalltext footerlink" href="/./accessibility">Accessibility</a>
      <a class="footersmalltext footerlink" href="/./cookies">Cookies</a>
    </div>
  </div>
  <script> var _ctct_m = "4deca2e8741be7168c4f8ac8aaa2cc57"; </script>
  <script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
</footer>
