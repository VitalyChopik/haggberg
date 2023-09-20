<?php

/**
 * Block Name: cta
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if( have_rows('cta_section') ): ?>
  <?php while( have_rows('cta_section') ): the_row(); ?>
  <div class="cta__section">
    <div class="cta__container">
      <div class="cta__block">
        <div class="cta__block-bg">
          <?php 
         $image = get_sub_field('image');
          echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'cta__img']);?>
        </div>
        <div class="cta__block-text">
          <?php the_sub_field('text');?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
