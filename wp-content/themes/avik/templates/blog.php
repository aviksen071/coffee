<?php


//  Template Name: Blog



get_header(); ?>



 <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Our Blog</h1>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  
                <?php
                     $args = array(
                        'post_type' => 'offers',
                        // 'posts_per_page' => -1, //Display all posts
                        'posts_per_page' => 2, //Display only 2 posts
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                     );

                     $the_query = new WP_Query($args);
                     if ($the_query->have_posts()):
                        while ($the_query->have_posts()):
                           $the_query->the_post();
                     ?>

                           
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="<?php echo get_template_directory_uri(  );   ?>/images/blog-img1.png"></div>
                        <h4 class="date_text"><?php echo get_the_date('d M') ?></h4>
                        <h4 class="prep_text"><?php echo get_the_title() ?></h4>
                        <p class="lorem_text"><?php echo get_the_excerpt();  ?></p>
                     </div>
                     <div class="read_btn"><a href="<?php echo get_the_permalink(); ?>">Read More</a></div>
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


<?php   get_footer(); ?>