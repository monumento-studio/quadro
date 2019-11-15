<?php

// Setup


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'General',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false,
        'icon_url'        => 'dashicons-admin-multisite',
        'position'         => 7
    ));


}


// Includes

include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );


// Hooks

add_action( 'wp_enqueue_scripts', 'ql_enqueue' );
add_action( 'after_setup_theme', 'ql_setup_theme' );



//Custom sort

// add_action('wp_enqueue_scripts', 'my_select_dropdown');
// function my_select_dropdown() {
//         if( is_shop() || is_product_category() ) {
//         wp_enqueue_style( 'select2');
//         wp_enqueue_script( 'selectinit', get_stylesheet_directory_uri() . '/js/select2-init.js', array( 'selectWoo' ), '1.0.0', true );
//         }
// }



add_filter('woocommerce_catalog_orderby', 'wc_customize_product_sorting');

function wc_customize_product_sorting($sorting_options){
    $sorting_options = array(
        'menu_order' => __( 'Acomodar por :', 'woocommerce' ),
        'popularity' => __( 'Acomodar por popularidad', 'woocommerce' ),
        'rating'     => __( 'Acomodar por promedio de evaluación', 'woocommerce' ),
        'date'       => __( 'Acomodar por más nuevo', 'woocommerce' ),
        'price'      => __( 'Acomodar por precio: bajo a alto', 'woocommerce' ),
        'price-desc' => __( 'Acomodar por precio: alto a bajo', 'woocommerce' ),
    );

    return $sorting_options;
}




global $woocommerce;

if( version_compare( $woocommerce->version, '3.0.0', ">=" ) ) {

	function avia_woocommerce_gallery_thumbnail_description($img, $attachment_id, $post_id, $image_class ) {
	    return $img;
	}
	function avia_woocommerce_post_thumbnail_description($img, $post_id){
	    return $img;
	}

}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
