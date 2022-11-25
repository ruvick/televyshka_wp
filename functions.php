<?php

define("COMPANY_NAME", "Новый сайт");
define("MAIL_RESEND", "noreply@ultrakresla.ru"); 

//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php";

use Carbon_Fields\Container; 
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options'); 
function crb_attach_theme_options()
{
	require_once __DIR__ . "/themes-fields.php";
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once('carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}


// Menu ===========================================================================================================
//-----Блок описания вывода меню =========================================================================
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

add_action('after_setup_theme', function () {
	register_nav_menus([
		// 'menu_hot' => 'Меню актуальных предложений (рядом с каталогом)',
		'menu_main' => 'Меню основное',
		// 'menu_cat' => 'Меню каталог (в подвале)',
		// 'menu_company' => 'Меню о компании (в подвале)',
		// 'menu_corp' => 'Общекорпоративное меню (верхняя шапка)', 
	]);
});


// Добавление стилей к пунктам меню li
// add_filter('nav_menu_css_class', 'change_menu_item_css_classes', 10, 4);

// function change_menu_item_css_classes($classes, $item, $args, $depth)
// {
// 	if ($item->ID  && 'menu_cat' === $args->theme_location) {
// 		$classes[] = 'footer-top-wrap-list-item-sublist-item';
// 	}

// 	if ($item->ID  && 'menu_company' === $args->theme_location) {
// 		$classes[] = 'footer-top-wrap-list-item-sublist-item';
// 	}

// 	if ($item->ID  && 'menu_main' === $args->theme_location) {
// 		$classes[] = 'header-bottom-wrap-menu-item';
// 	}

// 	return $classes;
// }


// Добавляет атрибут class к ссылке в пунктах меню menu_main
// add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
// function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
// {
// 	if (in_array($args->theme_location, ['menu_main'])) {
// 		$atts['class'] = 'header-bottom-wrap-menu-item__link';

// 		if ($item->current) {
// 			$atts['class'] .= ' menu-link--active'; //активный пункт меню
// 		}
// 	}
// 	return $atts;
// }


// Добавляет иконку к ссылкам меню, прикрепленное к области меню menu_main
// function change_menu_item_args($args)
// {
// 	if ($args->theme_location == 'menu_main') {
// 		$args->link_after = '<img src="' . get_template_directory_uri() . '/img/home/header-menu-arrow-down.svg" alt="" class="header-bottom-wrap-menu-item-down__img">';
// 	}

// 	return $args;
// }
// add_filter('nav_menu_item_args', 'change_menu_item_args');


// Добавляем класс к submenu, прикрепленное к области меню menu_main
// add_filter('nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3);

// function change_wp_nav_menu($classes, $args, $depth)
// {
// 	if ($args->theme_location == 'menu_main') {
// 		$classes[] = 'header-bottom-wrap-menu-item-submenu';
// 		// $classes[] = 'my-css-2';
// 	}

// 	return $classes;
// }


// Изменить css класс submenu 
add_filter('nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3);

function change_wp_nav_menu($classes, $args, $depth)
{
	foreach ($classes as $key => $class) {
		if ($class == 'sub-menu') {
			$classes[$key] = 'header-bottom-wrap-menu-item-submenu';
		}
	}

	return $classes;
}
// === Menu End ========================================================================================================



add_theme_support('post-thumbnails');
set_post_thumbnail_size(185, 185);

add_post_type_support('page', 'excerpt');

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin()
{
	wp_enqueue_style("style-adm", get_template_directory_uri() . "/style-admin.css");

	wp_localize_script('jquery', 'allAjax', array(
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action('wp_enqueue_scripts', 'my_assets');
function my_assets()
{

	// Подключение стилей 

	$style_version = "1.0.1";
	$scrypt_version = "1.0.1"; 

	// wp_enqueue_style("style-modal", get_template_directory_uri() . "/css/jquery.arcticmodal-0.3.css", array(), $style_version, 'all'); //Модальные окна (стили)
	// wp_enqueue_style("style-lightbox", get_template_directory_uri() . "/css/lightbox.min.css", array(), $style_version, 'all'); //Лайтбокс (стили)
	// wp_enqueue_style("style-slik", get_template_directory_uri() . "/css/slick.css", array(), $style_version, 'all'); //Слайдер (стили)
	// wp_enqueue_style("style-fancybox", get_template_directory_uri() . "/css/fancybox.css", array(), $style_version, 'all'); //fancybox (стили)

	wp_enqueue_style("main-style", get_stylesheet_uri(), array(), $style_version, 'all'); // Подключение основных стилей в самом конце

	// Подключение скриптов

	wp_enqueue_script('jquery'); 

	wp_enqueue_script('forms', get_template_directory_uri() . '/js/forms.js', array(), $scrypt_version, true); //Формы отправки и валидация
	// wp_enqueue_script('slick', get_template_directory_uri() . '/js/sliders/slick.min.js', array(), $scrypt_version, true); //Слайдер Slick
	// wp_enqueue_script('swiper', get_template_directory_uri() . '/js/sliders/swiper.js', array(), $scrypt_version, true); //Слайдер Swiper
	wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array(), $scrypt_version, true); //Спойлеры, табы и прочий функционал
	// wp_enqueue_script('amodal', get_template_directory_uri() . '/js/jquery.arcticmodal-0.3.min.js', array(), $scrypt_version, true); //Модальные окна
	// wp_enqueue_script('mask', get_template_directory_uri() . '/js/jquery.inputmask.bundle.js', array(), $scrypt_version, true); //маска для инпутов
	// wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/imageGallery/lightbox.min.js', array(), $scrypt_version, true); //Лайтбокс
	wp_enqueue_script('fslightbox', get_template_directory_uri() . '/js/imageGallery/fslightbox.js', array(), $scrypt_version, true); //Лайтбокс JS 
	// wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/imageGallery/jquery.fancybox.min.js', array(), $scrypt_version, true); //fancybox
	// wp_enqueue_script('html2pdf', get_template_directory_uri() . '/js/html2pdf.bundle.js', array(), $scrypt_version, true); //Create PDF-page 
	// wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js', array(), $scrypt_version, true); //Scroll
	wp_enqueue_script('sender', get_template_directory_uri() . '/js/sender.js', array(), $scrypt_version, true); //Отправщик JS
		// wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), $scrypt_version, true); //jquery код
	wp_enqueue_script('vendors', get_template_directory_uri() . '/js/vendors.min.js', array(), $scrypt_version, true); //Библиотеки

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), $scrypt_version, true); // Подключение основного скрипта в самом конце

	wp_localize_script('main', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));
}


// Заготовка для вызова ajax
add_action('wp_ajax_aj_fnc', 'aj_fnc');
add_action('wp_ajax_nopriv_aj_fnc', 'aj_fnc');

function aj_fnc()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}



// Пагинация
// function wp_corenavi() {
//   global $wp_query;
//   $total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
//   $a['total'] = $total;
//   $a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
//   $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
//   $a['prev_text'] = ''; // текст ссылки "Предыдущая страница"
//   $a['next_text'] = ''; // текст ссылки "Следующая страница"

//   if ( $total > 1 ) echo '<nav class="pagination">';
//   echo paginate_links( $a );
//   if ( $total > 1 ) echo '</nav>';
// }


/* Отправка почты
		
			$headers = array(
				'From: Сайт '.COMPANY_NAME.' <MAIL_RESEND>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			$adr_to_send = <Присваиваем поле карбона c адресами для отправки>;
			$mail_content = "<Тело письма>";
			$mail_them = "<Тема письма>";

			if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
				wp_die(json_encode(array("send" => true )));
			}
			else {
				wp_die( 'Ошибка отправки!', '', 403 );
			}
	*/


/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/


// Отправка формы из модального окна
add_action('wp_ajax_sendphone', 'sendphone');
add_action('wp_ajax_nopriv_sendphone', 'sendphone');

function sendphone()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$headers = array(
			'From: Сайт ' . COMPANY_NAME . ' <' . MAIL_RESEND . '>',
			'content-type: text/html',
		);

		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		if (wp_mail(carbon_get_theme_option('as_email_send'), 'Заказ звонка', '<strong>Имя:</strong> ' . $_REQUEST["name"] . ' <br/> <strong>Телефон:</strong> ' . $_REQUEST["tel"], $headers))
			wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
		else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}





include "sender.php"

?>