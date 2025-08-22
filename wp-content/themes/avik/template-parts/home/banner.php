<div class="banner_section layout_padding">
   <div class="container">
      <div id="banner_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">

            <?php
            if (have_rows('banner_slider_text')):
               while (have_rows('banner_slider_text')): the_row();
                  $active_class = (get_row_index() === 1) ? 'active' : '';
            ?>
                  <div class="carousel-item <?php echo $active_class ?>">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital"><?php echo get_sub_field('main_text') ?></h1>
                              <p class="banner_text"><?php echo get_sub_field('sub_text') ?></p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="<?php echo home_url() . get_sub_field('about_button')['url'] ?>" target="<?php echo get_sub_field('about_button')['target'] ?>"><?php echo get_sub_field('about_button')['title'] ?></a></div>
                                 <div class="callnow_bt"><a href="<?php echo get_sub_field('call_button')['url'] ?>" target="<?php echo get_sub_field('call_button')['target'] ?>"><?php echo get_sub_field('call_button')['title'] ?></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            <?php
               endwhile;
               wp_reset_postdata();
            endif;
            ?>
         </div>
         <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
         </a>
         <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
         </a>
      </div>
   </div>
</div>
</div>