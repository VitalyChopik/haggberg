<?php
/*
Template Name: About
Template Post Type: page
*/
get_header();
?>
<div class="about__section">
  <div class="about__container">
    <h1 class="page__title about__title"><?php the_title();?></h1>
  </div>
</div>
<?php echo get_template_part( 'template-parts/content', 'cta', ['class'=>'about__cta']); ?>
<div class="about__section page__content">
  <div class="about__container">
    <p>Lorem ipsum dolor sit amet consectetur. Sed velit arcu amet nam convallis amet. Quis eu ridiculus egestas
      integer eget leo. Tellus id tristique dui nunc condimentum egestas nullam. Imperdiet adipiscing a arcu nunc
      hac diam eu lacus. In risus ipsum dui lorem maecenas mattis at. Nec arcu netus ornare nibh. Lorem ipsum
      dolor sit amet consectetur. Sed velit arcu amet nam convallis amet. Quis eu ridiculus egestas integer eget
      leo. Tellus id tristique dui nunc condimentum egestas nullam. Imperdiet adipiscing a arcu nunc hac diam eu
      lacus. In risus ipsum dui lorem maecenas mattis at. Nec arcu netus ornare nibh. Lorem ipsum dolor sit amet
      consectetur. Sed velit arcu amet nam convallis amet. Quis eu ridiculus egestas integer eget leo. Tellus id
      tristique dui nunc condimentum egestas nullam. Imperdiet adipiscing a arcu nunc hac diam eu lacus. In risus
      ipsum dui lorem maecenas mattis at. Nec arcu netus ornare nibh. Lorem ipsum dolor sit amet consectetur. Sed
      velit arcu amet nam convallis amet. Quis eu ridiculus egestas integer eget leo. Tellus id tristique dui nunc
      condimentum egestas nullam. Imperdiet adipiscing a arcu nunc hac diam eu lacus. In risus ipsum dui lorem
      maecenas mattis at. Nec arcu netus ornare nibh.</p>
    <h2>Professional service</h2>
    <p>Lorem ipsum dolor sit amet consectetur. Sed velit arcu amet nam convallis amet. Quis eu ridiculus egestas
      integer eget leo. Tellus id tristique dui nunc condimentum egestas nullam. Imperdiet adipiscing a arcu nunc
      hac diam eu lacus. In risus ipsum dui lorem maecenas mattis at. Nec arcu netus ornare nibh. Lorem ipsum
      dolor sit amet consectetur.</p>
    <h2>Project development</h2>
    <p>Sed velit arcu amet nam convallis amet. Quis eu ridiculus egestas integer eget leo. Tellus id tristique dui
      nunc condimentum egestas nullam. Imperdiet adipiscing a arcu nunc hac diam eu lacus. In risus ipsum dui
      lorem maecenas mattis at. Nec arcu netus ornare nibh. Lorem ipsum dolor sit amet consectetur. Sed velit arcu
      amet nam convallis amet. Quis eu ridiculus egestas integer eget leo. Tellus id tristique dui nunc
      condimentum egestas nullam. Imperdiet adipiscing a arcu nunc hac diam eu lacus. In risus ipsum dui lorem
      maecenas mattis at. Nec arcu netus ornare nibh.</p>
  </div>
</div>

<?php get_footer();?>