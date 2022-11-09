<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<a href="index.html" class="logo-icon footer__logo">
				<!-- <? bloginfo("url"); ?> -->
			</a>

			<ul class="footer__menu d-flex">
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Главная</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Заправки</a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Бонусная программа </a></li>
				<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Контакты</a></li>
			</ul>

			<div class="footer__contacts">
				<div class="footer__contacts-phone contacts-phone-block">
					<a href="tel:84951700000" class="footer__telephone contacts-phone-block__telephone">8 800 488 22 22</a>
					<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a> -->
					<a href="#callback" class="footer__popup-link header__popup-link _popup-link">Заказать звонок</a>
				</div>

			</div>

		</div>

		<div class="footer__row footer__row-bottom d-flex">
			<div class="footer__social-block">
				<div class="contacts-social d-flex">
					<a href="#" class="footer__contacts-social-link contacts-social-link header__contacts-social-link_01"></a>
					<a href="#" class="footer__contacts-social-link contacts-social-link header__contacts-social-link_02"></a>
				</div>
				<p class="footer__social-text">Мы в соцсетях</p>
			</div>
		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>