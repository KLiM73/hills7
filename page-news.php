<?php get_header(); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <?php
                            $posts = get_posts ("category=2&orderby=date");
                            if ( $posts ) :foreach ($posts as $post) : setup_postdata($post);
                        ?>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-news-news">
                            <a href="<?php the_permalink(); ?>" class="b-news-news__link">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="b-news-news__img">
                                <div class="b-news-news__container"><span class="b-news-news__title"><?php the_title();?></span>
                                    <p class="b-news-news__text"><?php the_excerpt(); ?></p>
                                </div>
                            </a>
                        </div>

                        <?php endforeach; wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
<?php get_footer(); ?>