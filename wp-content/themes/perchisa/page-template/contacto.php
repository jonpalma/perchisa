<?php
/*
Template Name: Contacto
*/
    get_header(); 
?>
<div class="jumbotron-2">
      <div class="row">
        <div class="banner">
          <img src="<?php bloginfo('template_url')?>/img/banner/contacto.jpg" class="img-responsive" alt="">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="icon-b"><img src="<?php bloginfo('template_url')?>/img/icon-b.png" class="img-responsive" alt=""></div>
              <span style="text-align:center;"><h2><strong><?php the_title(); ?></strong></h2></span>
              <hr>
              <div class="col-lg-4">
               <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                        endwhile;  
                     endif;
                    wp_reset_postdata();
               ?>
              </div>
              <div class="col-lg-8">
              <div class="form-horizontal">
                <?php echo do_shortcode('[contact-form-7 id="40" title="Contacto"]'); ?>
              </div>
              </div>
            </div>
          </div>
      </div>
      <hr>
    </div>

<!-- EXPERIENCES  -->
        <?php include(TEMPLATEPATH. '/slideshow.php'); ?>
<!-- END / EXPERIENCES -->
<?php get_footer(); ?>