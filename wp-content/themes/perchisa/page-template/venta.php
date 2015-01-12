<?php
/*
Template Name: Venta
*/
        get_header(); 
?>
<div class="jumbotron-2">
      <div class="row">
        <div class="banner">
          <img src="<?php bloginfo('template_url')?>/img/banner/maquinaria-venta.jpg" class="img-responsive" alt="">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="icon-b"><img src="<?php bloginfo('template_url')?>/img/icon-b.png" class="img-responsive" alt=""></div>
               <h2 style="text-align:center; text-transform:uppercase;"><strong>MAQUINARIA EN VENTA</strong></h2>
              <hr>
              <?php 
                        $loop_sale = new WP_Query(array( 'post_type' => 'machinery', 'order' => 'ASC'));
                         if($loop_sale->have_posts()):
                                while($loop_sale->have_posts()) : $loop_sale->the_post();
              ?>
              <div class="col-lg-6">
                  <div class="col-lg-6 col-md-6 col-sm-3"><br>
                      <?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs', array('class' => 'img-responsive img-circle') ); } ?>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-3">
                    <h4><?php the_title(); ?></h4>
                    <table class="table">
                      <tr>
                        <td>Marca:</td>
                        <td><?php echo CFS()->get('marca'); ?></td>
                      </tr>
                      <tr>
                        <td>Modelo:</td>
                        <td><?php echo CFS()->get('modelo'); ?></td>
                      </tr>
                      <tr>
                        <td>Descripción:</td>
                        <td>
                          <?php the_content(); ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Precio:</td>
                        <td>$ <?php echo CFS()->get('precio'); ?></td>
                      </tr>
                    </table>
                  </div>
              </div>
              <?php 
                    endwhile;
                    else: ?>
                    <h1><?php _e( 'No hay maquinaria en venta' ); ?></h1>
                    <?php endif; ?>             
            </div>
          </div>
      </div>
      <hr>
    </div>
<?php
        get_footer();
?>