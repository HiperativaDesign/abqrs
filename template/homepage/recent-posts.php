<div class="post bg-blue">
	<div class="grid-12 post-container">
		<div class="post-title">
			<h2 class="post-title-text text-center color-white">Ultimos posts</h2>
		</div>
		<div class="post-content">
			<?php
			$query = new WP_Query( 'cat=-3,-8' );
			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="card">
				<div class="card-header">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="card-body">
					<div class="card-body-item the_category">
						<?php the_category( ', ' ); ?>
					</div>
					<div class="card-body-item">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</div>
					<div class="card-body-item">
						<div class="card-footer">
							<div class="card-footer-item">
								<i class="icon-blog-author"></i>
							</div>
							<div class="card-footer-item">
								<?php the_author_posts_link(); ?>
							</div>
						</div>
						<div class="card-footer">
							<div class="card-footer-item">
								<i class="icon-blog-clock"></i>
							</div>
							<div class="card-footer-item">
								<?php the_time( 'j F' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile;
			wp_reset_postdata();
			else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>