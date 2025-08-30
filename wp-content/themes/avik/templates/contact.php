<?php

//  Template Name: Contact

get_header(); ?>


<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="contact_taital">Get In Touch</h1>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="contact_section_2">
         <div class="row">
            <div class="col-md-12">
               <?php echo do_shortcode('[contact-form-7 id="b6ef009" title="Contact Page Form"]') ?>
            </div>
            <div class="map_main">
               <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<?php get_footer(); ?>