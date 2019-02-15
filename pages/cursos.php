<?php
/*
 * Template Name: cursos
 *
 * Este é o template referente a página de Cursos da ABQRS. Criada, desenvolvida
 * e estilizada com muito amor e carinho pela Hiperativa design.
 *
 * @package Hiperativa
 * @subpackage ABQRS
 * @since 1.0.0
 */

get_header();

get_template_part('/template/cursopage/cursos', 'null');
get_template_part('/template/aboutpage/newsletter', 'null');
get_template_part('/template/cursopage/infos', 'null');

// Footer
get_footer();