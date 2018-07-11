<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer">


  <div class="container">

		<div class="Social flex-row">
				<!-- Social media -->
				<div class="footer-social flex1">
				<a href="https://www.instagram.com/"><img class="pic-social" src="<?php echo get_template_directory_uri(); ?>/images/global-index-instagram-icon.svg" alt=""></a></div>
				<div class="footer-social flex1">
				<a href="https://www.twitter.com/"><img class="pic-social" src="<?php echo get_template_directory_uri(); ?>/images/global-index-twitter-icon.svg" alt=""></a></div>
				<div class="footer-social flex1">
				<a href="https://www.facebook.com/"><img class="pic-social" src="<?php echo get_template_directory_uri(); ?>/images/global-index-facebook-icon.svg" alt=""></a></div>
				<div class="footer-social flex1">
				<a href="https://www.youtube.com/"><img class="pic-social" src="<?php echo get_template_directory_uri(); ?>/images/global-index-youtube-icon.svg" alt=""></a>
				</div>
    </div>

		<div>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img id="pic-logo" src="<?php echo get_template_directory_uri(); ?>/images/global-index-logo-horizontal.png" alt="Global Index">
				</a>
		</div>

		<div>
				<h4>&copy; <?php the_time('Y') ?>All rights reserved. Global Index</h4>
		</div>

	</div>



</footer>

<?php wp_footer(); ?>

</body>
</html>
