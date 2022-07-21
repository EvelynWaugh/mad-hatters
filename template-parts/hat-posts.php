<div class="hat-posts__block">
		
	<div class="hat-posts__image">
		<?php the_post_thumbnail( 'full' ); ?>
	</div>

	<div class="hat-posts__content">
		<div class="hat-posts__title">
			<?php echo wp_kses_post( get_the_title() ); ?>
		</div>
		<div class="hat-posts__text">
			<?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), 25 ) ); ?>
		</div>
	</div>
		
</div>
