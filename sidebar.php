		<aside class="sidebar">
			<div class="widgets-sidebar">
				<h2>Últimas investigaciones</h2>
				<?php $args = array('posts_per_page' => '5','category_name'=>'investigaciones'); ?>
				<?php $the_query = new WP_Query($args);	?>
				<?php if ($the_query->have_posts()): ?>
					<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
					<article id="post-<?php the_ID(); ?>" class="entry">
						<div class="thumbnail-entry">
							<?php if (!has_post_thumbnail()): ?>
							<img src="<?php print get_template_directory_uri() ?>/images/default.jpg"/>
							<?php else: the_post_thumbnail('img-150x150'); endif; ?>
						</div>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
			<?php dynamic_sidebar('home-sidebar'); ?>
		</aside>