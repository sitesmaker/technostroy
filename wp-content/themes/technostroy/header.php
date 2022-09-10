<?php

/**
 * The template for displaying the header
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Technostroy
 */



?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>
<body <?php body_class();?>>
	<body>
	<header>
		<div class="container">
			<div class="row header">
				<div class="logo col-lg-3 col-md-8 col-8"><a href=""><img src="<?php echo CFS()->get('logo'); ?>" alt="Технострой"></a></div>
				<div class="burger-wrapper col-4">
					<div class="burger-item">
						<span></span>
					</div>
				</div>
				<ul id="menu" class="nav col-lg-9 col-md-12">
					<li><a href="#main">Главная</a></li>
					<li><a href="#about_us">О нас</a></li>
					<li><a href="#advantages">Преимущества</a></li>
					<li><a href="#services">Наши услуги</a></li>
					<li><a href="#our_works">Наши работы</a></li>
					<li><a href="#contacts">Контакты</a></li>
				</ul>
			</div>
		</div>
	</header>

	<section id="main" class="content">

