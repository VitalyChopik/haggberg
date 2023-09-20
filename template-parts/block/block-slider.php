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
<?php if( have_rows('reviews__slider') ): ?>
  <?php if(!is_single()){ ?><div class="page__content reviews__slider__container"><?php } ?>
  <?php while( have_rows('reviews__slider') ): the_row();?>
    <div class="reviews__slider">
      <div class="reviews__wrapper swiper-wrapper">
        <?php if( have_rows('reviews_slider') ): ?>
          <?php $count=0; while( have_rows('reviews_slider') ): the_row(); $count++?>
          <div class="reviews__slide swiper-slide">
            <div class="reviews__slide-img">
              <?php 
              $image = get_sub_field('image');
              echo wp_get_attachment_image( $image, 'full'); ?>
            </div>
            <div class="reviews__slide-text">
              <h3 class="page__title reviews__slide-title"><?php the_sub_field('title');?></h3>
              <span class="reviews__slide-review"><?php the_sub_field('review');?></span>
              <div class="reviews__slide-rating">
                <?php 
                $score = get_sub_field('score');
                for ($i = 1; $i <= 5; $i++) {
                  if($i <= $score){
                    ?>
                    <span class="reviews__slide-star">
                      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5088 9.11459C24.354 8.66098 23.9448 8.34057 23.4672 8.30337L16.6258 7.75975L13.6653 1.20633C13.4721 0.775521 13.0437 0.499512 12.572 0.499512C12.1004 0.499512 11.672 0.775521 11.4788 1.20513L8.51831 7.75975L1.67689 8.30337C1.20768 8.34057 0.803262 8.64898 0.643657 9.09179C0.484051 9.53461 0.596855 10.0302 0.934066 10.359L5.98983 15.2876L4.20177 23.0302C4.09137 23.5091 4.28458 24.0071 4.68899 24.2867C4.8954 24.4283 5.133 24.5003 5.37181 24.5003C5.60342 24.5003 5.83623 24.4331 6.03783 24.2987L12.572 19.9425L19.1063 24.2987C19.5239 24.5771 20.0723 24.5663 20.4803 24.2699C20.8859 23.9735 21.0647 23.4539 20.9267 22.9714L18.7318 15.2912L24.1752 10.3926C24.5316 10.071 24.6624 9.56941 24.5088 9.11459Z" fill="#F0E493" />
                      </svg>
                    </span>
                    <?php
                  } else {
                    ?>
                    <span class="reviews__slide-star">
                      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.5088 9.11459C24.354 8.66098 23.9448 8.34057 23.4672 8.30337L16.6258 7.75975L13.6653 1.20633C13.4721 0.775521 13.0437 0.499512 12.572 0.499512C12.1004 0.499512 11.672 0.775521 11.4788 1.20513L8.51831 7.75975L1.67689 8.30337C1.20768 8.34057 0.803262 8.64898 0.643657 9.09179C0.484051 9.53461 0.596855 10.0302 0.934066 10.359L5.98983 15.2876L4.20177 23.0302C4.09137 23.5091 4.28458 24.0071 4.68899 24.2867C4.8954 24.4283 5.133 24.5003 5.37181 24.5003C5.60342 24.5003 5.83623 24.4331 6.03783 24.2987L12.572 19.9425L19.1063 24.2987C19.5239 24.5771 20.0723 24.5663 20.4803 24.2699C20.8859 23.9735 21.0647 23.4539 20.9267 22.9714L18.7318 15.2912L24.1752 10.3926C24.5316 10.071 24.6624 9.56941 24.5088 9.11459Z" fill="#E2E2E2" />
                      </svg>
                    </span>
                    <?php
                  }
                }
                ?>
              </div>
              <span class="reviews__slide-name"><?php the_sub_field('name');?></span>
            </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <?php if( $count > 1){
        ?>
        <div class="reviews__slider-arrow swiper-button-prev"></div>
        <div class="reviews__slider-arrow swiper-button-next"></div>
        <?php
      }?>
    </div>
  <?php endwhile; ?>
  <?php if(!is_single()){ ?></div><?php } ?>
<?php endif; ?>
