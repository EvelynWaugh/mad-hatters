<?php
$sticky = get_option( 'sticky_posts' );
$args   = array(
	'post_type'   => 'post',
	'post__in'    => $sticky,
	'numberposts' => 1,

);
$featured_post = get_posts( $args );

?>
<div class="container">
	<?php foreach ( $featured_post as $post ) : ?>
		<?php setup_postdata( $post ); ?>

	<div class="hat-featured">
		
		<div class="hat-featured__left">
			<?php the_post_thumbnail( 'full' ); ?>
		</div>
		<div class="hat-featured__right">
			<?php $cats = wp_get_post_terms( $post->ID, 'category' ); ?>
			<?php if ( ! empty( $cats ) ) : ?>
				<div class="hat-featured__category">
					<?php echo wp_kses_post( $cats[0]->name ); ?>

				</div>
			<?php endif; ?>
			<div class="hat-featured__title"><?php echo wp_kses_post( get_the_title() ); ?></div>
			<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>"  class="btn btn-secondary"><?php esc_html_e( 'Learn more', 'mad-hatters' ); ?></a>
		</div>
	</div>

	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
</div>
