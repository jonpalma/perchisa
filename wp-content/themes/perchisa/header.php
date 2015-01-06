<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <!-- Compatibilidad IE 6,7,8 :S
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

    <title><?php wp_title(''); ?></title>

    <meta  name="description" content="Somos una empresa con más de 60 años de experiencia en el mercado, líderes en el ramo en perforación de pozos de extracción de agua y perforación para minería en Chihuahua, México.">
    <meta  name="keywords" content="perforación de pozos, extracción de agua, experiencia en perforacion chihuahua, chihuahua, pozos, perforación de circulación inversa, perforación de circulación inversa inundada, perforación con circulación normal con martillo neumático, perforación convencional">

    <!-- Author Mixen -->
    <meta name="author" content="Jon Palma by www.mixen.mx">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url')?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url')?>/css/carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
    <link href="<?php bloginfo('template_url')?>/css/bootstrap-theme.css" rel="stylesheet" >

    <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/perchisa.ico" type="image/x-icon">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-47348908-1', 'perchisa.com');
      ga('send', 'pageview');

    </script>
    <?php wp_head();?>
  </head>
  <body>
      <header>
        <div class="navbar navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">PERCHISA</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url')?>/img/logo.png" class="img-responsive" alt=""></a>
            </div>
              <nav class="navbar-collapse collapse">
                <br>
                <p class="text-right txt-white"> <em>" Con más de  60 años de experiencia  en la perforación de pozos profundos."</em></p>
                <p class="text-right txt-white">ventas@perchisa.com <br> Teléfono: +52 (614) 436 1059</p>
                <?php wp_nav_menu( array(
                            'theme_location'    => 'menu',
                            'container'     => false,
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'echo'          => true,
                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                            'depth'         => 10,
                            'walker'        => new themeslug_walker_nav_menu
                        ) );

                ?>  
              </nav><!--/.navbar-collapse -->
          </div>
        </div><!--END / CONTAINER -->
    </header>