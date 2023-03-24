<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
<?php wp_head();?>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__container"><a href="<?php echo get_home_url(); ?>" class="logo header__logo"><span
            class="logo-brand header__logo-brand"><?php the_field('brand', 'option');?></span> <span class="logo-tagline header__logo-tagline"><?php the_field('brand_text', 'option');?></span></a>
        <nav class="header__menu menu">
          <?php
            wp_nav_menu( [
              'theme_location' => 'main_menu',
              'menu'            => 'main_menu',
              'menu_class'      => 'menu__list',
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => new MainMenu(),
            ] );
            ?>
          <div class="box-about header__menu-about">
            <div class="box-contact"><span class="title">Our phone number</span> <a href="tel:<?php the_field('phone', 'option');?>"
                class="link"><?php the_field('phone', 'option');?></a></div>
            <div class="box-contact"><span class="title">Our e-mail</span> <a href="mailto:<?php the_field('email', 'option');?>"
                class="link"><?php the_field('email', 'option');?></a></div>
          </div>
        </nav><button class="header__burger icon-menu"><span></span></button>
      </div>
    </header>
    <main class="page">
      <div data-observ></div>