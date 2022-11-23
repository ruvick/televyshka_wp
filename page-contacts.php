<?php 

/*
Template Name: Страница Контакты
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

<section class="recurring content">
	<div class="_container">

  <?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
		}
	?> 

  <ul class="contacts-list"> 
	  <? $org = carbon_get_theme_option("as_company"); if (!empty($org)){?><li>Организация: <strong><? echo $org; ?></strong></li><?}?> 
		<? $adr = carbon_get_theme_option("as_address"); if (!empty($adr)){?><li>Адрес: <strong><? echo $adr; ?></strong></li><?}?>
		<? $inn = carbon_get_theme_option("as_inn"); if (!empty($inn)){?><li>ИНН: <strong><? echo $inn; ?></strong></li><?}?>
		<? $kpp = carbon_get_theme_option("as_kpp"); if (!empty($kpp)){?><li>КПП: <strong><? echo $kpp; ?></strong></li><?}?>
		<? $ogrn = carbon_get_theme_option("as_orgn"); if (!empty($ogrn)){?><li>ОРГН: <strong><? echo $ogrn; ?></strong></li><?}?>
		<? $rs = carbon_get_theme_option("as_rs"); if (!empty($rs)){?><li>Р/С: <strong><? echo $rs; ?></strong></li><?}?>
		<? $ks = carbon_get_theme_option("as_ks"); if (!empty($ks)){?><li>К/С: <strong><? echo $ks; ?></strong></li><?}?>
		<? $bik = carbon_get_theme_option("as_bik"); if (!empty($bik)){?><li>БИК: <strong><? echo $bik; ?></strong></li><?}?>
		<? $bank = carbon_get_theme_option("as_bank"); if (!empty($bank)){?><li>БАНК: <strong><? echo $bank; ?></strong></li><?}?>
		<? $mail = carbon_get_theme_option("as_email"); if (!empty($mail)){?><li>Email: <strong><a href="mailto:<? echo $mail; ?>"><? echo $mail; ?></strong></a></li><?}?>
		<? $tel = carbon_get_theme_option("as_phones_1"); $tel2 = carbon_get_theme_option("as_phone_2"); if (!empty($tel)){?><li class="contacts-list__item-phone">По всем интересующим вопросам обращайтесь по телефону: <strong><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel; ?></strong></a> <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel2); ?>"><? echo $tel2; ?></strong></a></li><?}?> 
	</ul>

	<?php get_template_part('template-parts/addresses-section');?>

	</div>
</section>

</main>

<?php get_footer(); 
