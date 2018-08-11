<?php get_header(); ?>

<!--Primera Seccion-->
<div class="container" id="promociones">
	<div class="row centrado">
		<div class="col-lg-6 col-lg-offset-3">
			<h1>Promociones</h1>


		</div>

	</div>


	<div class="row centrado">
		<div class="col-md-4 col-sm-4">
			<img class="img-circle" src="<?php echo get_bloginfo('template_url'); ?>/img/stelia_600x600.png" width="140px">
			<h4>Stelia</h4>
			<p>Saborea el mejor café NESCAFÉ® Dolce Gusto® gracias a la nueva STELIA, con tecnología táctil y un diseño rompedor inspirado en una gota de café.</p>

		</div>

		<div class="col-md-4 col-sm-4">
			<img class="img-circle" src="<?php echo get_bloginfo('template_url'); ?>/img/unbranded-genio_2-red-metal-dolce-gusto-view-1_1_1.jpg" width="140px">
			<h4>Genio 2 Titanio - Automática</h4>
			<p>Pequeña pero innovadora, Con un sistema automático que te permite personalizar tu café ¡a tu gusto!</p>

		</div>

		<div class="col-md-4 col-sm-4">
			<img class="img-circle" src="<?php echo get_bloginfo('template_url'); ?>/img/unbranded-jovia-white-nescafe-dolce-gusto-view-1.jpg" width="140px">
			<h4>Jovia</h4>
			<p>La nueva JOVIA de NESCAFÉ® Dolce Gusto® con su diseño poco convencional y su calidad superior, te trae el arte moderno a tu cocina.</p>

		</div>
   </div>
 </div>
   <!--/Primera Seccion--> 

   <hr class="container">
   <!--Segunda Seccion-->
   <div class="container" id="descuentos">
		<div class="row centrado">
			<div class="col-lg-6 col-lg-offset-3">
				<h1>Descuentos</h1>

			</div>
		</div>
	   <div class="row centrado">
			<div class="col-lg-12">
				<!--Carousel-->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src="<?php echo get_bloginfo('template_url'); ?>/slide/banner_home_promo_iconic_05_03.jpg">
						  <div class="carousel-caption">

						  </div>
						</div>
						<div class="item">
						  <img src="<?php echo get_bloginfo('template_url'); ?>/slide/banner_home_promo_iconic_06_03.jpg">
						  <div class="carousel-caption">

						  </div>
						</div>

						<div class="item">
						   <img src="<?php echo get_bloginfo('template_url'); ?>/slide/banner_home_promo_iconic_07_03.jpg">
						  <div class="carousel-caption">

						  </div>
						</div>

					 </div>





				<!--/Carousel-->

			</div>
	  </div>
  </div>
</div>

<!--/Segunda Seccion-->
<!--Tercera Seccion-->
<hr class="container">
<div class="container" id="productos">
   <div class="row centrado">
			 <div class="col-lg-6 col-lg-offset-3">
				  <h1>Productos</h1>

			</div>
	</div>

	<div class="row centrado">
		<div class="col-md-6">
			<img class="img-circle" src="<?php echo get_bloginfo('template_url'); ?>/img/stelia_600x600.png" width="200px">
			  <h2>Dscubre la sección de máquinas Nescafé Dolce Gusto.</h2>
				<button type="submit" class="btn btn-warning btn-lg">Máquinas</button>

		</div>
		<div class="col-md-6">
			<img class="img-circle" src="<?php echo get_bloginfo('template_url'); ?>/img/dolce-gusto-caja.jpg" width="200px">
			  <h2>No te pierdas cada sabor único Nescafé.</h2>
				<button type="submit" class="btn btn-warning btn-lg">Capsulas</button>


		</div>

   </div>

   <div class="row centrado">
	 <div class="col-lg-12 col-sm-6">
			<iframe width="100%" height="600" src="https://www.youtube.com/embed/UmGQlkKpfq0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

		</div>

   </div>
</div>    
<!--/Tercera Seccion-->

<?php get_footer(); ?>