<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arkus
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer site-footer" style="">
		<div class="container">
			<div class="row">
				<div class="col-4">col 1</div>
				<div class="col-4">col 2</div>
				<div class="col-4">col 3</div>
			</div>
			<div class="row">
				<div class="col-12">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'arkus' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'arkus' ), 'WordPress' );
				?>
				</a>
				<span class="sep"> | </span>
					<?php echo __('Theme Ultrabootstrap by','ultrabootstrap'); ?> <a href="https://phantomthemes.com"><?php echo __('Phantom Themes','ultrabootstrap'); ?></a>
				</div>
			</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
