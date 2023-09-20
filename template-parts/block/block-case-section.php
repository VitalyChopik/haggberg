<?php

/**
 * Block Name: case-section
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if( have_rows('case__section') ): ?>
  <?php while( have_rows('case__section') ): the_row();?>
    <div class="case__section">
      <div class="case__container">
        <?php
        if(get_sub_field('show_title')){
          ?>
          <div class="page__title case__title">
            <?php the_sub_field('title');?>
          </div>
          <?php
        }
        ?>
        <?php
        $postIN = get_sub_field('selected_portfolio');
        $custom_case = get_sub_field('custom_case_btn');
        $case_title_tag = get_sub_field('case_title_tag');
        ?>
        <?php		
          global $post;
          $query = new WP_Query( [
            'post_type' => ['post','page', 'service'],
            'posts_per_page' => -1,
            'orderby' => 'post__in',
            'order' => 'ASC',
            'post__in' => $postIN
          ] );

          if ( $query->have_posts() || $custom_case) {
            ?>
            <div class="case__block">
              <?php
              if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post();
                  echo get_template_part( 'template-parts/case', '', ['title-tag'=>$case_title_tag]); 
                }
              }
              if($custom_case){
                if( have_rows('custom_case') ): 
                  while( have_rows('custom_case') ): the_row();
                    echo get_template_part( 'template-parts/case', '', ['button'=>$custom_case,'title-tag'=>$case_title_tag]); 
                  endwhile; 
                endif; 
              }
              ?>
            </div>
            <?php
          }
          wp_reset_postdata(); // Сбрасываем $post
        ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
