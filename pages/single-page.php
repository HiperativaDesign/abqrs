<div class="row padding-y">
	<div class="padding-y grid-9 row-container">
		<?php
		the_post();
		?>
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
	</div>
</div>