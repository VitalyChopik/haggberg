<?php

/**
 * Block Name: service-block
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php if( have_rows('service_block') ): ?>
  <?php while( have_rows('service_block') ): the_row(); ?>
  <div class="services__section">
    <div class="services__container">
      <div class="services__block-text">
        <h2 class="page__title services__title"><?php the_sub_field('title')?></h2>
        <div class="services__text"><?php the_sub_field('text')?></div>
      </div>
      <div class="services__block">
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type' => 'service',
          'posts_per_page' => 4,
          'orderby' => 'date',
          'order' => 'DESC',
        ] );

        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo get_template_part( 'template-parts/service-box'); 
          }
        } 
        wp_reset_postdata(); // Сбрасываем $post
      ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>