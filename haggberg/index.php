<?php get_header();?>
  <div class="case__section">
    <div class="case__container">
      <h1 class="page__title case__title"><?php the_title();?></h1>
      <?php
      $postIN = get_field('selected_portfolio');
      ?>
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type' => 'post',
          'posts_per_page' => 4,
          'orderby' => 'post__in',
          'order' => 'ASC',
          'post__in' => $postIN
        ] );

        if ( $query->have_posts() ) {
          ?>
          <div class="case__block">
            <?php
            while ( $query->have_posts() ) {
              $query->the_post();
              echo get_template_part( 'template-parts/case'); 
            }
            ?>
          </div>
          <?php
        } 
        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
  <?php if( have_rows('service_block') ): ?>
    <?php while( have_rows('service_block') ): the_row(); ?>
    <div class="services__section">
      <div class="services__container">
        <div class="services__block-text">
          <h2 class="page__title services__title"><?php the_sub_field('title')?></h2>
          <div class="services__text"><?php the_sub_field('text')?></div>
        </div>
        <div class="services__block">
        <?php		
          global $post;
          $query = new WP_Query( [
            'post_type' => 'service',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
          ] );

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo get_template_part( 'template-parts/service-box'); 
            }
          } 
          wp_reset_postdata(); // Сбрасываем $post
        ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php echo get_template_part( 'template-parts/content', 'cta', ['class'=>'']); ?>
<?php get_footer();?>