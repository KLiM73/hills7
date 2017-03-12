    <?php get_header(); ?>
    <?php $moe = get_template_directory_uri(); ?>
        <div class="container-fluid">
            <div class="row">
                <img src="<?php echo $moe; ?>/images/inhtml/DSC_9201_3.png" class="b-splash__large">
                <img src="<?php echo $moe; ?>/images/inhtml/DSC_9201_3_small.png" class="b-splash__small">
            </div>
        </div>
        <div class="container b-main-container">
            <div class="row">
                <div class="col-md-offset-1 col-lg-offset-0 col-lg-9 col-md-10 col-sm-12 col-xs-12">
                    <div class="row b-main__content">
                        <div class="col-lg-12 col-sm-12 col-xs-12 b-news"><a href="/category/news" class="b-news__title">Новости</a>
                        </div>

                        <?php
                        $posts = get_posts ("category=23&orderby=date&numberposts=4");
                        if ( $posts ) :
                            foreach ($posts as $post) : setup_postdata($post);
                            ?>
                            <!--post-->
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 b-news-container">
                                <a href="<?php the_permalink(); ?>" class="b-news-container__link">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="b-news-container__img"><span class="b-news-container__title"><?php the_title();?></span>
                                </a>
                            </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <div class="col-lg-12 col-sm-12 col-xs-12 b-news-readmore"><a href="/category/news" class="b-news-readmore__link">Читать дальше</a>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 b-people"><a href="/category/people" class="b-people__title">Люди</a>
                        </div>

                        <?php
                        $posts = get_posts ("category=24&orderby=date&numberposts=4");
                        if ( $posts ) :
                            foreach ($posts as $post) : setup_postdata($post);
                                ?>
                                <!--post-->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 b-news-container">
                                    <a href="<?php the_permalink(); ?>" class="b-news-container__link">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="b-news-container__img"><span class="b-news-container__title"><?php the_title();?></span>
                                    </a>
                                </div>
                            <?php endforeach; wp_reset_postdata(); ?>
                        <?php endif; ?>

                        <div class="col-lg-12 col-sm-12 col-xs-12 b-people-readmore"><a href="/category/people" class="b-people-readmore__link">Читать дальше</a>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 b-lifestyle"><a href="/category/lifestyle" class="b-lifestyle__title">Образ жизни</a>
                        </div>
                        <?php
                        $posts = get_posts ("category=25&orderby=date&numberposts=4");
                        if ( $posts ) :
                            foreach ($posts as $post) : setup_postdata($post);
                                ?>
                                <!--post-->
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 b-news-container">
                                    <a href="<?php the_permalink(); ?>" class="b-news-container__link">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="b-news-container__img"><span class="b-news-container__title"><?php the_title();?></span>
                                    </a>
                                </div>
                            <?php endforeach; wp_reset_postdata(); ?>
                        <?php endif; ?>
                        <div class="col-lg-12 col-sm-12 col-xs-12 b-lifestyle-readmore"><a href="/category/lifestyle" class="b-lifestyle-readmore__link">Читать дальше</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            <div class="row b-main-lastrow">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="<?php echo get_site_url(); ?>/contacts" class="b-main-contacts__link">
                        <div class="b-main-contacts"><span class="b-main-contacts__title">Контакты</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="<?php echo get_site_url(); ?>/about" class="b-main-about__link">
                        <div class="b-main-about"><span class="b-main-about__title">О проекте</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="<?php echo get_site_url(); ?>/talants" class="b-main-talants__link">
                        <div class="b-main-talants"><span class="b-main-talants__title">Таланты</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
<?php get_footer(); ?>