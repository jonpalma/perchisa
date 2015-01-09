<?php get_header();?>

<!-- SLIDE -->
    <?php echo do_shortcode("[huge_it_slider id='2']"); ?>
<!-- END / SLIDE -->

    <div class="container">
      <div class="row">
        <div class="icon-b"><img src="<?php bloginfo('template_url')?>/img/icon-b.png" class="img-responsive" alt="icono-black"></div>
        <h2 style="text-align:center;"><strong>NUESTROS SERVICIOS</strong></h2>
        <hr>
          <div class="col-lg-6 bg-blue">
            <a href="servicios-de-perforacion-de-pozos.php">
              <img src="<?php bloginfo('template_url')?>/img/pozos.png" alt="Perforación de pozos chihuahua">
              <h4>PERFORACIÓN DE POZOS PROFUNDOS</h4>
            </a>
          </div>
        <div class="bg-2">
          <div class="col-lg-6 bg-green-2">
            <a href="servicios-de-mineria-en-perforacion.php">
              <img src="<?php bloginfo('template_url')?>/img/mineria.png" alt="Servicios de minería en perforación de pozos chihuahua">
              <h4>SERVICIOS PARA LA MINERÍA</h4>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>
    <div class="jumbotron bg-black">
      <div class="row">
        <div class="container">
          <h2><strong>CLIENTES</strong></h2>
        </div>
      </div>
    </div>
    <div class="jumbotron bg-green">
      <div class="row">
        <div class="container">
          <div class="col-lg-2 col-md-2 col-sm-2">
            <img src="<?php bloginfo('template_url')?>/img/clientes/1.png" class="img-responsive" alt="pan american silver">
            <h4>PAN AMERICAN SILVER</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <img src="<?php bloginfo('template_url')?>/img/clientes/2.png" class="img-responsive" alt="grupo carso">
            <h4>GRUPO <br>CARSO</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <img src="<?php bloginfo('template_url')?>/img/clientes/3.png" class="img-responsive" alt="minera frisco">
            <h4>MINERA <br> FRISCO</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <img src="<?php bloginfo('template_url')?>/img/clientes/4.png" class="img-responsive" alt="proyecto mercedes">
            <h4>PROYECTO <br>  MERCEDES</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <img src="<?php bloginfo('template_url')?>/img/clientes/5.png" class="img-responsive" alt="minera yamada gold">
            <h4>MINERA YAMANA GOLD</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <img src="<?php bloginfo('template_url')?>/img/clientes/6.png" class="img-responsive" alt="santa elena de la laguna">
            <h4>SANTA ELENA <br> DE LA LAGUNA</h4>
          </div>
        </div>
      </div>
    </div>
    <!-- EXPERIENCES  -->
    <?php include(TEMPLATEPATH. '/slideshow.php'); ?>
    <!-- END / EXPERIENCES -->

<?php get_footer();?>