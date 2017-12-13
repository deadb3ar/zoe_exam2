<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zsstarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

	<nav class="social-menu"> 
	<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
    </nav>
		<div class="site-info">
			
			<!-- removed Proudly powered by wordpress and theme name -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
