<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$imagen_1 = get_field('imagen_1');
$imagen_2 = get_field('imagen_2');


?>
<article class="producto w25 padding b-bottom">
	<a href="<?php the_permalink(); ?>">
		<picture class="intrinsic intrinsic--square">
			<img class="intrinsic-item hover" srcset="<?php echo $imagen_2['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>">
			<img class="intrinsic-item" srcset="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>">
		</picture>
		<h3><?php the_title(); ?></h3>
		<p>MXN <?php echo $product->get_price_html(); ?></p>
	</a>
</article>
