<?php
/*
 * Template Name: sobre
 *
 * Este é o template referente a página Quem Somos da ABQRS. Criada, desenvolvida
 * e estilizada com muito amor e carinho pela Hiperativa design.
 *
 * @package Hiperativa
 * @subpackage ABQRS
 * @since 1.0.0
 */

get_header();

get_template_part('/template/aboutpage/history', 'null');
get_template_part('/template/aboutpage/values', 'null');
get_template_part('/template/aboutpage/team', 'null');
get_template_part('/template/aboutpage/newsletter', 'null');

// Footer
get_footer();