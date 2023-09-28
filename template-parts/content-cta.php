<?php if( have_rows('cta_section') ): ?>
  <?php while( have_rows('cta_section') ): the_row(); ?>
  <div class="<?php echo $args['class']; ?> cta__section">
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
