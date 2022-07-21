<?php get_header(); ?>

<?php
get_template_part(
	'templates/banner',
	'',
	array(
		'title'   => 'banner_title',
		'image_1' => 'banner_img_1',
		'image_2' => 'banner_img_2',
	)
);
?>
<?php get_template_part( 'templates/advantages', '', array( 'advantages' => 'hat_adv' ) ); ?>
<?php get_template_part( 'templates/featured' ); ?>
<?php get_template_part( 'templates/hats' ); ?>
<?php get_template_part( 'templates/cites' ); ?>
<?php get_template_part( 'templates/subscribe' ); ?>

<?php
 get_footer();
