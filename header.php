<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<meta itemprop="name" content="jlvdesign.blogspot.com" />
<meta name="google-site-verification" content="hCKV45DOKcj-7BcL0C4yLji3UY4lNIT9At3_zKwyjgo" />
<meta itemprop="author" content="José Viéitez" />
<meta itemprop="copyright" content="<?php print date('Y') ?>" />
<meta name="distributor" content="Local" />
<meta itemprop="contentRating" content="General" />
<meta name="robots" content="All" />
<meta name="revisit-after" content="7 days" />
<meta name="description" content="Sitio web relacionado con las investigaciones hechas por la Coordinación de Investigación de Artes Tradicionales de la Universidad Nacional Experimental de las Artes (UNEARTE) en Venezuela" />
<meta name="keywords" content="artes, artes tradicionales, investigación, investigaciones, unearte, universidad de artes, coordinación de investigación" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31218036-2', 'unearte.edu.ve');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
  window.google_analytics_uacct = "UA-31218036-2";
</script>

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