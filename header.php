<!DOCTYPE html>
<html lang="ru">
<head>

  <title><?php wp_title(); ?></title>

  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Новый сайт"> 
  
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png" sizes="256x256">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png" sizes="128x128">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png" sizes="64x64">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/fav.svg" sizes="any">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">  

  <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  
  <?php wp_head();?>  
  
  <!-- Yandex.Metrika counter -->
  <?php echo carbon_get_theme_option('code_yandex_metrica'); ?>
  <!-- /Yandex.Metrika counter -->

  <!-- Google.Metrika counter -->
  <?php echo carbon_get_theme_option('code_google_counter'); ?>
  <!-- /Google.Metrika counter -->

  <!-- Дополнительный код -->
  <?php echo carbon_get_theme_option('additional_code_head'); ?>
  <!-- /Дополнительный код -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(91608040, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/91608040" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>
<body>

  <!-- Дополнительный код -->
  <?php echo carbon_get_theme_option('additional_code_body'); ?>
  <!-- /Дополнительный код -->

<!-- Скрипт корзины, отправка, личный кабинет -->
<script>  
  let main_page = "<?echo get_bloginfo("url"); ?>";
  let kabinet_page = "<?echo get_the_permalink(219); ?>";
  let bascet_page = "<?echo get_the_permalink(17); ?>"; 
  let thencs_page = "<?echo get_the_permalink(56); ?>"; 
  let nophoto_page = "<?echo get_bloginfo("template_url");?>/img/no-photo.jpg";
</script> 
  <div class="wrapper">  
    <!-- Подключение  модальных окон-->
    <? include "modal-win.php";?>