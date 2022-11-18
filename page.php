
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
 * @package light_market
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="pageBanner" class="pageBanner banner">
	<div class="banner__nuar_blk nuar_blk"></div>
	<div class="_container">
		<h1 class="pageBanner__title">
			АЗС: <br>
			50 лет октября <br> 
			124 б
		</h1>
	</div>
</section>

<section class="recurring">
	<div class="_container">

		<p id="breadcrumbs">
			<span>
				<span>
					<a href="index.html">
						Главная
					</a> /
					<a href="#">
						Наши АЗС
					</a> /
					<span class="breadcrumb_last" aria-current="page">
						АЗС: 50 лет октября 124 б
					</span>
				</span>
			</span>
		</p>

		<h2 class="recurring__title">
			Услуги
		</h2>
		<div class="recurring__title-line title-line"></div>

		<div class="service-icon-block gas-icon-block d-flex">

			<div class="our-gas__card-descpBlock">
				<div class="service-icon-block__icon-border">
					<div class="service-icon-block__icon service-icon-block__icon_01"></div>
				</div>
				<div class="our-gas__card-descpBlock-text">Заправка</div>
			</div>

			<div class="our-gas__card-descpBlock">
				<div class="service-icon-block__icon-border">
					<div class="service-icon-block__icon service-icon-block__icon_02"></div>
				</div>
				<div class="our-gas__card-descpBlock-text">Кофе с собой</div>
			</div>

			<div class="our-gas__card-descpBlock">
				<div class="service-icon-block__icon-border">
					<div class="service-icon-block__icon service-icon-block__icon_03"></div>
				</div>
				<div class="our-gas__card-descpBlock-text">Магазин</div>
			</div>

			<div class="our-gas__card-descpBlock">
				<div class="service-icon-block__icon-border">
					<div class="service-icon-block__icon service-icon-block__icon_04"></div>
				</div>
				<div class="our-gas__card-descpBlock-text">Шиномонтаж</div>
			</div>

			<div class="our-gas__card-descpBlock">
				<div class="service-icon-block__icon-border">
					<div class="service-icon-block__icon service-icon-block__icon_05"></div>
				</div>
				<div class="our-gas__card-descpBlock-text">Кофе с собой</div>
			</div>

		</div>

		<h2 class="recurring__title">
			Топливо
		</h2>
		<div class="recurring__title-line title-line"></div>

		<div class="gas-icon-block d-flex">

			<div class="our-gas__card-descpBlock">
				<div class="our-gas__card-descpBlock-icon our-gas-icon-black"></div>
				<div class="our-gas__card-descpBlock-text">Дт Евро</div>
			</div>

			<div class="our-gas__card-descpBlock">
				<div class="our-gas__card-descpBlock-icon our-gas-icon-blue"></div>
				<div class="our-gas__card-descpBlock-text">АИ 95 Евро</div>
			</div>

			<div class="our-gas__card-descpBlock">
				<div class="our-gas__card-descpBlock-icon"></div>
				<div class="our-gas__card-descpBlock-text">95</div>
			</div>

			<div class="our-gas__card-descpBlock">
				<div class="our-gas__card-descpBlock-icon our-gas-icon-green"></div>
				<div class="our-gas__card-descpBlock-text">92 Евро</div>
			</div>

		</div>

		<h2 class="our-gas__title">
			Фото заправки
		</h2>
		<div class="our-gas__title-line title-line"></div>

		<div class="our-gas__wrap d-flex">

			<div class="our-gas__inner d-flex">

				<a href="#" class="our-gas__card our-gas__card_01">
					<!-- <div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №01</div>
					</div> -->
				</a>

				<a href="#" class="our-gas__card our-gas__card_02">
					<!-- <div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №03</div>
					</div> -->
				</a>

				<a href="#" class="our-gas__card our-gas__card_03">
					<!-- <div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №02</div>
					</div> -->
				</a>

				<a href="#" class="our-gas__card our-gas__card_04">
					<!-- <div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №04</div>
					</div> -->
				</a>

			</div>

			<div class="our-gas__inner our-gas__inner-big d-flex">
				<a href="#" class="our-gas__card our-gas__card-big our-gas__card_05">
					<!-- <div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №06</div>
					</div> -->
				</a>
			</div>

		</div>

	</div>
