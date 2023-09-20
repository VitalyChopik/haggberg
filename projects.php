<?php
/*
Template Name: Projects
Template Post Type: page
*/
get_header();
?>
<div class="project__section">
  <div class="project__container">
    <h1 class="page__title project__title"><?php the_title();?></h1>
    <?php		
        global $post;
        $query = new WP_Query( [
          'post_type' => 'post',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'ASC'
        ] );

        if ( $query->have_posts() ) {
          $projectNumber = 0;
          ?>
          <div class="project__block">
            <?php
            while ( $query->have_posts() ) {
              $projectNumber++;
              $query->the_post();
              echo get_template_part( 'template-parts/project-case'); 
            }
            ?>
          </div>
          <?php
        } 
        wp_reset_postdata(); // Сбрасываем $post
      ?>
  </div>
</div>
<?php get_footer();?>