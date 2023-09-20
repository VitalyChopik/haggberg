<?php

/**
 * Block Name: contact section
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if( have_rows('contact__section') ): ?>
  <?php while( have_rows('contact__section') ): the_row();?>
    <div class="contact__section">
      <div class="contact__container">
        <h1 class="page__title contact__title"><?php the_sub_field('title');?></h1>
        <div class="contact__info">
          <div class="contact__info-box">
            <div class="contact__info-title"><?= __('Telefonnummer')?></div><a href="tel:<?php the_field('phone', 'option');?>"
              class="contact__info-link"><?php the_field('phone', 'option');?></a>
          </div>
          <div class="contact__info-box">
            <div class="contact__info-title"><?= __('E-postadress')?></div><a href="mailto:<?php the_field('email', 'option');?>"
              class="contact__info-link"><?php the_field('email', 'option');?></a>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
