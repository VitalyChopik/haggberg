</main>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer__brand"><a href="<?php echo get_home_url(); ?>" class="logo footer__logo"><span
              class="logo-brand footer__logo-brand"><?php the_field('brand', 'option')?></span> <span
              class="logo-tagline footer__logo-tagline"><?php the_field('brand_text', 'option')?></span></a>
          <div class="footer__brand-text"><?php the_field('footer_text', 'option')?></div>
        </div>
        <div class="footer__menu">
          <?php
            wp_nav_menu( [
              'theme_location' => 'footer_menu',
              'menu'            => 'footer_menu',
              'menu_class'      => 'menu__list',
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => new MainMenu(),
            ] );
            ?>
        </div>
        <div class="box-about footer__about">
          <div class="box-contact"><span class="title"><?php the_field('phone_title', 'option');?></span> <a href="tel:<?php the_field('phone', 'option');?>"
              class="link"><?php the_field('phone', 'option');?></a></div>
          <div class="box-contact"><span class="title"><?php the_field('email_title', 'option');?></span> <a href="mailto:<?php the_field('email', 'option');?>"
              class="link"><?php the_field('email', 'option');?></a></div>
              <?php if( have_rows('social__block', 'option') ): ?>
                <div class="box-social">
                <?php while( have_rows('social__block', 'option') ): the_row(); ?>
                  <a href="<?php the_sub_field('social__link')?>" class="social__link">
                    <?php 
                    $image = get_sub_field('image');
                    echo wp_get_attachment_image( $image, 'full', false, ['class'=> 'social__img']);?>
                  </a>
                <?php endwhile; ?>
                </div>
              <?php endif; ?>
        </div>
        <div class="footer__copy">Copyright <span class="year">© <?php echo date('Y')?></span></div>
      </div>
    </footer>
  </div>
  <?php wp_footer();?>
</body>

</html>