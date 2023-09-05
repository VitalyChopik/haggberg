<?php

/**
 * Block Name: about
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<div class="about__section">
  <div class="about__container">
    <h1 class="page__title about__title"><?php the_title();?></h1>
  </div>
</div>
<?php echo get_template_part( 'template-parts/content', 'cta', ['class'=>'about__cta']); ?>
<div class="about__section page__content">
  <div class="about__container">
    <?php the_content();?>
  </div>
</div>