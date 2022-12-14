<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_media
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp_media' ); ?></a>

	<header>
		<div class="header-col">
			<?php the_custom_logo() ?>
		</div>
		<div class="header-col">
			<?php wp_nav_menu( array( 'theme_location'=>'header' )) ?>
		</div>
		<div class="header-col">
			<?php wp_nav_menu(['theme_location'=>'header_right']) ?>
		</div>
	</header>
	
