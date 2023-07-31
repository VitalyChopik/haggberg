<article class="case__box">
  <a href="<?php the_permalink()?>" class="case__box-permalink">
    <div class="case__box-bg">
      <?php the_post_thumbnail('full', ['class' => "case__box-image"])?>
    </div>
    <div class="case__box-text">
      <h2><?php the_title();?></h2>
      <span><?php
      if(get_the_excerpt()){
        echo get_the_excerpt();
      }
      ?></span>
    </div>
  </a>
</article>