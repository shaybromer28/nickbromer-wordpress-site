<?php get_header (); ?>
<table>
<tr>
<td class="site-info">
<?php get_template_part ('heading'); ?>
<br>
<?php

/*$args = array (
  'menu' => 'main',
  'menu_class' => 'site-menu',
  'container' => false,
  'theme-locations' => 'primary_menu'
);

wp_nav_menu ($args);*/
?>
</td>
<div class="page-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2 class="content-header"><?php the_title (); ?></h2>
<div class="content-meat"><?php the_content (); ?></div>
<?php endwhile; endif; ?>
</div>
</td>
</tr>
</table>

<?php get_footer (); ?>
