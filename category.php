	<?php get_header(); ?>
	<div class="inner-content">
		<section class="the-content">
			<header class="the-title"><h1 class="title">Investigaciones</h1></header>	
				<article class="content">
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<div class="item-content">
						<div class="post-img">
							<?php if (!has_post_thumbnail()): ?>
							<img src="<?php print get_template_directory_uri() ?>/images/default.jpg"/>
							<?php else: the_post_thumbnail('thumbnail'); endif; ?>
						</div>
						<div class="post-title">
							<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
						</div>
						<div class="post-excerpt">
							<?php the_excerpt() ?>
						</div>
					</div>
					<?php endwhile; endif; ?>
				</article>
				<nav class="posts-nav">
					<?php atunearte_post_paging() ?>
				</nav>
		</section>
		<?php get_sidebar() ?>
	</div>
	<?php get_footer(); ?>