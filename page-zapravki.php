<?php 

/*
Template Name: Страница Заправки
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="catBanner" class="catBanner banner">
	<div class="banner__nuar_blk nuar_blk"></div>
</section>

<section class="recurring">
	<div class="_container">

  <?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
		}
	?> 

		<h2 class="our-gas__title"><? the_title();?></h2>

		<div class="our-gas__title-line title-line"></div>

		<?php get_template_part('template-parts/nashi-azs');?>

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
				<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> 

<script>
	ymaps.ready(init); 

	function init () {
		var myMap = new ymaps.Map("map", {
		// Координаты центра карты
		center:[<?php echo carbon_get_theme_option('map_point') ?>],
		// Масштаб карты
		zoom: 17,
		// Выключаем все управление картой
		controls: []
	}); 

		var myGeoObjects = [];

// Указываем координаты метки
	myGeoObjects = new ymaps.Placemark([<?php echo carbon_get_theme_option('map_point') ?>],{
	// hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
	balloonContent: '<div class="map-hint"><?php echo carbon_get_theme_option('text_map') ?>', },{
	iconLayout: 'default#image',
	// Путь до нашей картинки
	iconImageHref:  '<?php bloginfo("template_url"); ?>/img/icons/map-azs.svg',  
	// Размеры иконки
	iconImageSize: [50, 75],
	// Смещение верхнего угла относительно основания иконки
	iconImageOffset: [-25, -100]
});

var clusterer = new ymaps.Clusterer({
	clusterDisableClickZoom: false,
	clusterOpenBalloonOnClick: false,
});

clusterer.add(myGeoObjects);
myMap.geoObjects.add(clusterer);
// Отключим zoom
myMap.behaviors.disable('scrollZoom');

}
</script>
			</div>

		</div>

	</div>
</section>

</main>

<?php get_footer();