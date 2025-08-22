  <div class="coffee_section layout_padding">
     <div class="container">
        <div class="row">
           <div class="col-md-12">
              <h1 class="coffee_taital"><?php echo get_field('offer_header'); ?></h1>
           </div>
        </div>
     </div>
     <div class="coffee_section_2">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">


              <div class="carousel-item active">
                 <div class="container-fluid">
                    <div class="row">
                       <?php
                        $featured_posts = get_field('offer_list');
                        if ($featured_posts):
                           foreach ($featured_posts as $post):
                              setup_postdata($post);
                        ?>
                             <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                                <div class="coffee_box">
                                   <h3 class="types_text"><?php echo get_the_title(); ?></h3>
                                   <p class="looking_text"><?php echo get_the_excerpt(); ?></p>
                                   <div class="read_bt"><a href="<?php echo get_the_permalink(); ?>" target="_blank">Read More</a></div>
                                </div>
                             </div>
                          <?php endforeach;
                           wp_reset_postdata(); ?>
                       <?php endif; ?>
                    </div>
                 </div>
              </div>

           </div>
           <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
              <i class="fa fa-arrow-left"></i>
           </a>
           <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
              <i class="fa fa-arrow-right"></i>
           </a>
        </div>
     </div>
  </div>