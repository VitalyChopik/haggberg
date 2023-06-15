<?php
/*
Template Name: About
Template Post Type: page
*/
get_header();
?>
<div class="about__section">
  <div class="about__container">
    <h1 class="page__title about__title"><?php the_title();?></h1>
  </div>
</div>
<?php echo get_template_part( 'template-parts/content', 'cta', ['class'=>'about__cta']); ?>
<div class="about__section page__content">
  <div class="about__container">
    <?php the_content();?>
  </div>
</div>

<?php get_footer();?>