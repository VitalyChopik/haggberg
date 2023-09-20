<?php
  $custom_case = $args['button'];
  $case_title_tag = $args['title-tag'];
 if(!$custom_case){
  ?>
  <article class="case__box">
    <a href="<?php the_permalink()?>" class="case__box-permalink">
      <div class="case__box-bg">
        <?php the_post_thumbnail('full', ['class' => "case__box-image"])?>
      </div>
      <div class="case__box-text">
        <<?php echo $case_title_tag;?>><?php the_title();?></<?php echo $case_title_tag;?>>
        <?php if (has_excerpt()) : ?>
          <span><?php echo get_the_excerpt(); ?></span>
        <?php endif; ?>
      </div>
    </a>
  </article>
  <?php
 }else {
  $link = get_sub_field('link');
  if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
  <?php endif;?>
  <article class="case__box">
    <a <?php if( $link ): ?> href="<?php echo esc_url( $link_url ); ?>"<?php endif;?> class="case__box-permalink" target="<?php echo esc_attr( $link_target ); ?>">
      <div class="case__box-bg">
        <?php $image = get_sub_field('image');
        echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'case__box-image']);?>
      </div>
      <div class="case__box-text">
        <<?php echo $case_title_tag;?>><?php the_sub_field('title_case');?></<?php echo $case_title_tag;?>>
        <?php
          if(get_sub_field('description')){
            ?><span><?php the_sub_field('description');?></span><?php
          }
        ?>
      </div>
    </a>
  </article>
 <?php
 }
?>