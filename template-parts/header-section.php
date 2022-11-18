<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex"> 

			<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a>

			<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu-list header__menu-list d-flex',
				'container_class' => 'menu-list header__menu-list d-flex','container' => false )); ?> 

			<div class="header__contacts d-flex">
				<div class="header__contacts-social d-flex">
					<a href="#" class="header__contacts-social-link contacts-social-link header__contacts-social-link_01"></a>
					<a href="#" class="header__contacts-social-link contacts-social-link header__contacts-social-link_02"></a>
				</div>
				<div class="header__contacts-phone contacts-phone-block">
					<? $tel = carbon_get_theme_option("as_phones_1"); 
						if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="contacts-phone-block__telephone header__phone"><? echo $tel; ?></a><?}?> 
					<a href="#callback" class="header__popup-link _popup-link">Заказать звонок</a>
				</div>
			</div>
			<a href="tel:84951700000" class="mob-phone-icon header__mob-phone-icon"></a>
			<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a> -->

			<div class="icon-menu" aria-label="Бургер меню">
				<span></span>
				<span></span>
				<span></span>
			</div>

		</div>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?> 
	<a href="#callback" class="header__popup-link header__popup-link_mob btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>