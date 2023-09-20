<?php
/*
Template Name: Service
Template Post Type: page
*/
get_header();
?>
<div class="service__section">
  <div class="service__container">
    <h1 class="page__title service__title"><?php the_title();?></h1>
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
<div class="case__section">
  <div class="case__container">
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
<?php get_footer();?>