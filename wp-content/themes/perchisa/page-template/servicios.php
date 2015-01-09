<?php 
/*
Template Name: Servicios
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
              <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        $current_id = get_the_ID();
              ?>
               <h2 style="text-align:center; text-transform:uppercase;"><strong><?php echo get_post_meta($post->ID, 'servicio', true); ?></strong></h2>
              <hr>
              <div class="col-lg-3">
               <?php 
                    $query = new WP_Query( array( 'post_type' => 'page', 'meta_key' => '_wp_page_template', 'meta_value' => 'page-template/servicios.php', 'order' => 'asc' ) );

                if ( $query->have_posts() ) while ( $query->have_posts() ) : $query->the_post(); ?>
                      <?php if( $current_id == get_the_ID() ) { ?>
                       <div class="servicios"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><h4><b class="caret-2"></b> <?php the_title(); ?></h4></a></div>
                      <?php }else { ?>
                       <div class="servicios"><a href="<?php the_permalink(); ?>"><h4><b class="caret-2"></b> <?php the_title(); ?></h4></a></div> 
              <?php 
                    }
                    endwhile;
                    wp_reset_postdata();
              ?>
              </div>
              <div class="col-lg-9">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php echo get_post_meta($post->ID, 'titulillo', true); ?></a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in ">
                      <div class="panel-body">
                        <div class="col-lg-3">
                          <?php if (has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); }?>
                        </div>
                        <div class="col-lg-9">
                         <?php 
                                the_content();
                            endwhile; else: 
                         ?>
                            <h1>No se encontraron articulos</h1>
                         <?php 
                                endif;
                                wp_reset_postdata();
                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
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