<?php

/**
 * Block Name: project-section
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if( have_rows('project__section') ): ?>
  <?php while( have_rows('project__section') ): the_row();?>
    <div class="project__section">
      <div class="project__container">
        <h1 class="page__title project__title"><?php the_sub_field('title');?></h1>
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
  <?php endwhile; ?>
<?php endif; ?>
