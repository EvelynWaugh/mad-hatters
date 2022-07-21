<?php
$banner_title   = get_field( $args['title'] );
$banner_image_1 = get_field( $args['image_1'] );
$banner_image_2 = get_field( $args['image_2'] );
?>
<div class="container">
	<div class="top-banner">
		
		<div class="top-banner__left">
			<div class="top-banner__tag"><?php esc_html_e( 'Introducing', 'mad-hatters' ); ?></div>
			<h2 class="top-banner__title">
				<?php echo $banner_title; ?>
			
			</h2>
			<a href="" class="btn btn-secondary"><?php esc_html_e( 'Learn more', 'mad-hatters' ); ?></a>
		</div>
		<div class="top-banner__right">
			<div class="top-banner__images">
				<img src="<?php echo esc_url( $banner_image_1 ); ?>" />
				<img src="<?php echo esc_url( $banner_image_2 ); ?>" />
			</div>
			<div class="banner-circle"></div>
		</div>
	</div>
</div>
