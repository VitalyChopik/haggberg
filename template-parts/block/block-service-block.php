<?php

/**
 * Block Name: service-block
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<?php if( have_rows('service_block') ): ?>
  <?php while( have_rows('service_block') ): the_row(); ?>
  <div class="services__section">
    <div class="services__container">
      <div class="services__block-text">
        <div class="page__title services__title"><?php the_sub_field('title')?></div>
      </div>
      <div class="services__block">
      <?php
        $postIN = get_sub_field('selected_service');
        $custom_service = get_sub_field('custom_service_btn');
        $service_title_tag = get_sub_field('service_title_tag');
        ?>
      <?php		
        global $post;
        $query = new WP_Query( [
          'post_type' => ['post','page', 'service'],
          'posts_per_page' => -1,
          'orderby' => 'post__in',
          'order' => 'DESC',
          'post__in' => $postIN
        ] );
        if ( $query->have_posts() || $custom_service) {

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo get_template_part( 'template-parts/service-box'); 
            }
          } 
          if($custom_service){
            if( have_rows('custom_service') ): 
              while( have_rows('custom_service') ): the_row();
              $link = get_sub_field('link');
              if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
              <?php endif;?>
              <a <?php if( $link ): ?> href="<?php echo esc_url( $link_url ); ?>"<?php endif;?> class="services__box" target="<?php echo esc_attr( $link_target ); ?>">
                <div class="services__box-bg">
                  <?php $image = get_sub_field('image');
                  echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'services__img']);?>
                </div>
                <<?php echo $service_title_tag;?> class="services__box-name"><?php the_sub_field('service_title');?></<?php echo $service_title_tag;?>><span class="services__box-more"><?php echo  esc_html( $link_title ); ?></span>
              </a>
              <?php
              endwhile; 
            endif; 
            
          }
        }

        wp_reset_postdata(); // Сбрасываем $post
      ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>