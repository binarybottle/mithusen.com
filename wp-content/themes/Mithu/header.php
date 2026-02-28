<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="<?php bloginfo('template_url') ?>/js/background.js"></script>
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.css?ver=2.3.4" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.theme.css?ver=2.3.4" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/venobox.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css?ver=1.1" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/thought-css.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/responsive.css" />
<script>
$(function(){
    $('#download').hide();
});
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116985140-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116985140-1');
</script>




<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<section id="logo">
    <div class="container">
    	 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<a class="navbar-brand" title="Unhome" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            	<span  style="display:none;" class="enter" onclick="window.location='<?php echo esc_url( home_url( '/' ) ); ?>'"> mithu sen
					<img class="hover" src="<?php bloginfo('template_url') ?>/img/Spiral.gif" />
				</span>
            </a>
        </div>	
        <div class="clearfix"></div>	
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<?php 
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container_class' => 'navbar-collapse collapse',
								'menu_class'     => 'nav navbar-nav',
							) );
						?>
					</div>
				</nav> 
    </div>
</section>