<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Technostroy
 */

?>

	</section>

	<div id="modal" class="modal_write_us">
		<div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>
		<h3>Напишите нам и мы вам перезвоним</h3>
		<?php echo do_shortcode('[contact-form-7 id="65" title="Write_us"]') ?>
	</div>

	<div id="modal_success" class="modal_success">
		<div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>
		<h3>Спасибо! Скоро мы с вами свяжемся.</h3>
	</div>

	<footer id="contacts" class="contacts content-block">
		<div class="container">
			<div class="row">
				<div class="header-block">
					<h3>
						Напишите нам
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="write_us col-lg-6 col-md-12">
					<?php echo do_shortcode('[contact-form-7 id="65" title="Write_us"]') ?>
					<div class="social">
						<a href="<?php echo CFS()->get('vk_link'); ?>" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
						<a href="<?php echo CFS()->get('inst_link'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="tel:<?php echo CFS()->get('phone'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
						<a href="mailto:<?php echo CFS()->get('email'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</div>
				</div>
				<div id="map" class="map-block col-lg-6 col-md-12">
					<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A41be435d30aaa6af0fb36980b4dc7ecb0036180d0a0ab2c821603d0d092e0728&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
				</div>
			</div>
			<div class="row last_block">
				<span>&copy;2021</span>
				<a href="#">Политика конфиденциальности</a>
				<a href="#" title="Филимоненков Юрий" style="text-align: right; padding-top: 15px;">Сделано разработчиком</a>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
