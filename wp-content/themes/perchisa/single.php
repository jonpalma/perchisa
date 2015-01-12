<?php get_header(); ?>
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
               <h2 style="text-align:center; text-transform:uppercase;"><strong><?php single_term_title(); ?></strong></h2>
              <hr>
              <div class="col-lg-3">
                <?php include(TEMPLATEPATH. '/sidebar.php'); ?>
              </div>
              <div class="col-lg-9">
               <?php 
                        $i = 0;
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
               ?>
                <div class="panel-group" class="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a style="text-transform:none;" data-toggle="collapse" data-parent=".accordion" href="#collapse<?php echo $i; ?>">
                          Ver
                        </a>
                      </h4>
                    </div>
                    <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <div class="col-lg-12">
                          <h4><?php the_title(); ?></h4>
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php 
                        $i++;
                        endwhile; else: 
                ?>
                    <h1>No se encontraron articulos</h1>
                <?php endif; ?>
              </div>
            </div>
          </div>
      </div>
      <hr>
    </div>

<?php get_footer(); ?>