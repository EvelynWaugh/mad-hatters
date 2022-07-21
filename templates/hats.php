<div class="container">
	<div class="hat-posts">
		<span>Hat’s that bring the fire</span>
		<h3>Our Range</h3>
		<?php
		$args = array(
			'post_type'      => 'hat',
			'posts_per_page' => 4,
			'orderby'        => array( 'date', 'ASC' ),
		);

		?>
		
			<div class="hat-posts__wrapper">
			<?php
			$hat_query = new WP_Query( $args );
			while ( $hat_query->have_posts() ) :
				$hat_query->the_post();

				get_template_part(
					'template-parts/hat',
					'posts',
				);
			endwhile;
			wp_reset_postdata();
			?>
		
		</div>
		
		<div class="hat-posts__more">
			<a href="#" class="hat-posts__more-button">+ Show more</a>
			<div class="more-layer">More</div>
		</div>
	</div>
</div>
