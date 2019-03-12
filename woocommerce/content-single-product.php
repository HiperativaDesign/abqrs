<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * Esse arquivo modifica o produto específico.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package abqrs/woocommerce/
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
// do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="row padding-y bg-blue-smoke">
	<div class="row-container padding-y grid-9">
		<div class="row-item">
			<h1 class="padding-y row-item-title"><?php the_title(); ?></h1>
		</div>
	</div>
</div>
<div class="row padding-y">
	<div class="row-container padding-y grid-9">
		<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>

			<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>

			<div class="summary entry-summary">
				<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
				?>
			</div>

			<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * 
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
		</div>
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
				<!-- <a href="#junte-se" class="btn-primary" title="Associe-se agora!">INSCREVA-SE</a> -->
			</div>
		</div>
	</div>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
