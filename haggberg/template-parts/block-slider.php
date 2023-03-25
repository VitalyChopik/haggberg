<?php

/**
 * Block Name: slider
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<div class="reviews__slider">
  <div class="reviews__wrapper swiper-wrapper">
    <?php if( have_rows('reviews_slider') ): ?>
      <?php while( have_rows('reviews_slider') ): the_row(); ?>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php if( have_rows('reviews_slider')>1){
    ?>
    <div class="reviews__slider-arrow swiper-button-prev"></div>
    <div class="reviews__slider-arrow swiper-button-next"></div>
    <?php
  }?>
</div>