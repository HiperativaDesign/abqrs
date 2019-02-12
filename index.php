<?php
/**
 * Template Name: Home
 *
 * Este é o template referente ao site da ABQRS. Criada, desenvolvida
 * e estilizada com muito amor e carinho pela Hiperativa design.
 *
 * @package Hiperativa
 * @subpackage ABQRS
 * @since 1.0.0
 */

get_header();

// Incluindo o carousel
include("template/homepage/carousel.php");
include("template/homepage/partner.php");
include("template/homepage/recent-posts.php");
include("template/homepage/counters.php");
include("template/homepage/associated.php");
include("template/homepage/comments.php");
include("template/homepage/joinus.php");

// Footer
get_footer();