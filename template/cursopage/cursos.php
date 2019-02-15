<div class="post">
	<div class="grid-9 post-container">
		<div class="post-title" style="margin: auto;">
			<h2 class="post-title-text padding-l-10">Cursos</h2>
		</div>
		<div class="post-content">
			<?php
			// query_posts('post_type=curso');
			// while(have_posts()) : the_post();
			?>
			<div class="card">
				<div class="card-header">
					<?php //the_post_thumbnail(); ?>
					<img src="<?php bloginfo('template_url'); ?>/design/layout/template/foto-curso.png">
				</div>
				<div class="card-body">
					<div class="card-body-item">
						<!-- <h2><a href="<?php // the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php // the_title_attribute(); ?>"><?php // the_title(); ?></a></h2> -->
						<h2><a href="curso-de-cromatografia-liquida-e-gasosa" rel="bookmark" title="Link para o curso">Curso de cromatografia líquida e gasosa</a></h2>
					</div>
					<div class="card-body-item">
						<div class="card-footer">
							<!-- <p><?php //the_content(); ?></p> -->
							<p></p>
						</div>
					</div>
				</div>
			</div>
			<?php
			// endwhile;
			// wp_reset_query();
			?>
		</div>
	</div>
</div>
<div class="padding-y bg-ciano-smoke row">
	<div class="grid-12 padding-y row-container">
		<div class="padding-y grid-6 row-item">
			<h2 class="row-item-title text-center">Descontos nos melhores cursos e palestras:</h2>
			<h2 class="row-item-title text-center">Certificação e conhecimento acessível para Associados</h2>
		</div>
		<div class="padding-y grid-6 row-item">
			<p class="row-item-text">Nossa prioridade #1 é fornecer as melhores ferramentas para que profissionais possam aprimorar suas qualificações . Acreditamos nos cursos e palestras que desenvolvemos e que colaboramos para transformar a vida dos nossos associados e de todos os profissionais do segmento.</p>
		</div>
		<div class="padding-y grid-6 row-item text-center">
			<a href="#" class="btn-primary" title="associe-se">ASSOCIE-SE</a>
		</div>
	</div>
</div>