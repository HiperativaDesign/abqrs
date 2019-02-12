<div class="padding-y row">
	<div class="grid-12 row-container">
		<div class="padding-y grid-6 row-item">
			<h2 class="row-item-title text-center">Descontos nos melhores cursos e palestras:</h2>
		</div>
		<div class="padding-y grid-6 row-item">
			<p class="row-item-text text-center">Nossa prioridade #1 é fornecer as melhores ferramentas para que profissionais possam aprimorar suas qualificações . Acreditamos nos cursos e palestras que desenvolvemos e que colaboramos para transformar a vida dos nossos associados e de todos os profissionais do segmento.</p>
		</div>
	</div>
	<div class="comment-slider">
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