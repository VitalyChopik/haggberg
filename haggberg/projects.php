<?php
/*
Template Name: Projects
Template Post Type: page
*/
get_header();
?>
<div class="project__section">
  <div class="project__container">
    <h1 class="page__title project__title"><?php the_title();?></h1>
    <div class="project__block">
      <article class="project__post">
        <div class="project__post-text">
          <h2 class="project__post-title">01. Modern Kitchen</h2>
          <div class="project__post-data"><span class="project__post-area">12 sq.m.</span>
            <div class="project__post-location"><img src="images/icons/location.svg" alt=""
                class="project__post-icon"> <span class="project__post-city">STOCKHOLM</span></div>
          </div>
        </div><a href="single.html" class="project__post-image">
          <picture>
            <source srcset="images/project/project-1.webp" type="image/webp"><img
              src="images/project/project-1.png" alt="" class="project__post-thumbnails">
          </picture>
        </a>
      </article>
    </div>
  </div>
</div>
<?php get_footer();?>