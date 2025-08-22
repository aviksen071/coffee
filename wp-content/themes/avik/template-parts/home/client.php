<div class="client_section layout_padding">
   <div class="container">
      <div id="custom_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">

            <?php
            if (have_rows('testimonials')):
               $i = 0;
               while (have_rows('testimonials')):
                  ++$i;
                  the_row();
            ?>
                  <div class="carousel-item <?= $i > 1 ? '' : 'active' ?>">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">What syas customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="<?php echo get_sub_field('client_dp');  ?>"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="moark_text"><?php echo get_sub_field('cliengt_name');  ?></h3>
                              <p class="client_text"><?php echo get_sub_field('client_review') ?></p>
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
         <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left"></i>
         </a>
         <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
         </a>
      </div>
   </div>
</div>