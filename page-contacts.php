<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
        <div class="container-fluid">
            <div class="row">
                <img src="<?php echo get_template_directory_uri() ?>/images/inhtml/contacts_600.png" class="b-contacts__splash">
                <img src="<?php echo get_template_directory_uri() ?>/images/inhtml/contacts_small.png" class="b-contacts__splash-small">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
<?php get_footer(); ?>