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
			<div class="row justify-content-between">
				<div class="col-12 col-md-3 mr-3">
					<img src="<?php echo get_template_directory_uri().'/assets/images/logo.svg';?>" alt="" class="img-fluid mw-25">
					<dl>
					<dd class="text-white my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</dd>
				</dl>
				</div>
				<div class="col-12 col-md-4">
					<h4 class="widget-title">Sevicios</h4>
					<dl>
						<dt>Instalación</dt>
						<dt>Mantención E Informes</dt>
						<dt>Bombas de agua</dt>
						<dt>Instalación</dt>
						<dt>Mantención E Informes</dt>
						<dt>Bombas de agua</dt>
					</dl>
				</div>
				<div class="col-4 col-md-4">
					<h4 class="widget-title">Contacto</h4>
					<dl>
						<dt>Teléfono : +569123456</dt>
						
						<dt>Email : contacto@arkus.cl</dt>
						
						<dt>Dirección : Alameda #1234</dt>
						
					</dl>
				</div>
				
			</div>
			<hr>
			<div class="row justify-content-center text-center">
				<div class="col-12">
				Copyright © Arkus 2018 All Right Reserved
				</div>
			</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
