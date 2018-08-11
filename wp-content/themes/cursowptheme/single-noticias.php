<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- CONTENIDO -->
<div class="container">
	<h2><?php echo get_the_title(); ?></h2>
	<h3 class="text-right" style="margin-top: -40px;">
		<a class="btn btn-danger" href="<?php echo get_bloginfo('url'); ?>/noticias">&laquo; Listado noticias</a>
	</h3>
	<hr>
	<p><img src="<?php echo imageFeatured($post->ID,'full'); //tamaños son: thumbnail, medium, large, full ?>" class="img-responsive" style="width: 100%"></p>
	<p><span class="label label-success">Categoria: <?php echo get_taxonomy_data('name', 'tipo_noticias'); ?></span></p>
	<p><?php echo get_the_content(); ?></p>
</div>
<!-- CONTENIDO -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>