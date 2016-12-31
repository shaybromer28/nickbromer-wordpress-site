<?php get_template_part ('sidebar'); ?>
<div class="page-content">
<div class="inner-content">
<h2 class="content-header"><?php the_title (); ?></h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content-meat"><?php the_content (); ?></div>
<?php endwhile; endif; ?>
</div>
</div>
<?php get_footer ();  ?>
