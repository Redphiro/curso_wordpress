<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nescafe Dolce Gusto</title>
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
                
                <a href="#page-top" class="navbar-brand scroll"><strong>Nescafe Dolce Gusto</strong></a>
            </div>
            <div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
                	<li><a href="#promociones" class="scroll">Promociones</a></li>
               		<li><a href="#descuentos" class="scroll">Descuentos</a></li>
                    <li><a href="#productos" class="scroll">Productos</a></li>
                    
                </ul>
            </div>
          </div>
       </nav>   
	<!--/Fin Barra de Navegación-->
    
    <!--Header-->
    <header>
    	<div class="container">
        	<div class="row">
            	<div class="col-xs-12 col-sm-5 col-sm-offset-1">
    			<h1>Vive tu placer</h1>
                	<form action="" class="form-inline">
                		<div class="form-group">
                    	<input type="text" class="form-control" id="suscribir" placeholder="Nescafe Dolce Gusto">
                        <button type="submit" class="btn btn-warning btn-lg">Promoción</button>
                      </div>
                	</form>
                </div>
                <div class="col-sm-4 col-sm-offset-2">
                	<a href="http://www.dolce-gusto.cl" target="_blank"><img class="img-responsive center-block" src="<?php echo get_bloginfo('template_url'); ?>/img/logo-dolce-gusto.png"></a>
                </div>
            </div>
    	</div>
    </header>
    <!--/Header-->
