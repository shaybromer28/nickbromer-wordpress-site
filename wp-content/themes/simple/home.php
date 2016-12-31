<div class="page-content">
<?php get_template_part ('sidebar'); ?>

<div class="inner-content">
<h2 class="content-header">Recent Articles</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="post-excerpt">
  <h2 class="post-title"><?php the_title (); ?></h2>
  <?php echo strip_tags(get_the_excerpt ()); ?>
  <a href="<?php the_permalink(); ?>">Read More</a>
</div>
<?php endwhile; endif; ?>
</div>
</div>

<?php get_footer (); ?>
