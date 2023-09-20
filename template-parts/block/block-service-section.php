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
<?php if( have_rows('service__section') ): ?>
  <?php while( have_rows('service__section') ): the_row();?>
    <div class="service__section">
      <div class="service__container">
        <h1 class="page__title service__title"><?php the_sub_field('title');?></h1>
        <div class="service__block">
          <div class="service__tab-navigation">
            <ul class="service__tab-list">
              <?php 
                global $post;
                $query = new WP_Query( [
                  'post_type' => 'service',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                ] );

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
                wp_reset_postdata(); // Сбрасываем $post
              ?>
              
            </ul>
          </div>
          <div class="service__tab-contents">
              <?php 
                global $post;
                $query = new WP_Query( [
                  'post_type' => 'service',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                ] );

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
                      <?php the_content();?>
                    </div>
                  </div>
                  <?php
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
