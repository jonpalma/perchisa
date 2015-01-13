<?php
/*
Template Name: Nosotros
*/
        get_header(); 
?>
     <div class="jumbotron-2">
      <div class="row">
        <div class="banner">
          <img src="<?php bloginfo('template_url')?>/img/banner/empresa.jpg" class="img-responsive" alt="">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="icon-b"><img src="<?php bloginfo('template_url')?>/img/icon-b.png" class="img-responsive" alt=""></div>
               <h2 style="text-align:center;"><strong><?php the_title(); ?></strong></h2>
              <hr>
              <div class="col-lg-4 col-md-4 col-ms-4"><br><img src="<?php bloginfo('template_url')?>/img/empresa.jpg" class="img-circle"  alt="Empresa PERCHISA Perforaciones en Chihuahua SA de CV"></div>
              <div class="col-lg-8 col-md-8 col-ms-8">
                   <?php 
                         if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                         endwhile; else: ?>
                        <h1>No se encontraron articulos</h1>
                   <?php 
                        endif;
                  ?>
              </div>
            </div>
          </div>
      </div>
      <hr>
    </div>
    <div class="jumbotron bg-black">
      <div class="row">
        <div class="container">
          <h2><strong>GALERÍA</strong></h2>
        </div>
      </div>
    </div>
    <div class="jumbotron bg-gray">
      <div class="row">
          <?php echo do_shortcode('[Best_Wordpress_Gallery id="1" gal_title="historia"]'); ?>
      </div>
    </div>

    <!-- EXPERIENCES  -->
    <?php include(TEMPLATEPATH. '/slideshow.php'); ?>
    <!-- END / EXPERIENCES -->
    <?php get_footer(); ?>