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
		<div class="usl_and_map">
			<div class="usl_">

				<h2 class="recurring__title">Услуги</h2>
				<div class="recurring__title-line title-line"></div>

				<div class="service-icon-block gas-icon-block d-flex">

				<? 
					// $zapServ = carbon_get_post_meta(get_the_ID(), "complex_services"); 
					$zapServ = explode(',', carbon_get_post_meta(21, "zap_services_".carbon_get_post_meta(get_the_ID(), "zap_id"))); 
					if ($zapServ) {
						$zapServIndex = 0;
						foreach ($zapServ as $item) {
				?>
						<div class="our-gas__card-descpBlock">
							<div class="service-icon-block__icon-border">
								<div class="service-icon-block__icon" data-servicename="<? echo $item; ?>"></div>
							</div>
							<div class="our-gas__card-descpBlock-text"><? echo $item; ?></div>
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
				
				<div class="gas_price_table">
					<div class="gpt_head">
						<div class="gpt_line">
							<div class="gpt_toplivo">
								<h3>Вид топлива</h3>
							</div>
							<div class="gpt_price">
								<img class="gray" src="<?echo get_bloginfo("template_url");?>/img/card_mini.jpg" alt="">
								<p>Без карты</p>
							</div>
							<div class="gpt_price_card">
								<img  src="<?echo get_bloginfo("template_url");?>/img/card_mini.jpg" alt="">
								<p>По карте</p>
							</div>
						</div>
					</div>

					<? 
					$zapFuel = get_price_table(carbon_get_post_meta(21, "zap_toplivo_".carbon_get_post_meta(get_the_ID(), "zap_id"))); 
					if ($zapFuel) {
						$zapFuelIndex = 0;
							foreach ($zapFuel as $item) {
							?>
								<div class="gpt_body">
									<div class="gpt_line">
										<?
											if (mb_strripos($item[0], "92") != false ) get_template_part('template-parts/t-92');
											if (mb_strripos($item[0], "95") != false ) get_template_part('template-parts/t-95');
											if (mb_strripos($item[0], "ДТ") != false ) get_template_part('template-parts/t-DT');
											if (mb_strripos($item[0], "ГАЗ") != false ) get_template_part('template-parts/t-g');
											if (mb_strripos($item[0], "ДГК") != false ) get_template_part('template-parts/t-dgk');
										?>
										
										

										<div class="gpt_price"><? echo $item[1]; ?></div>
										<div class="gpt_price_card"><? echo $item[2]; ?></div>
									</div>	
								</div>
							<?
							$zapFuelIndex++; 
						}
					}
				?>
					

				</div>

				<? 
					// $zapFuel = get_price_table(carbon_get_post_meta(21, "zap_toplivo_".carbon_get_post_meta(get_the_ID(), "zap_id"))); 
					// if (!$zapFuel) {
					// 	$zapFuelIndex = 0;
					// 		foreach ($zapFuel as $item) {
					// 		?>
					 		<!-- <div class="our-gas__card-descpBlock">
					 			<div class="our-gas__card-descpBlock-icon" data-toplivoid="<? echo $item[0]; ?>"></div>
					 			<div class="our-gas__card-descpBlock-text"><? echo $item[0]; ?></div>
					 		</div> -->
					 		<?
					// 		$zapFuelIndex++; 
					// 	}
					// }
				?>

				</div>

			</div>

			<div id="map_" class="map_">

			</div>

			<script>
				ymaps.ready(init_); 

				function init_() { 
					myMap_ = new ymaps.Map("map_", {
						center:[<?echo carbon_get_post_meta(21, "zap_geo_".carbon_get_post_meta(get_the_ID(), "zap_id"))?>],
						zoom: 15,
						controls: []
					});

					myPlacemark_ = new ymaps.Placemark([<?echo carbon_get_post_meta(21, "zap_geo_".carbon_get_post_meta(get_the_ID(), "zap_id"))?>], {
						balloonContent: "<?echo carbon_get_post_meta(21, "zap_addres_".carbon_get_post_meta(get_the_ID(), "zap_id"))?>",
					}, {
						iconLayout: 'default#image',
						iconImageHref: '<?php bloginfo("template_url"); ?>/img/icons/map-azs.svg',
						iconImageSize: [25, 38],
						iconImageOffset: [-12, -38]
					});

					myMap_.geoObjects.add(myPlacemark_);
				}

			</script>

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