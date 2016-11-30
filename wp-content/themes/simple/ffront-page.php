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

<?php
$icon_url = get_site_icon_url ();
 ?>
<div class="home-content">
<img src="<?php /*site_icon_url(); */ ?>" id="profile-image">
</div>

<?php get_footer (); ?>
