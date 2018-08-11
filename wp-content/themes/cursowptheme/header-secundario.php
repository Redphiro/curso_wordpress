<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo get_theme_mod('header-titulo'); ?></title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/estilos.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url'); ?>/img/favicon.png">
	
	<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	?>
</head>
<body id="page-top">
	
	<!--Barra de Navegación-->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    	<div class="container">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                
                
                </button>
                
                <a href="<?php echo get_home_url(); ?>" class="navbar-brand scroll"><strong><?php echo get_theme_mod('header-titulo'); ?></strong></a>
            </div>
          </div>
       </nav>   
	<!--/Fin Barra de Navegación-->
    
    <!--Header-->
    <header style="background-image: url('<?php echo get_theme_mod('header-banner'); ?>'); min-height:130px;">
    	<div class="container">
        	<div class="row">
                <div class="col-sm-4">
                	<a href="http://www.dolce-gusto.cl" target="_blank"><img width="200" class="img-responsive center-block" src="<?php echo get_bloginfo('template_url'); ?>/img/logo-dolce-gusto.png" style="margin-bottom: 50px"></a>
                </div>
            </div>
    	</div>
    </header>
    <!--/Header-->
