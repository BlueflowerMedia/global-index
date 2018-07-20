<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header">


	  <nav id="site-navigation" class="main-navigation container-navbar">
        <div class="container-navbar flex-row">
    			<!-- navbar left -->
    			<div class="nav-left flex1">
    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    					<img id="pic-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/global-index-logo-vertical.png" alt="Global Index">
    				</a>
    			</div>

					<div class="nav-right flex-column">
            <!-- navbar right top -->
            <div class="nav-right-top flex-row">
              <?php
      					wp_nav_menu( array(
      						'theme_location' => 'primary',
									'container_class' => 'primary-menu',
      					) );
      				?>

              <div class="heading-social flex-row">
                <!-- Social media ----->
                  <a href="https://www.instagram.com/"><img class="pic-social" src="<?php echo get_stylesheet_directory_uri(); ?>/images/global-index-instagram-icon.svg" alt=""></a>
                  <a href="https://www.twitter.com/"><img class="pic-social" src="<?php echo get_stylesheet_directory_uri(); ?>/images/global-index-twitter-icon.svg" alt=""></a>
                  <a href="https://www.facebook.com/"><img class="pic-social" src="<?php echo get_stylesheet_directory_uri(); ?>/images/global-index-facebook-icon.svg" alt=""></a>
                  <a href="https://www.youtube.com/"><img class="pic-social" src="<?php echo get_stylesheet_directory_uri(); ?>/images/global-index-youtube-icon.svg" alt=""></a>
              </div>
              <!-- navbar right top END -->
            </div>

            <?php
    					wp_nav_menu( array(
    						'theme_location' => 'secondary',
								'container_class' => 'secondary-menu flex-row',
    					) );
    				?>
          </div>

					<!-- hamburger menu-->
					<div class="hamburger-container">
						<div class="hamburger" id="hamburger-9">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</div>
					</div>

		    </div>
		</nav>
		<div id="dropdown-menu" class="dropdown">
			<div class="mobile-img">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img id="pic-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/global-index-logo-vertical.png" alt="Global Index">
				</a>
			</div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container_class' => 'mobile-menu',
				) );
			?>
			<h3>Our Products</h3>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'secondary',
					'container_class' => 'mobile-menu',
				) );
			?>

<!-- 			<ul>
	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
	<li><a href="<?php echo get_permalink(get_page_by_path( "about" )); ?>">ABOUT</a></li>
	<li><a href="<?php echo get_permalink(get_page_by_path( "affilliate" )); ?>">AFFILLIATE-INCENTIVES</a></li>
	<li><a href="<?php echo get_permalink(get_page_by_path( "contact" )); ?>">CONTACT</a></li>
</ul> -->
		</div>

	</header>
</body>
