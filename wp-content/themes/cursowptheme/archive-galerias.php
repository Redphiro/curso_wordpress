<?php get_header(); ?>

<!-- CONTENIDO -->
<div class="container">
	<h2>Listado de galerias</h2>
	<hr>
	
	<div class="row">
	<?php 
		global $paged;
		$my_query_current = $paged ? $paged : 1;
		//Propiedades
		$my_query_args = array('paged' 	=> $my_query_current,
							   'post_type'	=> 'galerias',
							   /*'showposts'	=> 4*/ //No usar cuando es paginada. Se debe hacer en el function para este caso
							  );
		$my_query = new WP_Query($my_query_args);
		while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; 
	?>
	
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		  <img src="<?php echo imageFeatured($post->ID,'medium'); //tamaños son: thumbnail, medium, large, full ?>" class="img-responsive" style="width: 100%">
		  <div class="caption">
			<h3><?php echo get_the_title(); ?></h3>
			<p><a href="<?php echo get_permalink(); ?>" class="btn btn-primary" role="button">Ver</a></p>
		  </div>
		</div>
	  </div>

	<?php 
		endwhile; 
	?>
	</div>
	
	<hr>
	

	<ul class="pagination">
	<?php
        $totalPageLimit = $my_query->query_vars['posts_per_page'];
        $totalPosts = $my_query->found_posts;
        if($totalPosts > $totalPageLimit):
			$botonAnterior = get_pagenum_link(($my_query_current-1 > 0 ? $my_query_current-1 : 1));
			$botonSiguiente = get_pagenum_link(($my_query_current+1 <= $my_query->max_num_pages ? $my_query_current+1 : $my_query->max_num_pages));
				
            echo '<li>
					  <a href="'.$botonAnterior.'" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					  </a>
					</li>';

                    for($numPagina=1;$numPagina<=$my_query->max_num_pages;$numPagina++)
					{
						$paginaActiva = ($numPagina == $my_query_current ? 'active' : '');
						
                    	echo '<li class="'.$paginaActiva.'"><a href="'.get_pagenum_link($numPagina).'">'.$numPagina.'</a></li>';
                    }

            echo '<li>
					  <a href="'.$botonSiguiente.'" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					  </a>
					</li>';
            wp_reset_postdata();
        endif;
     ?>
	</ul>
	
	
</div>
<!-- CONTENIDO -->


<?php get_footer(); ?>