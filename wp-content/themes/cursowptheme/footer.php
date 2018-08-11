
	<hr class="container">
	<!--Cuarta Seccion-->
	<div class="container">
		<div class="row centrado">
			<p><?php echo get_theme_mod('footer-texto'); ?></p> 
		</div>
	</div>
	<!--/Fin Cuarta Seccion-->
   
    <!--Archivos Js-->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script>
	$(document).ready(function(){
		$(".scroll").click(function(event){		

			//bloqueamos la función del anchor original
			event.preventDefault();
			//dirigimos de manera animada al id del anchor
			$('html,body').animate({
					//le indicamos al scroll vertical que se dirija al objeto con el id
					//guardado en el anchor a su posición top.
				scrollTop:$(this.hash).offset().top
				},1000);

		});


	});
	</script>

	<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
	?>
</body>
</html>