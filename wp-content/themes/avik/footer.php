<div class="footer_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="footer_social_icon">
               <ul>
                  <?php
                  if (have_rows('site_icons', 'option')):
                     while (have_rows('site_icons', 'option')): the_row();
                        $icon = get_sub_field('social_logo');
                        $link = get_sub_field('social_url');
                  ?>
                        <li><a href="<?php echo $link; ?>" target="_blank"><?php echo $icon; ?></a></li>
                  <?php
                     endwhile;
                  endif;
                  ?>
               </ul>
            </div>
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#">
                        <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01 1234567890</span>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">demo@gmail.com</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="form-group">
               <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
               <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a>
               Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
   </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.0.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugin.js"></script>
<!-- sidebar -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</body>

</html>