</section>

<section id="addresses" class="addresses section">
	<div class="_container">

		<div class="addresses__wrap d-flex">

			<div class="addresses__column addresses__column_left">
				<div class="addresses__block">

					<div class="addresses__block-item">
						<h5 class="addresses__block-item-title">Курск, улица 50 лет Октября</h5>
						<!-- <p class="addresses__block-item-subtitle"></p> -->
						<ul class="addresses__block-item-list">
							<li class="addresses__block-item-list-item">Сервис:</li>
							<li class="addresses__block-item-list-item">Кофе Магазин Туалет</li>
							<li class="addresses__block-item-list-item">Бесплатный WiFi</li>
							<li class="addresses__block-item-list-item">Мойка самообслуживания
							</li>
							<li class="addresses__block-item-list-item">Парковка</li>
						</ul>
					</div>

					<div class="addresses__block-item">
						<h5 class="addresses__block-item-title">Курск, улица 50 лет Октября</h5>
						<!-- <p class="addresses__block-item-subtitle"></p> -->
						<ul class="addresses__block-item-list">
							<li class="addresses__block-item-list-item">Сервис:</li>
							<li class="addresses__block-item-list-item">Кофе Магазин Туалет</li>
							<li class="addresses__block-item-list-item">Бесплатный WiFi</li>
							<li class="addresses__block-item-list-item">Мойка самообслуживания
							</li>
							<li class="addresses__block-item-list-item">Парковка</li>
						</ul>
					</div>

					<div class="addresses__block-item">
						<h5 class="addresses__block-item-title">Курск, улица 50 лет Октября</h5>
						<!-- <p class="addresses__block-item-subtitle"></p> -->
						<ul class="addresses__block-item-list">
							<li class="addresses__block-item-list-item">Сервис:</li>
							<li class="addresses__block-item-list-item">Кофе Магазин Туалет</li>
							<li class="addresses__block-item-list-item">Бесплатный WiFi</li>
							<li class="addresses__block-item-list-item">Мойка самообслуживания
							</li>
							<li class="addresses__block-item-list-item">Парковка</li>
						</ul>
					</div>

					<div class="addresses__block-item">
						<h5 class="addresses__block-item-title">Курск, улица 50 лет Октября</h5>
						<!-- <p class="addresses__block-item-subtitle"></p> -->
						<ul class="addresses__block-item-list">
							<li class="addresses__block-item-list-item">Сервис:</li>
							<li class="addresses__block-item-list-item">Кофе Магазин Туалет</li>
							<li class="addresses__block-item-list-item">Бесплатный WiFi</li>
							<li class="addresses__block-item-list-item">Мойка самообслуживания
							</li>
							<li class="addresses__block-item-list-item">Парковка</li>
						</ul>
					</div>

					<div class="addresses__block-item">
						<h5 class="addresses__block-item-title">Курск, улица 50 лет Октября</h5>
						<!-- <p class="addresses__block-item-subtitle"></p> -->
						<ul class="addresses__block-item-list">
							<li class="addresses__block-item-list-item">Сервис:</li>
							<li class="addresses__block-item-list-item">Кофе Магазин Туалет</li>
							<li class="addresses__block-item-list-item">Бесплатный WiFi</li>
							<li class="addresses__block-item-list-item">Мойка самообслуживания
							</li>
							<li class="addresses__block-item-list-item">Парковка</li>
						</ul>
					</div>

				</div>
			</div>

			<div class="addresses__column addresses__column_right">
				<div id="map" class="addresses__map"></div>
			</div>

		</div>

	</div>
</section>

</main>

	<!-- <main id="primary" class="page site-main">  

		<section class="content"> 
			<div class="_container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 

			</div>
		</section>
	</main> -->

<?php get_footer();