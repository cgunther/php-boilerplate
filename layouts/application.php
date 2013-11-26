<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title><?php echo has_content('title') ? yield('title', false) . ' - ' : ''; ?>[SITE NAME]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo $config['base_url']; ?>">
    <!--[if ! lte IE 6]><!-->
      <link rel="stylesheet" href="css/application.css">
      <?php yield('stylesheets'); ?>
    <!--<![endif]-->
    <!--[if lte IE 6]>
      <link rel="stylesheet" href="css/libs/ie6.1.1.css">
      <style>html { padding-top: 42px; }</style>
    <![endif]-->
    <script src="js/libs/modernizr-2.7.0.min.js"></script>
  </head>
  <body>
    <?php yield(); ?>

    <!--[if ! lte IE 6]><!-->
      <script src="js/libs/jquery-1.10.2.min.js"></script>
      <?php javascripts('script'); yield('javascripts'); ?>
    <!--<![endif]-->

    <?php if ($config['google_analytics_web_property_id'] != ''): ?>
      <script>
        var _gaq=[['_setAccount','<?php echo $config['google_analytics_web_property_id']; ?>'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
      </script>
    <?php endif; ?>

    <!--[if lt IE 7 ]>
      <div style="clear: both; height: 59px; padding: 0; position: absolute; left: 50%; top: 0; margin-left: -410px;">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
          <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
  </body>
</html>
