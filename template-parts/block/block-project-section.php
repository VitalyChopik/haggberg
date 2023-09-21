<?php

/**
 * Block Name: project-section
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if( have_rows('project__section') ): ?>
  <?php while( have_rows('project__section') ): the_row();?>
    <div class="project__section">
      <div class="project__container">
        <div class="page__title project__title"><?php the_sub_field('title');?></div>
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
              $projectNumber = 0;
              ?>
              <div class="project__block">
                <?php
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) {
                    $projectNumber++;
                    $query->the_post();?>
                      <article class="project__post">
                        <div class="project__post-text">
                          <<?php echo $case_title_tag;?> class="project__post-title"><?php if($projectNumber<10) { ?>0<?php echo $projectNumber; }else { echo $projectNumber; } ?>. <?php the_title();?></<?php echo $case_title_tag;?>>
                        </div>
                        <a href="<?php the_permalink();?>" class="project__post-image">
                          <?php the_post_thumbnail('full', ['class' => "project__post-thumbnails"]);?>
                        </a>
                      </article>
                    <?php
                  }
                }
                if($custom_case){
                  if( have_rows('custom_case') ): 
                    while( have_rows('custom_case') ): the_row();
                      $projectNumber++;
                      $link = get_sub_field('link');
                      if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                      <?php endif;?>
                      <article class="project__post">
                        <div class="project__post-text">
                          <<?php echo $case_title_tag;?> class="project__post-title"><?php if($projectNumber<10) { ?>0<?php echo $projectNumber; }else { echo $projectNumber; } ?>. <?php the_sub_field('title_case');?></<?php echo $case_title_tag;?>>
                        </div>
                        <a <?php if( $link ): ?> href="<?php echo esc_url( $link_url ); ?>"<?php endif;?> class="project__post-image" target="<?php echo esc_attr( $link_target ); ?>">
                          <?php $image = get_sub_field('image');
                          echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'project__post-thumbnails']);?>
                        </a>
                      </article>
                      <?php
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
