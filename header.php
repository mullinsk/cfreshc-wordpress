<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cfreshc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cfreshc' ); ?></a>

	<header id="masthead" class="cfr-site-header">
		<div class="cfr-utility-nav">
			<div class="cfr-wrapper cfr-utility-nav-content">
				<ul>
					<li>
						<a href="https://www.facebook.com/CFReSHC1/" class="cfr-facebook">
							<i class="fab fa-facebook"></i>
							<span class="acc-hidden">Facebook</span>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/CFReSHC" class="cfr-twitter">
							<i class="fab fa-twitter"></i>
							<span class="acc-hidden">Twitter</span>
						</a>
					</li>
				</ul>
			</div>
		</div><!-- .site-branding -->
		
		<div class="cfr-nav-wrapper">
			<div class="cfr-wrapper">
			<?php the_custom_logo(); ?>
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cfreshc' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			</div>
		</nav><!-- #site-navigation -->
			
		</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
