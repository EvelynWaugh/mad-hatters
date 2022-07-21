<?php
$advantages = $args['advantages']; ?>

<div class="container">
	<div class="hat-advantages">
		<div class="hat-advantages__items">
			<?php
			while ( have_rows( $advantages ) ) :
				the_row();
				$adv_title   = get_sub_field( 'title' );
				$adv_content = get_sub_field( 'content' );
				?>
			<div class="hat-advantages__item">
				<div class="hat-advantages__head">
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
					<span><?php echo wp_kses_post( $adv_title ); ?></span>
				</div>
				<div class="hat-advantages__body">
				<?php echo wp_kses_post( $adv_content ); ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
