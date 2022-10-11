<?php
/**
 * Contains the header.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- ======= Header ======= -->
        <header id="masthead" class="site-header" role="banner">

			<div class="header-main">

            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

                if ( has_custom_logo() ) {
                    printf(
                        '<a href="%1$s" class="logo d-flex align-items-center scrollto me-auto me-lg-0"><img src="%2$s"/></a>',
                        esc_url( home_url() ),
                        esc_url( $logo[0] )
                    );
                } else {
                    echo bloginfo( 'name' );
                }

            ?>

				<div id="header-images">
					<!-- <div id="top-left-img">
						<a href="./index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="550" height="142" src="./wp-content/uploads/2015/08/mainbayview_logo_550x142.png" class="custom-logo" alt="Bayview Senior Services"></a>
					</div> -->
	
					<div class="site-logo">
						<a href="./index.html" class="custom-logo-link" rel="home" aria-current="page"><img width="550" height="142" src="./wp-content/uploads/2015/08/mainbayview_logo_550x142.png" class="custom-logo" alt="Bayview Senior Services"></a>
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
					
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
                        <?php
                            if ( has_nav_menu( 'primary' ) ) :
                                wp_nav_menu( [
                                    'theme_location' => 'primary',
                                    'container'      => false,
                                    'menu_class'     => '',
                                    'menu_id'        => '',
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
						<!-- <ul id="primary-menu" class="menu">
							<li id="menu-item-3415" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3415"><a href="./index2.html">Blog</a></li>
							<li id="menu-item-3444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3444"><a href="./index2.html">Events</a></li>
							<li id="menu-item-3403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3403"><a href="./index2.html">Donate</a></li>
							<li id="menu-item-3400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3400"><a href="./index2.html">Volunteer</a></li>
							<li id="menu-item-3390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3390">
								<a href="./index2.html">About Us<svg class="icon icon-expand" aria-hidden="true" role="img"> <use xlink:href="./wp-content/themes/harrison/assets/icons/genericons-neue.svg#expand"></use> </svg></a>
							</li>
							<li id="menu-item-3387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3387">
								<a href="./index2.html">Programs<svg class="icon icon-expand" aria-hidden="true" role="img"> <use xlink:href="./wp-content/themes/harrison/assets/icons/genericons-neue.svg#expand"></use> </svg></a>
							</li> -->
							<!-- <li id="menu-item-3406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3406">
								<a href="./housing-counseling/index.html">Housing<svg class="icon icon-expand" aria-hidden="true" role="img"> <use xlink:href="./wp-content/themes/harrison/assets/icons/genericons-neue.svg#expand"></use> </svg></a>
							</li> -->
							<!-- <li id="menu-item-3416" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3416"><a href="./art-for-aid/index.html">Art for Aid</a></li> -->
							<!-- <li id="menu-item-3402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3402"><a href="./index2.html">Watch Now</a></li> -->
						<!-- </ul> -->
					</nav>
                    <?php
                        if ( has_nav_menu( 'header_action' ) ) :
                            wp_nav_menu( [
                                'theme_location' => 'header_action',
                                'container'      => false,
                                'menu_class'     => 'header_menu_action',
                                'menu_id'        => '',
                                'depth'          => 3
                            ] );
                        else :
                            printf(
                                '<a class="btn-getstarted scrollto" href="%1$s">%2$s</a>',
                                esc_url( admin_url( '/nav-menus.php' ) ),
                                esc_html__( 'Action Menu', 'herobiz' )
                            );
                        endif;
                    ?>
				</div>
			</div>
		</header>
       

