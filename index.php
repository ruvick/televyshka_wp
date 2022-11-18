<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<?php 
		$banner = wp_get_attachment_image_src( carbon_get_theme_option('main-baner_img'), 'full')[0];
			if(empty($banner)) {
		$banner = get_template_directory_uri() . '/img/main-banner.jpg';
	} ?>

<section id="main-banner" class="main-banner" style="background-image: url(<?php echo $banner?>);">
	<div class="main-banner__nuar_blk nuar_blk"></div> 
	<div class="_container">

	<? $mainBanerTitle = carbon_get_theme_option("main-baner_title");
		if (!empty($mainBanerTitle)) { ?>
		<h1 class="main-banner__title"><? echo $mainBanerTitle; ?></h1>
	<? } ?>

	<? $mainBanerSubTitle = carbon_get_theme_option("main-baner_subtitle");
		if (!empty($mainBanerTitle)) { ?>
		<p class="main-banner__subtitle"><? echo $mainBanerSubTitle; ?></p>
	<? } ?>

		<div class="main-banner__iconBlock">
			<div class="main-banner__iconBlock-item main-banner__iconBlock-item_01"></div>
			<div class="main-banner__iconBlock-item main-banner__iconBlock-item_02"></div>
			<div class="main-banner__iconBlock-item main-banner__iconBlock-item_03"></div>
			<div class="main-banner__iconBlock-item main-banner__iconBlock-item_04"></div>
			<div class="main-banner__iconBlock-item main-banner__iconBlock-item_05"></div>
		</div>

	</div>
</section>

<section id="about" class="about section">
	<div class="_container">

	<? $abouttc = carbon_get_theme_option("about_home");
	if (!empty($abouttc)) { ?>
		<h2 class="about__title"><?php echo carbon_get_theme_option('about_home_title'); ?></h2>
		<div class="about__title-line title-line"></div>
		<p class="about__subtitle"><? echo $abouttc; ?></p>
	<? } ?>

		<div class="about__imageBlock">
			<div class="about__imageBlock-nuar_blk nuar_blk"></div>
			<div class="about__imageBlock-phone">
				<picture><source srcset="<?php echo get_template_directory_uri();?>/img/about-phone.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/about-phone.png?_v=1668005664356" alt=""></picture>
			</div>
			<div class="about__imageBlock-descp">
				<h2 class="about__imageBlock-title">
					Наши скидки <br>
					и бонусы
				</h2>
				<div class="about__imageBlock-line title-line"></div>
				<p class="about__imageBlock-subtitle">
					Скидка 50 копеек с <br>
					литра по дисконтной карте
				</p>
				<p class="about__imageBlock-subtitle">
					При заправке пропана 5% от <br>
					суммы зачисляются на счет <br>
					бонусной карты
				</p>
				<a href="<?php echo get_permalink(18);?>" class="about__imageBlock-btn">Подробнее</a>
			</div>
		</div>

	</div>
</section>

<section id="our-gas" class="our-gas section">
	<div class="_container">

		<h2 class="our-gas__title">
			Наши АЗС
		</h2>

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

<?php get_footer(); ?> 