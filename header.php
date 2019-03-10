<?php
/**
 * Header Navbar Default
 *
 * Barra de navegação que engloba todas as páginas da plataforma.
 *
 * @package Hiperativa
 * @subpackage ABQRS
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="author" content="Hiperativa Design">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?php
			if (is_home() || is_front_page()) {
				bloginfo('name');
			}
			?>
		</title>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Archivo:400,500" rel="stylesheet">
		<?php
		// Adicionando css na plataforma
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'navbar', get_template_directory_uri() . '/components/css/navbar.css',false,'1.1','all');
		wp_enqueue_style( 'footer', get_template_directory_uri() . '/components/css/footer.css',false,'1.1','all');

		// Homepage - Css
		wp_enqueue_style( 'carousel', get_template_directory_uri() . '/components/css/carousel.css',false,'1.1','all');
		wp_enqueue_style( 'partner', get_template_directory_uri() . '/components/css/partner.css',false,'1.1','all');
		wp_enqueue_style( 'recent-posts', get_template_directory_uri() . '/components/css/recent-posts.css',false,'1.1','all');
		wp_enqueue_style( 'counters', get_template_directory_uri() . '/components/css/counters.css',false,'1.1','all');
		wp_enqueue_style( 'associated', get_template_directory_uri() . '/components/css/associated.css',false,'1.1','all');
		wp_enqueue_style( 'comments', get_template_directory_uri() . '/components/css/comments.css',false,'1.1','all');
		wp_enqueue_style( 'join-us', get_template_directory_uri() . '/components/css/join-us.css',false,'1.1','all');
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/components/slick/slick/slick.css',false,'1.1','all');
		wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/components/slick/slick/slick-theme.css',false,'1.1','all');
		// wp_enqueue_script('script', get_template_directory_uri());

		// Aboutpage - Css
		wp_enqueue_style( 'history', get_template_directory_uri() . '/components/css/history.css',false,'1.1','all');
		wp_enqueue_style( 'values', get_template_directory_uri() . '/components/css/values.css',false,'1.1','all');
		wp_enqueue_style( 'team', get_template_directory_uri() . '/components/css/team.css',false,'1.1','all');
		wp_enqueue_style( 'newsletter', get_template_directory_uri() . '/components/css/newsletter.css',false,'1.1','all');
		wp_enqueue_style( 'infos', get_template_directory_uri() . '/components/css/infos.css',false,'1.1','all');
		wp_enqueue_style( 'single-page', get_template_directory_uri() . '/components/css/single-page.css',false,'1.1','all');
		wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/components/css/woocommerce.css',false,'1.1','all');
		?>
		<script src="<?php bloginfo('template_url'); ?>/components/js/modernizr.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php include('template/navbar.php'); ?>