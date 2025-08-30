<?php


// Template Name: Coffee

get_header(); ?>


<div class="coffee_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="coffee_taital"><?php echo get_field('coffee_page_header');  ?></h1>
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
                     $args = array(
                        'post_type' => 'offers',
                        // 'posts_per_page' => -1, //Display all posts
                        'posts_per_page' => 4, //Display only 2 posts
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                     );

                     $the_query = new WP_Query($args);
                     if ($the_query->have_posts()):
                        while ($the_query->have_posts()):
                           $the_query->the_post();
                     ?>


                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="<?php echo get_the_post_thumbnail_url();  ?>"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text"><?php echo get_the_title() ?></h3>
                                 <p class="looking_text"><?php echo get_the_excerpt();  ?></p>
                                 <div class="read_bt"><a href="<?php echo get_the_permalink(); ?>">Read More</a></div>
                              </div>
                           </div>

                     <?php
                        endwhile;
                     else:
                        echo '<p>No posts found</p>';
                     endif;
                     wp_reset_postdata();
                     ?>
                  </div>
                  <div class="pagination-sec">
                     <?php
                     $big = 999999999; // need an unlikely integer
                     echo paginate_links(array(
                        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $the_query->max_num_pages
                     ));

                     wp_reset_postdata();
                     ?>
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


<?php get_footer(); ?>