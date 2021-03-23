<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
      
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/font-awesome.min.css" />
          <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/animate.css" />
         <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/bootstrap-theme.min.css" />
          <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/bootstrap.min.css" />
           <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/owl.carousel.css" />
            <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/css/owl.theme.css" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2">
                            <a href="/" class="logo"><img src="<?php echo bloginfo('template_directory');?>/images/logo.png" height="80" alt="" title="" /></a>
                        </div>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <nav class="collapse navbar-collapse navbar-right" role="navigation">
                            <?php wp_nav_menu( array( 'menu' => 'Main Menu', 'menu_class' => 'nav navbar-nav' ) ); ?>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </header>
