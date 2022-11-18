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
				<a href="#" class="about__imageBlock-btn">Подробнее</a>
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

		<div class="our-gas__wrap d-flex">

			<div class="our-gas__inner d-flex">

				<a href="#" class="our-gas__card our-gas__card_01">
					<div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №01</div>
					</div>
				</a>

				<a href="#" class="our-gas__card our-gas__card_02">
					<div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №03</div>
					</div>
				</a>

				<a href="#" class="our-gas__card our-gas__card_03">
					<div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №02</div>
					</div>
				</a>

				<a href="#" class="our-gas__card our-gas__card_04">
					<div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №04</div>
					</div>
				</a>

				<a href="#" class="our-gas__card our-gas__card_06">
					<div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №05</div>
					</div>
				</a>

			</div>

			<div class="our-gas__inner our-gas__inner-big d-flex">
				<a href="#" class="our-gas__card our-gas__card-big our-gas__card_05">
					<div class="our-gas__card-descpBlock">
						<div class="our-gas__card-descpBlock-icon"></div>
						<div class="our-gas__card-descpBlock-text">АЗС №06</div>
					</div>
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

<?php get_footer(); ?> 