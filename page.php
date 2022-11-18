
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
		<h1 class="pageBanner__title"><? the_title();?></h1>
	</div>
</section>

<section class="recurring content">
	<div class="_container">

  <?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
		}
	?> 

	<?php the_content();?>

	</div>
</section>

</main>

<?php get_footer();