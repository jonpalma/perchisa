<div class="jumbotron bg-black">
      <div class="row">
        <div class="container experience">
          <hr>
          <h2><strong>EXPERIENCIA</strong></h2>
          <hr style="width:300px;">
          <div id="myCarousel2" style="height:250px;" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php 
                    $loop = new WP_Query(array( 'post_type' => 'testimonial','p' => $id, 'order' => 'ASC', 'showposts' => '11'));
                    $i = 0;
                    if($loop->have_posts()):
                    while($loop->have_posts()) : $loop->the_post();
                    if($i == 0) { ?>
                        <li data-target="#myCarousel2" data-slide-to="<?php echo $i;?>" class="active"></li>
               <?php
                    }else { ?>
                        <li data-target="#myCarousel2" data-slide-to="<?php echo $i;?>"></li>
               <?php
                    }
                    $i++;
                    endwhile;
                    else: ?>
                    <p><?php _e( 'Oh God Why?' ); ?></p>
                    <?php endif;
                ?>
            </ol>
              <!-- Wrapper for slides -->
            <div class="carousel-inner" >
              <?php 
                $j = 0;
                if($loop->have_posts()):
                while($loop->have_posts()) : $loop->the_post();
                if($use_excerpt){
                     $testimonial['content'] = get_the_excerpt();
                } else {				
                     $testimonial['content'] = get_the_content();
                }
                
                if($j == 0) { ?>
                    <div class="item active" style="height:250px; width:800px;">
             <?php
                }else { ?>
                    <div class="item" style="height:250px; width:800px;">
             <?php
                } ?>
                <div class="carousel-caption" style="width:800px;">
                  <p> <?php echo $testimonial['content']; ?></p>
                </div>
            </div>
            <?php
                $j++;
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
            </div>

            
      
          </div>
          
        </div>
      </div>
    </div>
</div>