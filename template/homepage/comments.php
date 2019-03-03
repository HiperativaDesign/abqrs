<div class="padding-y row">
	<div class="grid-10 row-container">
		<div class="padding-y grid-5 row-item">
			<h2 class="row-item-title text-center">Opinião dos associados</h2>
		</div>
		<div class="padding-y grid-5 row-item">
			<p class="row-item-text text-center">Nós temos muito orgulho do trabalho que desenvolvemos, recebemos o incentivo das pessoas que fazem os cursos. Veja alguns depoimentos que recebemos das pessoas associadas e que participam do nosso curso!</p>
		</div>
	</div>
	<div class="comment-slider grid-10">
		<?php 
		query_posts('post_type=comment');
		while(have_posts()) : the_post();
		?>
		<div class="comment-item">
			<div class="item-container">
				<div class="comment-item-text">
					<div class="comment-image"></div>
					<?php the_content(); ?>
				</div>
				<div class="comment-item-author">
					<div class="author-image">
						<?php the_post_thumbnail('full', array('class' => 'item-thumnail')); ?>
					</div>
					<div class="author-name">
						<h1 class="carousel-title-text"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<?php 
		endwhile;
		wp_reset_query();
		?>
	</div>
</div>