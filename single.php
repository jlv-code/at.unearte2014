	<?php get_header() ?>
	<div class="inner-content">
		<section class="the-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<header class="the-title"><h1 class="title"><?php the_title() ?></h1></header>	
			<div class="the-meta">
				<div class="the-categories">Categorías: <span><?php the_category(' - ','single','') ?></span></div>
				<div class="the-tags">Etiquetas: <span><?php the_tags('',', ','') ?></span></div>
			</div>
			<article class="content"><?php the_content() ?></article>
		<?php endwhile; endif; ?>
		</section>
		<?php get_sidebar() ?>	
	</div>
	<?php get_footer() ?>