<?php
/*
 * Template Name: curso-template
 *
 * Este é o template referente a página Curso da ABQRS. Criada, desenvolvida
 * e estilizada com muito amor e carinho pela Hiperativa design.
 *
 * @package Hiperativa
 * @subpackage ABQRS
 * @since 1.0.0
 */

get_header();
?>

<div class="row padding-y bg-blue-smoke">
	<div class="padding-y grid-9 row-container">
		<div class="row-item grid-3 padding-y" style="margin: 0;">
			<h1 class="row-item-title">Curso de cromatografia líquida e gasosa</h1>
		</div>
	</div>
</div>
<div class="row padding-y">
	<div class="padding-y grid-9 row-container">
		<img src="<?php bloginfo('template_url'); ?>/design/layout/template/header-cursos-1.png" style="display: block; margin: auto; width: 100%;">
	</div>
</div>
<div class="bg-ciano-gainsboro padding-y row">
	<div class="grid-12 padding-y container-join-us">
		<div class="padding-y join-us-item">
			<div class="padding-y join-us-title">
				<p class="join-us-title-text">Garanta a sua vaga</p>
			</div>
		</div>
		<div class="padding-y join-us-item">
			<div class="padding-y content-button text-center">
				<a href="#junte-se" class="btn-primary" title="Associe-se agora!">INSCREVA-SE</a>
			</div>
		</div>
	</div>
</div>

<?php
// Footer
get_footer();