<div class="page-content">
<?php get_template_part ('sidebar'); ?>


<div class="inner-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2 class="content-header"><?php the_title (); ?></h2>
<div class="content-meat"><?php the_content (); ?></div>
<?php endwhile; endif; ?>
</div>

</div>


<?php get_footer (); ?>
