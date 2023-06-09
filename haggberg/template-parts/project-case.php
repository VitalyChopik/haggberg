<?php global $projectNumber?>
<article class="project__post">
  <div class="project__post-text">
    <h2 class="project__post-title"><?php if($projectNumber<10) { ?>0<?php echo $projectNumber; }else { echo $projectNumber; } ?>. <?php the_title();?></h2>
    <div class="project__post-data">
      <div class="project__post-location">
        <img src="<?php echo get_template_directory_uri()?>/images/icons/location.svg" alt="" class="project__post-icon">
        <span class="project__post-city"><?php the_field('city')?></span>
      </div>
    </div>
  </div>
  <a href="<?php the_permalink();?>" class="project__post-image">
    <?php the_post_thumbnail('full', ['class' => "project__post-thumbnails"]);?>
  </a>
</article>