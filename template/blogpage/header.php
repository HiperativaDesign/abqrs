<!-- <div class="row padding-y">
	<div class="padding-y grid-9 row-container">
		<div class="row-item padding-y">
			<div class="blog-main">
				<div class="blog-first">
					<div class="blog-header">
					</div>
					<div class="blog-body">
						<div class="blog-title">
							<h1></h1>
						</div>
						<div class="blog-content">
							<p></p>
						</div>
					</div>
					<div class="blog-footer">

					</div>
				</div>
				<div class="blog-secondary">
					<div class="blog-item">
					</div>
				</div>
			</div>			 
		</div>
	</div>
</div> -->
<div class="post bg-blue-smoke">
	<div class="grid-9 post-container">
		<div class="row-item padding-y">
			<h1 class="row-item-title bold" style="font-size: 1.4em">Notícia</h1>
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
<div class="row padding-y">
	<div class="grid-10 padding-y newsletter-container">
		<div class="newsletter-item">
			<div class="newsletter-title">
				<h2>Receba a nossa Newsletter</h2>
			</div>
		</div>
		<div class="newsletter-item">
			<form class="newsletter" action="" method="">
				<div class="form-group">
					<input type="email" name="email" class="newsletter-input" required>
					<input type="button" name="send" class="newsletter-button button-blue" value="Enviar">
				</div>
			</form>
		</div>
	</div>
</div>