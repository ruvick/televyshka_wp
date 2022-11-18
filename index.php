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

<?php get_template_part('template-parts/addresses-section');?>

</main>

<?php get_footer(); ?> 