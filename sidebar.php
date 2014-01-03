		<aside class="sidebar">
			<div class="widgets-sidebar">
				<h2>Últimas investigaciones</h2>
				<?php $args = array('posts_per_page' => '5'); ?>
				<?php $the_query = new WP_Query($args);	?>
				<?php if ($the_query->have_posts()): ?>
					<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="entry">
						<div class="thumbnail-entry"><?php the_post_thumbnail('img-150x150'); ?></div>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<?php dynamic_sidebar('home-sidebar'); ?>
		</aside>