<?php 

/*
Template Name: Страница Заправка
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="pageBanner" class="pageBanner banner">
	<div class="banner__nuar_blk nuar_blk"></div>
	<div class="_container">
		<h1 class="pageBanner__title"><? the_title();?></h1>
	</div>
</section>

<section class="recurring">
	<div class="_container">

  <?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
		}
	?> 

		<h2 class="recurring__title">
			Услуги
		</h2>
		<div class="recurring__title-line title-line"></div>

		<div class="service-icon-block gas-icon-block d-flex">

		<? 
		$zapServ = carbon_get_post_meta(get_the_ID(),"complex_services"); 
			if ($zapServ) {
		$zapServIndex = 0;
			foreach ($zapServ as $item) {
			?>
			<div class="our-gas__card-descpBlock">
				<div class="service-icon-block__icon-border">
					<div class="service-icon-block__icon" style="background-image: url(<?php echo wp_get_attachment_image_src($item['znak_services'], 'full')[0]; ?>);"></div>
				</div>
				<div class="our-gas__card-descpBlock-text"><? echo $item['text_services']; ?></div>
			</div>
			<?
			$zapServIndex++; 
		}
	}
	?>

		</div>



		<h2 class="recurring__title">
			Топливо
		</h2>
		<div class="recurring__title-line title-line"></div>

		<div class="gas-icon-block d-flex">
		<? 
		$zapFuel = carbon_get_post_meta(get_the_ID(),"complex_fuel"); 
			if ($zapFuel) {
		$zapFuelIndex = 0;
			foreach ($zapFuel as $item) {
			?>
			<div class="our-gas__card-descpBlock">
				<div class="our-gas__card-descpBlock-icon" style="background-image: url(<?php echo wp_get_attachment_image_src($item['znak_fuel'], 'full')[0]; ?>);"></div>
				<div class="our-gas__card-descpBlock-text"><? echo $item['text_fuel']; ?></div>
			</div>
			<?
			$zapFuelIndex++; 
		}
	}
	?>

		</div>

		<div class="price_table">
			<? echo carbon_get_post_meta(get_the_ID(), "zap_price"); ?>
		</div>

		<?
			$contetnt = get_the_content();
			if (!empty($contetnt)) {
		?>
			<h2 class="our-gas__title">
				Фото заправки
			</h2>
			<div class="our-gas__title-line title-line"></div>

			<?php the_content(); ?>
		<?}?>
	</div>
</section>

<?php get_template_part('template-parts/addresses-section');?>

</main>

<?php get_footer();