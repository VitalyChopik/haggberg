<?php $projectNumber = $args['count'];
  $custom_case = $args['button'];
  $case_title_tag = $args['title-tag'];
  if(!$custom_case){
    ?>
    
    <article class="project__post">
      <div class="project__post-text">
        <<?php echo $case_title_tag;?> class="project__post-title"><?php if($projectNumber<10) { ?>0<?php echo $projectNumber; }else { echo $projectNumber; } ?>. <?php the_title();?></<?php echo $case_title_tag;?>>
      </div>
      <a href="<?php the_permalink();?>" class="project__post-image">
        <?php the_post_thumbnail('full', ['class' => "project__post-thumbnails"]);?>
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
  }
  ?>
