      <footer>
       <div class="footer-black">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 white">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer1')) : endif; ?>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 white">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer2')) : endif; ?>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 white">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer3')) : endif; ?>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 white">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer4')) : endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-black-2 bg-black">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8 white">
                <p>Todos los derechos reservados Perforaciónes de Chihuahua SA de CV 2014 &copy; </p>
              </div>
              <div class="col-lg-4"><p>Diseño: <a href="http://mixen.mx"> www.mixen.mx</a></p></div>
            </div>
          </div>
        </div>
      </footer>
      <?php wp_footer();?>
    <!-- Javascript -->

   <script type="text/javascript">
    $(document).ready(function(){
         $("#myCarousel2").carousel();
    });
    </script>

    <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
    var b=document.getElementsByTagName("script")[0];
    a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0020/7404.js?"+Math.floor(new Date().getTime()/3600000);
    a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
    </script>
  </body>
</html>

