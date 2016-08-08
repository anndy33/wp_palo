<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
			
				<div class="site-info">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<i class="fa fa-search" aria-hidden="true"><?php get_search_form(); ?></i>	
					<div class="copyright">
					        © <?php echo date('Y'); ?> <?php bloginfo( 'sitename' ); ?>. <?php _e('All Rights Reserved', 'thachpham'); ?>. <?php _e('Designed & Developed by <b>PixelBuddha Team</b>', 'thachpham'); ?>
					</div>
					<div class="social-ft">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-icon' ) ); ?>
					</div>
				
				</div><!-- .site-info -->
			
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
