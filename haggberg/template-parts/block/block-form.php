<?php

/**
 * Block Name: form
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if( have_rows('contact__form') ): ?>
  <?php while( have_rows('contact__form') ): the_row();?>
    <div class="contact__section form">
      <div class="contact__container">
        <h1 class="page__title contact__form-title"><?php the_field('title_form');?></h1>
        <?php
        $form_id = get_field('form_id');
        if ($form_id) {
            // Выведите форму с использованием полученного ID формы.
            echo do_shortcode('[contact-form-7 id="' . esc_attr($form_id) . '" title="Contact form 1" html_class="contact__form-block"]');
        }
        ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
