<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon footer__logo"></a>

			<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'footer__menu d-flex',
				'container_class' => 'footer__menu d-flex','container' => false )); ?> 

			<div class="footer__contacts">
				<div class="footer__contacts-phone contacts-phone-block">
					<? $tel = carbon_get_theme_option("as_phones_1"); 
						if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer__telephone contacts-phone-block__telephone"><? echo $tel; ?></a><?}?> 
					<a href="#callback" class="footer__popup-link header__popup-link _popup-link">Заказать звонок</a>
				</div>

			</div>

		</div>

		<div class="footer__row footer__row-bottom d-flex">
			<div class="footer__social-block">
				<div class="contacts-social d-flex">
					<a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="footer__contacts-social-link contacts-social-link header__contacts-social-link_01"></a>
					<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="footer__contacts-social-link contacts-social-link header__contacts-social-link_02"></a>
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