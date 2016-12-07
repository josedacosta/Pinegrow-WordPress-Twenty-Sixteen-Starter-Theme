<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <!--[if lt IE 10]>
<link rel='stylesheet' id='twentysixteen-ie-css'  href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type='text/css' media='all' />
<![endif]-->
        <!--[if lt IE 9]>
<link rel='stylesheet' id='twentysixteen-ie8-css'  href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie8.css" type='text/css' media='all' />
<![endif]-->
        <!--[if lt IE 8]>
<link rel='stylesheet' id='twentysixteen-ie7-css'  href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie7.css" type='text/css' media='all' />
<![endif]-->
        <!--[if lt IE 9]>
<script type='text/javascript' src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
<![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <div id="page" class="site">
            <div class="site-inner">
                <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
                <header id="masthead" class="site-header" role="banner">
                    <div class="site-header-main">
                    <div class="site-branding">
                            <?php twentysixteen_the_custom_logo(); ?>
                            <?php if ( is_front_page() || is_home() ) : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( get_home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php else : ?>
                                <p class="site-title"><a href="<?php echo esc_url( get_home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php endif; ?> 
                            <?php  $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                            <p class="site-description"><?php echo $description; ?></p>
                        <?php endif; ?>
                        <?php bloginfo( 'description' ); ?>
                        </div>
                        <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
                            <div>
                                <button id="menu-toggle" class="menu-toggle">
                                    <?php _e( 'Menu', 'twentysixteen' ); ?>
                                </button>
                                <div id="site-header-menu" class="site-header-menu">
                                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                                            <?php wp_nav_menu( array(
                                                    'menu_class' => 'primary-menu',
                                                    'menu_id' => 'site-navigation',
                                                    'container' => '',
                                                    'theme_location' => 'primary'
                                            ) ); ?>
                                        </nav>
                                    <?php endif; ?>
                                    <?php if ( has_nav_menu( 'social' ) ) : ?>
                                        <nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
                                            <?php wp_nav_menu( array(
                                                    'menu_class' => 'social-links-menu',
                                                    'menu_id' => 'social-navigation',
                                                    'container' => '',
                                                    'link_before' => '<span class="screen-reader-text">',
                                                    'link_after' => '</span>',
                                                    'depth' => '1',
                                                    'theme_location' => 'social'
                                            ) ); ?>
                                        </nav>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ( get_header_image() ) : ?>
                        <?php
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
                        <div class="header-image">
                            <a href="<?php echo esc_url( get_home_url() ); ?>" rel="home">
                                <img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                </header>
                <div id="content" class="site-content">