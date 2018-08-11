<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- CONTENIDO -->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8">
			<h2 style="color:red"><?php echo get_the_title(); ?></h2>
			<hr>
			<p><?php echo get_the_content(); ?></p>
		</div>
		
		<div class="col-xs-12 col-sm-4">
			<h2 style="color:red">Publicidad</h2>
			<hr>
			<p>Publicite aqui</p>
		</div>
	</div>
	
</div>
<!-- CONTENIDO -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>