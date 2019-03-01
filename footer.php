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
					<dd class="text-white my-4">Mantenimiento de Equipos de Bombeo, Bombas centrifugas de Incendio (NFPA-25), Bombas de Procesos y de alta capacidad.</dd>
				</dl>
				</div>
				<div class="col-12 col-md-4">
					<h4 class="widget-title">Sevicios</h4>
					<dl>
						<dt>- Mantenimiento Preventivo y correctivo</dt>
						<dt>- Evaluación de equipos</dt>
						<dt>- Sustitución de equipos</dt>
						<dt>- Instalaciones / Puesta en marcha</dt>
						<dt>- Contrato de mantenimiento con servicio de emergencia 24/7</dt>
						<dt>- Asesorías técnicas</dt>
					</dl>
				</div>
				<div class="col-4 col-md-4">
					<h4 class="widget-title">Contacto</h4>
					<dl>
						<dt>Teléfono : <a href="tel:+56 9 9489 2516">+56 9 9489 2516</a></dt>
						
						<dt>Email : <a href="mailto:arkus@arkus.cl">arkus@arkus.cl</a></dt>
						<div class="promo-icon mr-3">
                        <a href="https://www.linkedin.com/company/arkus-spa/" target="_blank" class="mt-3 d-block">
                        	<img src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/linkedin_circle-48.png" alt="">
                        </a>
                    </div>
						
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
