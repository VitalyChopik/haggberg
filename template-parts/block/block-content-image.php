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
<?php if( have_rows('block__img') ): ?>
  <?php if(!is_single()){ ?><div class="page__content block__img__container"><?php } ?>
  <?php while( have_rows('block__img') ): the_row();?>
    <div class="block__img">
      <?php if( have_rows('content__image') ): ?>
        <?php while( have_rows('content__image') ): the_row();?>
        <?php 
                $image = get_sub_field('image');
                echo wp_get_attachment_image( $image, 'full'); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  <?php endwhile; ?>
  <?php if(!is_single()){ ?></div><?php } ?>
<?php endif; ?>
