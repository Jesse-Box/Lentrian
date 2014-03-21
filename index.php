<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LENTRIAN</title>
    <meta name="description" content="">
    <!--<meta name="viewport" content="width=device-width">-->
    <link rel="stylesheet" href="assests/css/reset.css" type="text/css">
    <link rel="stylesheet" href="assests/css/main.css" type="text/css">
    <link rel="stylesheet" href="assests/css/print.css" type="text/css" media="print">
    <link rel="stylesheet" href="assests/css/jquery.maximage.css" type="text/css" media="screen" title="CSS" charset="utf-8">
    <script src="assests/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="assests/js/jquery.cycle.all.js" type="text/javascript"></script>
    <script src="assests/js/jquery.maximage.min.js" type="text/javascript"></script>
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <section id="container">
      <nav class="top-nav">
        <div class="logo-section">
          <a href="index.php" id="logo"><img src="assests/img/lentrian.svg" alt="Logo"></a>
        </div>
        <ul class="top">
          <li><a href="#">collections</a></li>
          <li><a href="#">acquire</a></li>
        </ul>
      </nav>
      <div id="maximage">
        <img src="assests/img/Landscape-1.jpg" alt="" width="1400" height="1050" />
        <img src="assests/img/5.jpg" alt="" width="1400" height="1050" />
      </div>
      <nav class="bottom-nav">
        <ul>
          <li><a href="#">various</a></li>
          <li><a href="#">contact</a></li>
        </ul>
      </nav>      
    </section>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script type="text/javascript" charset="utf-8">
      $(function() {
        var imgs = $('#maximage img');
        imgs.sort(function() { return 0.5 - Math.random() });
        $('#maximage').html( imgs );
        
        $('#maximage').maximage({
            cycleOptions: {
                speed: 800
            }
        });
      });
    </script>
  </body>
</html>
