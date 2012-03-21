<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="//www.tourolib.org/sites/all/themes/tc1/images/favicon.ico" type="image/x-icon" />
  <title><?php echo has_slot('title') ? get_slot('title') . ' | ' : '' ?>Touro College Libraries</title>

  <meta name="title" content="Touro College Libraries" />
  <meta name="description" content="Website of the Touro College Libraries" />
  <meta name="subject" content="Touro College Libraries, Touro Libraries, Touro College Library,
    Touro Library, TCL, Turo Library, Turo Libraries, SCAS, DMX" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php use_stylesheet('frontend_mobile.css') ?>
  <?php use_javascript('jquery/js/jquery-1.7.1.min.js', 'first') ?>
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><?php echo link_to('Touro Libraries Home', 'http://m.tourolib.org/') ?></li>
        <?php if (has_component_slot('logoutLink') && get_component_slot('logoutLink')): ?>
        <li><?php include_component_slot('logoutLink') ?></li>
        <?php endif; ?>
      </ul>
    </nav>

    <h1>Touro College Libraries</h1>
  </header>

  <article>
    <?php echo $sf_content ?>
  </article>

<?php if ( sfConfig::get('app_google_analytics_key') ): ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo sfConfig::get('app_google_analytics_key') ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php endif; ?>

<footer>
  <nav>
    <ul>
      <li><a href="http://www.touro.edu/">TC Home</a></li>

      <li><a href="http://m.tourolib.org/tech-support">Technical Support</a></li>
      <li><a href="http://m.tourolib.org/contact">Contact Us</a></li>
      <li><a href="http://www.touro.edu/general/disclaimer.asp">Disclaimer</a></li>
      <li><a href="http://www.touro.edu/docs/TouroCollege-WebsitePrivacyPolicy-Final(110509).pdf">Privacy Policy</a></li>
      <li><a href="http://www.touro.edu/docs/TouroCollege-WebsiteTermsofUse-Final(110509).pdf">Terms of Use</a></li>
      <?php if (has_component_slot('mobileSwitch')): ?>
      <?php include_component_slot('mobileSwitch') ?>
      <?php endif; ?>
    </ul>
  </nav>
  <div>Copyright &copy; 2012 Touro College. All rights reserved.</div>
  <div>Touro College Main Campus – 27-33 West 23 Street, New York, NY 10010, (212) 463-0400</div>
</footer>

</body>
</html>

