<?php
/*
Template Name: Таланты
*/
?>
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <img src="<?php echo get_template_directory_uri() ?>/images/inhtml/talants_600.png" class="b-contacts__splash">
            <img src="<?php echo get_template_directory_uri() ?>/images/inhtml/talants_small.png" class="b-contacts__splash-small">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <div id="contact-form-945">
                <form action="http://hills7.com/talants/#contact-form-945" method="post" class="contact-form commentsblock b-talants-form">
                    <div>
                            <label for="g945" class="grunion-field-label name b-talants-form__label-name">Ваше имя и фамилия<span>(обязательно)</span></label>
                            <input type="text" name="g945" id="g945" value="" class="name b-talants-form__text-name" required="" aria-required="true">
                        </div>
                    <div>
                            <label for="g945-email" class="grunion-field-label email b-talants-form__label-email">Ваш контактный E-mail<span>(обязательно)</span></label>
                            <input type="email" name="g945-email" id="g945-email" value="" class="email b-talants-form__text-email" required="" aria-required="true">
                        </div>
                    <div>
                            <label for="g945-1" class="grunion-field-label text b-talants-form__label-phone">Ваш контактный телефон</label>
                            <input type="text" name="g945-1" id="g945-1" value="" class="text b-talants-form__text-phone">
                        </div>
                    <div>
                            <label for="contact-form-comment-g945-2" class="grunion-field-label textarea b-talants-form__label-about">Чем можете быть полезны? (расскажите о себе)<span>(обязательно)</span></label>
                            <textarea name="g945-2" id="contact-form-comment-g945-2" rows="20" class="textarea b-talants-form__text-about" required="" aria-required="true"></textarea>
                        </div>
                    <p class="contact-submit">
                        <input type="submit" value="Отправить »" class="pushbutton-wide b-talants-form__submit">
                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="82e02f01eb"><input type="hidden" name="_wp_http_referer" value="/talants/">
                        <input type="hidden" name="contact-form-id" value="945">
                        <input type="hidden" name="action" value="grunion-contact-form">
                    </p>
                </form>
            </div>
            <!-- <form action="" method="get" name="form-2" class="b-talants-form">
                <label for="name" class="b-talants-form__label-name">Ваше имя и фамилия</label>
                <input id="name" name="name" type="text" required class="b-talants-form__text-name">
                <label for="email" class="b-talants-form__label-email">Ваш контактный E-mail</label>
                <input id="email" name="email" type="text" required class="b-talants-form__text-email">
                <label for="tell" class="b-talants-form__label-phone">Ваш контактный телефон</label>
                <input id="tell" name="tell" type="text" required class="b-talants-form__text-phone">
                <label for="about" class="b-talants-form__label-about">Чем можете быть полезны (расскажите о себе)</label>
                <textarea id="text" name="text" type="text" required class="b-talants-form__text-about"></textarea>
                <input type="submit" value="Отправить" class="b-talants-form__submit">
            </form> -->
        </div>
    </div>
<?php get_footer(); ?>