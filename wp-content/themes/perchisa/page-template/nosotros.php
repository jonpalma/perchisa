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
        <div class="container history">
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#1"><img src="img/galeria/1.jpg" class="img-responsive img-circle" alt="">
            <h4>1964</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#2"><img src="img/galeria/2.jpg" class="img-responsive img-circle" alt="">
            <h4>1966</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#3"><img src="img/galeria/3.jpg" class="img-responsive img-circle" alt="">
            <h4>1967</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#4"><img src="img/galeria/4.jpg" class="img-responsive img-circle" alt="">
            <h4>1980</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#5"><img src="img/galeria/5.jpg" class="img-responsive img-circle" alt="">
            <h4>1983</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#6"><img src="img/galeria/6.jpg" class="img-responsive img-circle" alt="">
            <h4>1985</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container history">
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#7"><img src="img/galeria/7.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>1986</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#8"><img src="img/galeria/8.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>1989</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#9"><img src="img/galeria/9.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>1994</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#10"><img src="img/galeria/10.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>1995</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#11"><img src="img/galeria/11.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>1997</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#12"><img src="img/galeria/12.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>1999</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container history">
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#13"><img src="img/galeria/13.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>2002</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#14"><img src="img/galeria/14.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>2003</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#15"><img src="img/galeria/15.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>2006</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#16"><img src="img/galeria/16.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>2007</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#17"><img src="img/galeria/17.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>2009</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <a href="#" data-toggle="modal" data-target="#18"><img src="img/galeria/18.jpg" class="img-responsive img-circle" alt=""></a>
            <h4>2010</h4>
          </div>
        </div>
      </div>
        <!-- Modal 1 al 6 -->
        <div class="modal fade" id="1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/1-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/2-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/3-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/4-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/5-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/6-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
    <!-- Modal 7 al 12 -->
        <div class="modal fade" id="7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/7-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/8-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/9-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/10-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/11-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/12-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
    <!-- Modal 13 al 18 -->
        <div class="modal fade" id="13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/13-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/14-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/15-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/16-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/17-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria/18-1.jpg" class="img-responsive" alt="">
            </div>
          </div>
        </div>
    </div>

    <!-- EXPERIENCES  -->
    <?php include(TEMPLATEPATH. '/slideshow.php'); ?>
    <!-- END / EXPERIENCES -->
    <?php get_footer(); ?>