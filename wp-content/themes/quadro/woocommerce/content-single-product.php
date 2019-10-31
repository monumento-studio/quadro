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
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */

do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}


$informacion_extra = get_field('informacion_extra');
$texto_pr = get_field('texto_pr');

?>


<section class="producto-info container b-bottom flex mobile-column">
	<article class="w62 producto-imagenes padding">
		<div class="breadcrumbs padding hide-for-small">
			<ul>
				<?php woocommerce_breadcrumb(); ?>
			</ul>
		</div>


		<?php
        if( have_rows('imagenes_producto') ):
        // loop through the rows of data
            while ( have_rows('imagenes_producto') ) : the_row();
            //vars
            $imagen_producto = get_sub_field('imagen_producto');
            ?>

            <img src="<?php echo $imagen_producto['url']; ?>" alt="<?php echo $imagen_producto['alt']; ?>">



        <?php
        endwhile;

        else :

            // no rows found

        endif;
    ?>
	</article>

	<article class="w37 producto-specs padding">
		<div class="sticky">
			 <?php



      				/**
      				 * woocommerce_single_product_summary hook.
      				 *
      				 * @hooked woocommerce_template_single_title - 5
      				 * @hooked woocommerce_template_single_rating - 10
      				 * @hooked woocommerce_template_single_price - 10
      				 * @hooked woocommerce_template_single_excerpt - 20 // Removed
      				 * @hooked woocommerce_template_single_add_to_cart - 30
      				 * @hooked woocommerce_template_single_meta - 40
      				 * @hooked woocommerce_template_single_sharing - 50
      				 */
      				do_action( 'woocommerce_single_product_summary' );
			?>

			<article class="specs flex mobile-column">

				<?php
						if( have_rows('modulos') ):
						// loop through the rows of data
								while ( have_rows('modulos') ) : the_row();
								//vars
								$informacion = get_sub_field('informacion');
								?>

								<div class="w50">
									<?php echo $informacion; ?>
								</div>


						<?php
						endwhile;

						else :

								// no rows found

						endif;
				?>



			</article>


		</div>
	</article>
</section>

<section class="container flex padding2x sac-banner flex justify-center align-center b-bottom flex-column">
	<article class="w50">
		<?php echo $informacion_extra; ?>
	</article>
</section>

<!-- Productos -->
<section class="container flex mobile-column">
	<article class="w100 padding b-bottom">
		<h4><?php echo $texto_pr; ?></h4>
	</article>
	<section class="flex w100">
		<?php

				/**
					 * Hook: woocommerce_after_single_product_summary.
					 *
					 * @hooked woocommerce_output_product_data_tabs - 10
					 * @hooked woocommerce_upsell_display - 15
					 * @hooked woocommerce_output_related_products - 20
				*/

				do_action( 'woocommerce_after_single_product_summary' );

			?>
	</section>
</section>
