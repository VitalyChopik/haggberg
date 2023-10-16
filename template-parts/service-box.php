<?php
  $service_title_tag = get_sub_field('service_title_tag');
    ?>
    <a href="<?php echo home_url('/tjanster');?>/#<?php $itemSlug = get_post(); echo $itemSlug->post_name;?>" class="services__box">
      <div class="services__box-bg">
        <?php the_post_thumbnail('full', ['class' => "services__img"])?>
      </div>
      <<?php echo $service_title_tag;?> class="services__box-name"><?php the_title();?></<?php echo $service_title_tag;?>><span class="services__box-more"><?= __('Läs mer')?></span>
    </a>
    <?php
?>

