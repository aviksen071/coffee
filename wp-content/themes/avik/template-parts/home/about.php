 <div class="about_section layout_padding">
    <div class="container">
       <div class="about_section_2">
          <div class="row">
             <div class="col-md-6">
                <div class="about_taital_box">
                   <h1 class="about_taital"><?php echo get_field('about_head'); ?></h1>
                   <h1 class="about_taital_1"><?php echo get_field('about_sub_text'); ?></h1>
                   <p class=" about_text"><?php echo get_field('about_description'); ?></p>
                   <div class="readmore_btn"><a href="<?php echo get_field('about_link')['url'] ?>" target="<?php echo get_field('about_link')['target'] ?>"><?php echo get_field('about_link')['title'] ?></a></div>
                </div>
             </div>
             <div class="col-md-6">
                <div class="image_iman"><img src="<?php echo get_field('about_thumbnail')['url'];  ?>" class="about_img"></div>
             </div>
          </div>
       </div>
    </div>
 </div>