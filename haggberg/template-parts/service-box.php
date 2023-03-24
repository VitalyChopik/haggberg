<a href="<?php echo home_url('/our-services');?>/#<?php $itemSlug = get_post(); echo $itemSlug->post_name;?>" class="services__box">
  <div class="services__box-bg">
    <?php the_post_thumbnail('full', ['class' => "services__img"])?>
  </div>
  <h3 class="services__box-name"><?php the_title();?></h3><span class="services__box-more">More</span>
</a>