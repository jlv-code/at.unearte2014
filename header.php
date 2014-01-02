<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<meta itemprop="name" content="jlvdesign.blogspot.com" />
<meta itemprop="author" content="José Viéitez" />
<meta itemprop="copyright" content="<?php print date('Y') ?>" />
<meta name="distributor" content="Local" />
<meta itemprop="contentRating" content="General" />
<meta name="robots" content="All" />
<meta name="revisit-after" content="7 days" />
<meta name="description" content="Sitio web relacionado con las investigaciones hechas por la Coordinación de Investigación de Artes Tradicionales de la Universidad Nacional Experimental de las Artes (UNEARTE) en Venezuela" />
<meta name="keywords" content="artes, artes tradicionales, investigación, investigaciones, unearte, universidad de artes, coordinación de investigación" />

<?php wp_head() ?>

</head>

<body <?php body_class() ?>>
	<header id="header">
		<div class="inner-header">
			<div class="banner-instituciones"><img src="<?php print get_template_directory_uri() ?>/images/banner-instituciones.jpg" alt="Banner Instituciones."></div>
			<div class="logo-artes">
				<div class="logo"><img src="<?php print get_template_directory_uri() ?>/images/logo-ciat.png" alt="Logo CIAT."></div>
				<div class="banner-artes"><img src="<?php print get_template_directory_uri() ?>/images/banner-artes.jpg" alt="Banner Artes."></div>
			</div>
			<nav class="nav-menu" role="navigation">
				<div class="search">
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
						<div class="inner-form">
							<input type="text" size="30" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Busqueda..."/>
						</div>
					</form>
				</div>
				<?php wp_nav_menu(array('theme_location' => 'primary')) ?>
			</nav>
		</div>
	</header>
	<div id="content"> <!-- ## Begins full-content -->