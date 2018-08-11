<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- CONTENIDO -->
<div class="container">
	<h2><?php echo get_the_title(); ?> <a href="<?php echo get_bloginfo('url'); ?>/noticias" style="float: right; font-size: 20px">&laquo; Listado noticias</a></h2>
	<hr>
	<p><?php echo get_the_content(); ?></p>
</div>
<!-- CONTENIDO -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>