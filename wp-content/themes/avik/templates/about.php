<?php


//  Template Name: About  



get_header(); ?>

  


     <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6"> 
                     <div class="about_taital_box">
                        <h1 class="about_taital"><?php   echo get_field('about_head');  ?></h1>
                        <h1 class="about_taital_1"><?php echo get_field('about_sub_head');  ?></h1>
                        <p class=" about_text"><?php echo get_field('about_text'); ?></p>
                        <div class="readmore_btn"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="image_iman"><img src="<?php echo get_field( 'about_banner' )['url']; ?>" class="about_img"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>





<?php  get_footer(); ?>



