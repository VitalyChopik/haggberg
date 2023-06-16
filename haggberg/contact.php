<?php
/*
Template Name: Kontakt
Template Post Type: page
*/
get_header();
?>
  <div class="contact__section">
    <div class="contact__container">
      <h1 class="page__title contact__title"><?php the_title();?></h1>
      <div class="contact__info">
        <div class="contact__info-box">
          <div class="contact__info-title">Our phone number</div><a href="tel:<?php the_field('phone', 'option');?>"
            class="contact__info-link"><?php the_field('phone', 'option');?></a>
        </div>
        <div class="contact__info-box">
          <div class="contact__info-title">Our e-mail</div><a href="mailto:<?php the_field('email', 'option');?>"
            class="contact__info-link"><?php the_field('email', 'option');?></a>
        </div>
      </div>
    </div>
  </div>
  <?php echo get_template_part( 'template-parts/content', 'cta', ['class'=>'contact__cta']); ?>
  <div class="contact__section form">
    <div class="contact__container">
      <h1 class="page__title contact__form-title"><?php the_field('title_form');?></h1>
    <?php echo do_shortcode('[contact-form-7 id="153" title="Contact form 1" html_class="contact__form-block"]');?>
    </div>
  </div>
<?php get_footer();?>