<header class="carousel">
	<?php 
	query_posts('post_type=slide');
	while(have_posts()) : the_post();
	?>
	<div class="item">
		<div class="carousel-banner">
			<?php the_post_thumbnail('full', array('class' => 'item-thumnail')); ?>
		</div>
		<div class="carousel-content">
			<div class="carousel-title">
				<h1 class="carousel-title-text"><?php the_title(); ?></h1>
			</div>
			<div class="carousel-subtitle">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php 
	endwhile;
	wp_reset_query();
	?>
</header>