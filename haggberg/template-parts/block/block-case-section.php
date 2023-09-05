<?php

/**
 * Block Name: case-section
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="case__section">
  <div class="case__container">
    <?php
    if(get_field('show_title')){
      ?>
      <h1 class="page__title case__title"><?php the_field('title');?></h1>
      <?php
    }
    ?>
    <?php
    $postIN = get_field('selected_portfolio');
    ?>
    <?php		
      global $post;
      $query = new WP_Query( [
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'post__in',
        'order' => 'ASC',
        'post__in' => $postIN
      ] );

      if ( $query->have_posts() ) {
        ?>
        <div class="case__block">
          <?php
          while ( $query->have_posts() ) {
            $query->the_post();
            echo get_template_part( 'template-parts/case'); 
          }
          ?>
        </div>
        <?php
      } 
      wp_reset_postdata(); // Сбрасываем $post
    ?>
  </div>
</div>