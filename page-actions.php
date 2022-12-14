<?php 

/*
Template Name: Страница Акции
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<!-- <section id="catBanner" class="catBanner banner">
	<div class="banner__nuar_blk nuar_blk"></div>
</section> -->

<section class="recurring">
	<div class="_container">

  <?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
		}
	?> 

		<h2 class="our-gas__title"><? the_title();?></h2>

		<div class="our-gas__title-line title-line"></div>

        <div class="curent_action">
            <div class="form">
                <form id="cur_action" class="form">
                                
                                <div class="SendetMsg form_msg" style="display:none;"> 
                                    Ваше сообщение успешно отправлено.
                                </div>
                                <div class="headen_form_blk">

                                <div class="form__line">
                                    <p class="uaction">Для участия в розыгрыше заполние форму и прикрепите чек:</p>
                                    <input type="hidden" name = "form_name" data-valuem = "Название формы" value = "Текущая акция">
                                    <input type="hidden" name = "form_address" data-valuem = "Адрес страницы" value = "<? echo (is_home())?"https://tele-azs.ru":get_the_permalink()?>">
                                    <input required type="text" name="name" data-valuem = "Имя" placeholder="Имя" class="popup__form-input input">
                                    <input required type="tel" name="tel" data-valuem = "Телефон" placeholder="Телефон" class="popup__form-input input _phone"> 
                                    <div id="chek_input_label" class="file_wrapper">
                                        <label for="chek_input">
                                            <span class="icon"></span>
                                            <span class="text">Прикрепить чек</span>
                                        </label>
                                        <input type="file" id="chek_input" name="chek" data-valuem = "Чек" placeholder="Чек" class="popup__form-input input _file" accept="image/png, image/jpeg"> 
                                    </div>
                                    
                                </div>
                                <p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a  class="red_lnk"  href="<?echo get_the_permalink( 3 )?>">политикой
                                        конфиденциальности</a></p>
                                <button type = "submit" class="popup__form-btn btn new_send_btn" data-formid = "cur_action">Отправить</button>
                                </div>
                </form>
            </div>

            <div class="banner_action">
                <img src="<?echo get_bloginfo('template_url')?>/img/action_50.jpg" alt="">
            </div>
            
        </div>
        <br/>
        <p><strong>Условия акции:</strong> Для участия в акции Вам необходимо заправится на 500 рублей и более на заправке по адресу <a href="https://tele-azs.ru/nashi-azs/kursk-ul-aroportovskaya-d25/">г. Курск, ул. Аропортовская д. 25</a> на полученом чеке написать свое имя и телефон сфотографировать чек и отправить его с помощю формы на этой странице. После этого бросить его в лототрон у кассира на азс. </p>

	</div>
</section>

<?php get_template_part('template-parts/addresses-section');?>

</main>

<?php get_footer();