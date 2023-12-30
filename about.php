<?php
/*
Template Name: About
Template Post Type: page
*/
get_header();
?>

<div class="about__section page__content">
  <div class="about__container">
  <h1 class="page__title about__title"><?php the_title();?></h1>
    <?php the_content();?>
  </div>
</div>

<?php get_footer();?>