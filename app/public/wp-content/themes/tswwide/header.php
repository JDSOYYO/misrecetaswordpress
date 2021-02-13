<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="//gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content">
<?php esc_attr_e( 'Skip to content', 'tswwide' ); ?></a>
<div id="wrapper">
    <header class="header">
            <h1 class="blog-title"><a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?> </a>
            </h1>
                <figure class="logo">   
                    <a href="<?php echo esc_url( home_url() ); ?>" 
                    title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>  &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" 
                    height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>" /></a>
                </figure>
            <h2 class="site-description"><?php echo get_bloginfo( 'description' ); ?>
            </h2>
                <nav>
                <?php wp_nav_menu ( array( 'theme_location' => 'header-menu' ) ); ?>
                </nav>                    
    </header> <!-- ends header section -->