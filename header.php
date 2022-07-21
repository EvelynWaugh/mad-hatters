<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mad_Hatters
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
<header class="top-header">
	<span class="hat-decorator">
		<svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g opacity="0.3">
			<circle cx="1.5" cy="1.5" r="1.5" fill="#23242C"/>
			<circle cx="1.5" cy="7.5" r="1.5" fill="#23242C"/>
			<circle cx="7.5" cy="1.5" r="1.5" fill="#23242C"/>
			<circle cx="7.5" cy="7.5" r="1.5" fill="#23242C"/>
			</g>
		</svg>
	</span>
	<div class="hat-logo">
		<?php the_custom_logo(); ?>

	</div>

	<div class="menu-wrapper">
		
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'top_menu',
				'container'      => false,
				'menu_class'     => 'main-menu',
			)
		);
		?>
		
		
	</div>
	<div class="mobile-bar">
		<svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path opacity="0.01" fill-rule="evenodd" clip-rule="evenodd" d="M0 0.430481V26.6598H24.7881V0.430481H0Z" fill="#1C8FF8" fill-opacity="0.338428"/>
			<path d="M5.16406 13.6712H19.6238" stroke="#140F26" stroke-width="1.03284" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M5.16406 8.62714H19.6238" stroke="#140F26" stroke-width="1.03284" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M5.16406 18.7153H19.6238" stroke="#140F26" stroke-width="1.03284" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>

	</div>

</header>
