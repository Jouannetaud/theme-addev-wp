<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Addev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
<nav class="navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <a class="navbar-brand" href="#">
                        <img src="wp-content/themes/addev/assets/images/logo/Myaddev.png" alt="" class="img-nav" width="58%" height="100%">
                    </a>
                </div>
                <div class="col-6 block-icon-nav d-flex justify-content-end flex-row">
                    <div class="border-icon-nav flex-row" height="33px">
                        <a href="#"><img src="wp-content/themes/addev/assets/images/logoheader/mail.png" alt="" width="35px" height=" 35px" class="align-text-top"></a>
                        <a href="#"><img src="wp-content/themes/addev/assets/images/logoheader/favoris.png" alt="" width="32px" height="32px" class=" icone-nav align-text-top"></a>
                        <a href="#"><img src="wp-content/themes/addev/assets/images/logoheader/notifications.png" width="32px" height="32px" alt="" class="icone-nav align-text-top"></a>
                        <a href="#"><img src="wp-content/themes/addev/assets/images/logoheader/Francedrapeau.png" width="30px" height="32px" alt="" class="icone-nav align-text-top"></a>
						<a href="#"><img src="wp-content/themes/addev/assets/images/nav.jpg" width="42px" height="42px" alt="" class=" icone-nav align-text-top"></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
	<?php wp_body_open(); ?>
		</header><!-- #masthead -->
	
