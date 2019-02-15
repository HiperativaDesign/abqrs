<div class="row padding-y">
	<div class="padding-y grid-9 row-container">
		<?php
		$query = new WP_Query( 'cat=-3,-8' );
		if ( $query->have_posts() ): $query->the_post(); ?>
		<div class="row-item">
			<div class="img-post">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<div class="row-item">
			<?php the_category( ', ' ); ?>
		</div>
		<div class="row-item">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="row-item">
			<?php the_content(); ?>
		</div>
		<div class="card-footer-item">
			<?php the_time( 'j F' ); ?>
		</div>
		<?php
		wp_reset_postdata();
		else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>