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
  <?php while( have_rows('cta_section') ): the_row(); 
  $block_class = get_sub_field('block_class');

  if ($block_class === 'none') {
    $class = ''; 
  } else {
      $class = $block_class;
  }
  ?>
  <div class="<?php echo $class; ?> cta__section">
    <div class="cta__container">
      <div class="cta__block">
        <div class="cta__block-bg">
          <?php 
         $image = get_sub_field('image');
          echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'cta__img']);?>
        </div>
        <?php 
        if(get_sub_field('text_btn')){
          ?>
          <?php if( have_rows('big_title') ): ?>
            <div class="cta__big-text">
            <?php while( have_rows('big_title') ): the_row(); ?>
            <span><?php the_sub_field('title');?></span>
            <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <?php
        } else {
          ?>
            <span class="cta__text"><?php the_sub_field('small_text');?></span>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>
