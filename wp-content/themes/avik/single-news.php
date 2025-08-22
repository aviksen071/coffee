<?php get_header(); ?>

</div>
<div class="blog-header">
  <h2><?php echo get_the_title(); ?></h2>
  <p class="blog-meta"><?php echo get_the_date(); ?></p>
</div>

<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Blog Image" class="blog-image">

<div class="blog-content">

  <?php echo wpautop(get_the_content()); ?>

</div>

<?php get_footer(); ?>