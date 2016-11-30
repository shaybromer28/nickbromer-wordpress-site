<?php get_header (); ?>

<div class="sidebar">
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
</div>
