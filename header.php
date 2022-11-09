<?php
/**
 * Contains the header.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>Bayview Senior Services</title>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <!-- <body <?php body_class(); ?>> -->
    <body class="home page-template page-template-template-home page-template-template-home-php page page-id-49 custom-background wp-custom-logo wide-theme-layout vertical-header-layout site-title-hidden site-description-hidden comments-hidden"
    <div id="page" class="site">
        <!-- ======= Header ======= -->
        <header id="masthead" class="site-header" role="banner">

			<div class="header-main">

            <!-- <?php
                //$custom_logo_id = get_theme_mod( 'custom_logo' );
                //$logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
                if ( empty( $blog_id ) ) {
                    echo get_current_blog_id();
                } else {
                    echo "false";
                }
                if ( has_custom_logo() ) {
                    printf(
                        '<a href="%1$s" class="logo d-flex align-items-center scrollto me-auto me-lg-0"><img src="%2$s"/></a>',
                        esc_url( home_url() ),
                        esc_url( $logo[0] )
                    );
                } else {
                    echo bloginfo( 'name' );
                }

            ?> -->

				<div id="header-images">
					<!-- <div id="top-left-img">
						<a href="./index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="550" height="142" src="./wp-content/uploads/2015/08/mainbayview_logo_550x142.png" class="custom-logo" alt="Bayview Senior Services"></a>
					</div> -->
	
					<div class="site-logo">
                            <a href="./index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="550" height="142" src=<?php echo get_header_image() ?> class="custom-logo" alt="Bayview Senior Services"/></a>
                    </div>
	
					<!-- <div id="top-right-img">
						<a href="./index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="550" height="142" src="./wp-content/uploads/2015/08/mainbayview_logo_550x142.png" class="custom-logo" alt="Bayview Senior Services"></a>
					</div> -->
				</div>

				
		
				<!-- <div class="site-branding">
					<p class="site-title"><a href="./index.html" rel="home">Bayview Senior Services</a></p>
				</div> -->

				<!-- .site-branding -->
				<!-- <button class="primary-menu-toggle menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<svg class="icon icon-menu" aria-hidden="true" role="img"> <use xlink:href="./wp-content/themes/harrison/assets/icons/genericons-neue.svg#menu"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use xlink:href="./wp-content/themes/harrison/assets/icons/genericons-neue.svg#close"></use> </svg>		<span class="menu-toggle-text">Menu</span>
				</button> -->
	
				<div class="primary-navigation">
                        <?php
                            if ( has_nav_menu( 'primary' ) ) :
                                wp_nav_menu( [
                                    'theme_location' => 'primary',
                                    'container'      => 'nav',
                                    'container_class' => 'main-navigation',
                                    'container_id' => 'site-navigation',
                                    'container_aria_label' => 'Primary Menu',
                                    'menu_class'     => 'menu',
                                    'menu_id'        => 'primary-menu',
                                    'depth'          => 3
                                ] );
                            else :
                                printf(
                                    '<a href="%1$s">%2$s</a>',
                                    esc_url( admin_url( '/nav-menus.php' ) ),
                                    esc_html__( 'Asign a menu', 'herobiz' )
                                );
                            endif;
                        ?>
				</div>
			</div>
		</header>
       

