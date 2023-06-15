<?php get_header();?>
  <div class="single__section">
    <div class="single__container">
      <h1 class="page__title single__title"><?php the_title()?></h1>
      <?php the_post_thumbnail('full', ['class' => "single__thumbnail"])?>
      <div class="page__content single__content">
        <?php the_content();?>
      </div>
    </div>
  </div>
<?php get_footer();?>