<div class="row padding-y">
	<div class="padding-y grid-9 header-page">
		<?php
		the_post();
		?>
		<div class="header-item">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="header-item">
			<div class="header-title">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>
			<div class="header-author">
				<div class="author-item">
					<?php the_author_posts_link(); ?>
				</div>
				<div class="author-item">
					<?php the_time( 'j F' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="padding-y grid-9 article-page">
		<div class="article-item">
			<?php the_content(); ?>
		</div>
		<div class="article-item">
			<div class="article-title">
				<h2>Últimas notícias</h2>
			</div>
			<div class="article-content">
				<?php
				$query = new WP_Query( 'cat=-3,-8' );
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="article-content-list">
					<div class="content-list-header">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="content-list-section bg-ciano-gainsboro">
						<div class="content-list-article content-list-category">
							<?php the_category( ', ' ); ?>
						</div>
						<div class="content-list-article">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
</div>