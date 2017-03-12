<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php $moe = get_template_directory_uri(); ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="cleartype" content="on">
        <meta name="google" value="notranslate">
        <link href="<?php echo $moe; ?>/style.css" rel="stylesheet">
        <script src="<?php echo $moe; ?>/js/jquery/jquery.min.js"></script>
        <title><?php bloginfo('name')?></title>
        <meta name="description" content="">
        <!--[if lte IE 9]><script src="js/html5shiv/html5shiv.min.js"></script><![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="b-header">
            <div class="container">
                <div class="row">
                    <?php if ( !is_front_page() ) : ?>
                        <div class="col-lg-12 col-sm-12 b-logo">
                            <a href="<?php echo get_site_url(); ?>" class="b-logo__link">
                                <img src="<?php echo $moe; ?>/images/inhtml/logo_black2.png" class="b-logo__img">
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="col-lg-9 col-md-9 col-sm-12 b-navigation">
                        <ul class="b-navigation__list">
                            <li class="b-navigation__item"><a href="<?php echo get_site_url(); ?>/category/news" class="b-navigation__link">Новости</a>
                            </li>
                            <li class="b-navigation__item"><a href="<?php echo get_site_url(); ?>/category/people" class="b-navigation__link">Люди</a>
                            </li>
                            <li class="b-navigation__item"><a href="<?php echo get_site_url(); ?>/category/lifestyle" class="b-navigation__link">Образ жизни</a>
                            </li>
                            <li class="b-navigation__item"><a href="<?php echo get_site_url(); ?>/contacts" class="b-navigation__link">Контакты</a>
                            </li>
                            <li class="b-navigation__item"><a href="<?php echo get_site_url(); ?>/talants" class="b-navigation__link">Таланты</a>
                            </li>
                            <li class="b-navigation__item"><a href="<?php echo get_site_url(); ?>/about" class="b-navigation__link">О проекте</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-offset-0 col-lg-3 col-md-3 col-sm-offset-4 col-sm-4 col-xs-12">
                        <div class="b-socials">
                            <a href="http://vk.com/hills7" class="b-socials__vk icon-4vk"></a>
                            <a href="http://instagram.com/sevenhills_magazine/" class="b-socials__instagram icon-4instagram"></a>
                            <a href="http://twitter.com/sevenhills_mag/" class="b-socials__twitter icon-4twitter"></a>
                            <a href="http://youtube.com/channel/UC3UzBlMAuIgW_Uqmi-Evr9A" class="b-socials__youtube icon-4youtube"></a>
                            <a href="http://facebook.com" class="b-socials__facebook icon-4facebook"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>