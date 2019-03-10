<?php
/**
 * Template Name: WooCommerce
 *
 * Este é o template referente ao woocommerce. Criada, desenvolvida
 * e estilizada com muito amor e carinho pela Hiperativa design.
 *
 * @package Hiperativa
 * @subpackage ABQRS
 * @since 1.0.0
 */

get_header();
?>
<div class="row padding-y">
	<div class="row-container grid-9 padding-y">
	<?php woocommerce_content(); ?>
</div>

<?php get_footer(); ?>
