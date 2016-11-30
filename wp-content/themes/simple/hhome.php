<?php get_header (); ?>
<?php get_template_part ('heading'); ?>
<?php

$args = array (
  'menu' => 'main',
  'menu_class' => 'site-menu',
  'container' => false,
  'theme-locations' => 'primary_menu'
);

wp_nav_menu ($args);
?>

<div class="page-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2 class="content-header"><?php the_title (); ?></h2>
<div class="content-meat"><?php echo strip_tags(get_the_excerpt ()); ?></div>
<a href="<?php the_permalink(); ?>">Read More</a>
<?php endwhile; endif; ?>
</div>


<?php get_footer (); ?>
