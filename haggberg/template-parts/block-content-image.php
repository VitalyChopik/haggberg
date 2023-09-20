<?php

/**
 * Block Name: content image
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<div class="block__img">
<?php if( have_rows('content__image') ): ?>
  <?php while( have_rows('content__image') ): the_row();?>
  <?php 
          $image = get_sub_field('image');
          echo wp_get_attachment_image( $image, 'full'); ?>
  <?php endwhile; ?>
<?php endif; ?>
</div>