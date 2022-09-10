<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technostroy
 */

get_header();
?>
		<div class="slider">
			<?php 
				$main_slider = CFS()->get('main_slider');
				foreach ($main_slider as $el) {	
			?>	
						<div class="slider_item" style="background: url('<?= $el["main_slider_img"]?>')">
							<div class="container">
								<div class="row slider_text">
									<h3 class="col-12"><?= $el["main_slider_header"] ?></h3>
									<span class="col-12">
										<?= $el["main_slider_text"] ?>
									</span>
								</div>
							</div>
						</div>
			<?php 
				}
			?>
		</div>
		<div id="about_us" class="about_us content-block">
			<div class="container">
				<div class="row">
					<div class="header-block">
						<h3>
							О компании
						</h3>
						<span>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium perferendis asperiores saepe provident neque quidem sequi quis voluptate, qui dicta iure doloremque culpa distinctio. Cumque saepe placeat vel praesentium enim.
							Aliquid sunt voluptatum quaerat repudiandae eveniet? Quae, pariatur praesentium laboriosam voluptate voluptatibus blanditiis non fugit asperiores neque voluptatem quia consectetur cupiditate dolore culpa earum quibusdam error nihil veniam minima explicabo!
						</span>
					</div>
				</div>
				<div class="row">
					<div class="header-block staff">
						<h3>
							Наша команда
						</h3>
					</div>
					<div class="staff-slider">

						<?php 
							$our_team = CFS()->get('our_team_block');
							foreach ($our_team as $el) {	
						?>	

							<div class="staff-slider_item">
								<div class="staff-slider_item__img">
									<img src="<?= $el["our_team_block_img"] ?>" alt="">
								</div>
								<span class="position"><?= $el["our_team_block_position"] ?></span>
								<span class="FIO"><?= $el["our_team_block_name"] ?></span>
							</div>

						<?php 
							}
						?>

					</div>
				</div>
			</div>
		</div>
		<div class="info-wrapper">
			<div class="container">
				<div class="row info inf-fact-counters">

						<?php 
							$statistick = CFS()->get('statistick_loop');
							foreach ($statistick as $el) {	
						?>	

							<div class="col-lg-3 col-md-6 info_item int-fct-item">
								<div class="number-count fct-count" ><span><?= $el["statistick_number"] ?></span></div>
								<div class="text fct-text"><?= $el["statistick_name"] ?></div>
							</div>

						<?php 
							}
						?>

				</div>
			</div>
		</div>
		<div id="advantages" class="advantages content-block">
			<div class="container">
				<div class="row">
					<div class="header-block">
						<h3>
							Преимущества
						</h3>
					</div>
				</div>
				<div class="row">

					<?php 
						$advantages = CFS()->get('advantages_loop');
						foreach ($advantages as $el) {	
					?>	
						<div class="col-lg-4 col-md-6 advantages_item">
							<div class="img-svg">
								<img src="<?= $el["advantages_img"] ?>">
							</div>
							<div class="title_block"><?= $el["advantages_header"] ?></div>
							<div class="description">
								<?= $el["advantages_text"] ?>
							</div>
						</div>

					<?php 
						}
					?>

				</div>
			</div>
		</div>

		<div class="sertificate content-block">
			<div class="container">
				<div class="row">
					<div class="header-block">
						<h3>
							Сертификаты
						</h3>
					</div>
				</div>
				<div class="row sertificate_block">

					<?php 
						$certificates = CFS()->get('certificates_loop');
						foreach ($certificates as $el) {	
					?>	
						<div class="sertificate_item col-lg-3 col-md-6">
							<img src="<?= $el["certificates_img"] ?>" alt="">
						</div>

					<?php 
						}
					?>

				</div>
			</div>
		</div>

		<div id="services" class="services content-block">
			<div class="container">
				<div class="row">
					<div class="header-block">
						<h3>
							Наши услуги
						</h3>
					</div>
				</div>
				<div class="row services-block">

					<?php 
						$services = CFS()->get('services_loop');
						foreach ($services as $el) {	
					?>	
						<div class="col-lg-3 col-md-6 services-block_item">
						<div class="image">
							<img src="<?= $el["service_img"] ?>" alt="">
						</div>
						<div class="content-service">
							<span class="header"><?= $el["service_title"] ?></span>
							<span class="description">
								<?= $el["service_description"] ?>
							</span>
							<span class="price"><?= $el["service_price"] ?> р</span>
							<a href="#" class="btn-gold make-order">
								Заказать
							</a>
						</div>
					</div>

					<?php 
						}
					?>
					
				</div>
			</div>
		</div>

		<div id="our_works" class="our_works content-block">
			<div class="container">
				<div class="row">
					<div class="header-block">
						<h3>
							Наши работы
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="fotorama" data-nav="thumbs" data-allowfullscreen="native"> 
						<?php 
							$our_works = CFS()->get('our_works_loop');
							foreach ($our_works as $el) {	
						?>	

							<img src="<?= $el["our_works_img"] ?>"> 

						<?php 
							}
						?>
					</div>
				</div>
			</div>
		</div>


<?php
get_footer();
