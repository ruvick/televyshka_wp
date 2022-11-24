<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field; 

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Главная', array(
      Field::make('image', 'main-baner_img', 'Картинка банера')
      ->set_width(50),
      Field::make('text', 'main-baner_title', 'Заголовок банера')
      ->set_width(50),
      Field::make('text', 'main-baner_subtitle', 'Подзаголовок банера')
      ->set_width(50),
      Field::make('text', 'about_home_title', 'Заголовок о нас'), 
      Field::make('rich_text', 'about_home', 'О нашей компании')
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_company', __( 'Название' ) )
          ->set_width(50),
        Field::make( 'text', 'as_schedule', __( 'Режим работы' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phones_1', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон дополнительный' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) ) 
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_kpp', __( 'КПП' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bik', __( 'БИК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_rs', __( 'Р/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ks', __( 'К/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bank', __( 'БАНК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'instagram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_face', __( 'facebook' ) )
          ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make( 'text', 'as_telegr', __( 'telegram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_whatsapp', __( 'whatsapp' ) )
          ->set_width(50),
        Field::make('text', 'map_point', 'Координаты карты')
          ->set_width(50),
        Field::make('text', 'text_map', 'Текст метки карты')
          ->set_width(50),
    ) );

  Container::make('post_meta', 'page-zapravki', 'Характеристики заправок')
  ->show_on_template(array('page-zapravki.php'))
      ->add_fields(array(   
        Field::make('text', 'zap_addres_1', 'Адрес заправки 1' )->set_width(50),
        Field::make('image', 'zap_img_1', 'Обложка заправки 1' )->set_width(50),
        Field::make('text', 'zap_addres_2', 'Адрес заправки 2' )->set_width(50),
        Field::make('image', 'zap_img_2', 'Обложка заправки 2' )->set_width(50),
        Field::make('text', 'zap_addres_3', 'Адрес заправки 3' )->set_width(50),
        Field::make('image', 'zap_img_3', 'Обложка заправки 3' )->set_width(50),
        Field::make('text', 'zap_addres_4', 'Адрес заправки 4' )->set_width(50),
        Field::make('image', 'zap_img_4', 'Обложка заправки 4' )->set_width(50),
        Field::make('text', 'zap_addres_5', 'Адрес заправки 5' )->set_width(50),
        Field::make('image', 'zap_img_5', 'Обложка заправки 5' )->set_width(50),
        Field::make('text', 'zap_addres_6', 'Адрес заправки 6' )->set_width(50),
        Field::make('image', 'zap_img_6', 'Обложка заправки 6' )->set_width(50),
  ));

  Container::make('post_meta', 'page-zapravka', 'Характеристики заправки')
  ->show_on_template(array('page-zapravka.php'))
    ->add_fields(array(   
      // Field::make('text', 'zap_addres', 'Адрес')->set_width(50),
      // Field::make('image', 'zap_img', 'Обложка')->set_width(50),
      Field::make('complex', 'complex_services', 'Услуги')
      ->add_fields(array(
        Field::make('image', 'znak_services', 'Значек')   
        ->set_width(50),
        Field::make('text', 'text_services', 'Текст')   
        ->set_width(50),
      )),
      Field::make('complex', 'complex_fuel', 'Топливо')
      ->add_fields(array(
        Field::make('image', 'znak_fuel', 'Значек')   
        ->set_width(50),
        Field::make('text', 'color_fuel', 'Цвет')   
        ->set_width(50),
        Field::make('text', 'text_fuel', 'Текст')   
        ->set_width(50),
      )),
  ));
  
?>