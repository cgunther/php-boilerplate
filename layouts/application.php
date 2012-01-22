<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title><?php echo has_content('title') ? yield('title', false) . ' - ' : ''; ?>[SITE NAME]</title>
    <base href="<?php echo $config['base_url']; ?>">
    <!--[if ! lte IE 6]><!-->
      <link rel="stylesheet" href="css/style.css">
      <?php yield('stylesheets'); ?>
    <!--<![endif]-->
    <!--[if lte IE 6]>
      <link rel="stylesheet" href="css/libs/ie6.1.1.css">
      <style>html { padding-top: 42px; }</style>
    <![endif]-->
    <script src="js/libs/modernizr-2.0.6.min.js"></script>
  </head>
  <body>
    <header>

    </header>
    <div role="main">
      <?php yield(); ?>
    </div>
    <footer>

    </footer>

    <!--[if ! lte IE 6]><!-->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
      <?php javascripts('script'); yield('javascripts'); ?>
    <!--<![endif]-->

    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

    <!--[if lt IE 7 ]>
      <div style="clear: both; height: 59px; padding: 0; position: absolute; left: 50%; top: 0; margin-left: -410px;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
          <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
      <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
      <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
  </body>
</html>
