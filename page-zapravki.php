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

<?php get_template_part('template-parts/addresses-section');?>

</main>

<?php get_footer();