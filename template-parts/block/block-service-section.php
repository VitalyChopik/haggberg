<?php

/**
 * Block Name: service-section
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php 
if( have_rows('service__section') ): ?>
  <?php while( have_rows('service__section') ): the_row();?>
    <div class="service__section">
      <div class="service__container">
        <div class="page__title service__title"><?php the_sub_field('title'); ?></div>
        <div class="service__block">
          <div class="service__tab-navigation">
            <ul class="service__tab-list">
              
            <?php
            
              $postIN = get_sub_field('selected_service');
              $custom_service = get_sub_field('custom_service_btn');
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
                if ( $query->have_posts() || $custom_service) {
                  if ( $query->have_posts() ) {
                    $i=1;
                    while ( $query->have_posts() ) {
                      $query->the_post();
                      $i++;
                      
                      ?>
                      <li class="service__tab-item" data-tab-item="<?php $itemSlug = get_post(); echo $itemSlug->post_name;?>"><a href="#<?php $itemSlug = get_post(); echo $itemSlug->post_name;?>"><?php the_title();?></a></li>
                      <?php
                    }
                  }
                  
                  if($custom_service){
                   
                    if( have_rows('custom_service') ): 
                      while( have_rows('custom_service') ): the_row();
                      $service_id = get_sub_field('id');
                      $title = get_sub_field('service_title');
                      ?>
                        <li class="service__tab-item" data-tab-item="<?php echo $service_id?>"><a href="#<?php echo $service_id?>"><?php echo $title;?></a></li>
                      <?php
                      endwhile; 
                    endif; 
                  }
                }
                wp_reset_postdata(); // Сбрасываем $post
              ?>
              
            </ul>
          </div>
          <div class="service__tab-contents">
              <?php 
                global $post;
                $query = new WP_Query( [
                  'post_type' => ['post','page', 'service'],
                  'posts_per_page' => -1,
                  'orderby' => 'post__in',
                  'order' => 'ASC',
                  'post__in' => $postIN
                ] );
                if ( $query->have_posts() || $custom_service) {
                  if ( $query->have_posts() ) {
                    $i=1;
                    while ( $query->have_posts() ) {
                      $query->the_post();
                      $i++;
                    ?>
                    <div class="service__tab-content" data-tab-content="<?php $itemSlug = get_post(); echo $itemSlug->post_name;?>">
                      <div class="service__tab-image">
                        <?php the_post_thumbnail('full')?>
                      </div>
                      <div class="service__tab-text">
                        <?php
                        $post_id = get_the_ID();
                        if(get_field('excerpt_text', $post_id)){
                          the_field('excerpt_text', $post_id); 
                        }else {
                          the_content();
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="service__permalink">Läs mer</a>
                      </div>
                    </div>
                    <?php
                    }
                  }
                  if($custom_service){
                    if( have_rows('custom_service') ): 
                      $i=1;
                      while( have_rows('custom_service') ): the_row();
                      $i++;
                      $service_id = get_sub_field('id');
                      $image=get_sub_field('image');
                      $content = get_sub_field('content');
                      ?>
                      <div class="service__tab-content" data-tab-content="<?php echo $service_id;?>">
                        <div class="service__tab-image">
                          <?php echo wp_get_attachment_image( $image, 'full');?>
                        </div>
                        <div class="service__tab-text">
                          <?php echo $content;?>
                        </div>
                      </div>
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
    </div>
  <?php endwhile; ?>
<?php endif; ?>
