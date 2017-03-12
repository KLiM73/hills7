<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="row b-article-info-1">
                <div class="col-lg-12 col-sm-12"><a href="<?php the_permalink(); ?>" class="b-article-info__title"><?php the_title(); ?></a>
                </div>
            </div>
            <div class="row b-article-head">
                <img src="<?php the_post_thumbnail_url(); ?>" class="b-article-head__img">
            </div>
            <div class="row b-article-info-2">
                <?php 
                $author = get_post_meta($post->ID, 'author', true);
                $photograph = get_post_meta($post->ID, 'photograph', true);
                if ($author != '')
                    { 
                        echo '<div class="col-lg-6"><span href="#" class="b-article-info__author">Автор: '; 
                        echo $author; 
                        echo '</span></div>'; 
                    }
                if ($photograph != '')
                    {
                        echo '<div class="col-lg-6"><span href="#" class="b-article-info__photo">Фотограф: '; 
                        echo $photograph; 
                        echo '</span></div>';
                    }
                 ?>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-article">
                    <?php while (have_posts()): the_post();?>
                    <?php the_content();?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <?php get_sidebar();?>
        </div>
        <div class="col-lg-9 b-article__socials"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-article-recent"><span class="b-article-recent__name">Похожие статьи</span>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b-article-recent__container">
                <?php related_posts(); ?>
        </div>
        <div class="col-lg-9 b-comments">
            <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
