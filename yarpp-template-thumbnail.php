<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<?php if (have_posts()):?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b-article-recent__container">
			<a href="<?php the_permalink() ?>" class="b-article-recent__link">
				<img src="<?php the_post_thumbnail_url(); ?>" class="b-article-recent__img"><span class="b-article-recent__title"><?php the_title(); ?></span>
			</a>
		</div>
	<?php endwhile; ?>
<?php endif; ?>	
