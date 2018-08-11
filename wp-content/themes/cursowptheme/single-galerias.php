<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- CONTENIDO -->
<div class="container">
	<h2><?php echo get_the_title(); ?></h2>
	<h3 class="text-right" style="margin-top: -40px;">
		<a class="btn btn-danger" href="<?php echo get_bloginfo('url'); ?>/galerias">&laquo; Listado galerias</a>
	</h3>
	<hr>
	<?php if( get_post_field('galerias_tipo', $post->ID) == 'galerias'): ?>
	
	<!-- GALERIAS -->
	
	<?php 

	$images = get_field('galerias_fotos');

	if( $images ): ?>
		<div class="row">
			<?php foreach( $images as $image ): ?>
				<a href="<?php echo $image['url']; ?>" class="col-xs-3">
					 <img src="<?php echo $image['sizes']['thumbnail']; ?>" class="img-responsive" style="width: 100%">
				</a>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	
	<!-- GALERIAS -->
	
	<?php elseif( get_post_field('galerias_tipo', $post->ID) == 'videos'): ?>
	
	<!-- VIDEOS -->
	
	<?php if( have_rows('galerias_videos') ): ?>

		<div class="row">

		<?php while( have_rows('galerias_videos') ): the_row(); 

			// vars
			$titulo_video = get_sub_field('galerias_titulo_video');
			$url_video = get_sub_field('galerias_url_video');

			?>
			<div class="col-xs-6">
				 <h4><?php echo $titulo_video; ?></h4>
				<iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo getVideoID($url_video); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			

		<?php endwhile; ?>

		</div>

	<?php endif; ?>
	<!-- VIDEOS -->
	
	<?php endif; ?>
	
	
	
</div>
<!-- CONTENIDO -->

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>