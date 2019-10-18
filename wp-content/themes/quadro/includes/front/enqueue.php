<?php

function ql_enqueue(){

    wp_register_style( 'ql_estilos', get_template_directory_uri() . '/assets/css/style.css' );




    wp_enqueue_style( 'ql_estilos' );










    wp_register_script( 'ql_action', get_template_directory_uri() . '/assets/js/action.js', array(), false, true );
    wp_register_script( 'ql_tween', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenLite.min.js', array(), false, true );
    wp_register_script( 'ql_tweenmx', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TimelineMax.min.js', array(), false, true );
    wp_register_script( 'ql_css', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/CSSPlugin.min.js', array(), false, true );
    wp_register_script( 'ql_text', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/TextPlugin.min.js', array(), false, true );
    wp_register_script( 'ql_slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), false, true );


    wp_enqueue_script("jquery");
    wp_enqueue_script( 'ql_tween' );
    wp_enqueue_script( 'ql_tweenmx' );
    wp_enqueue_script( 'ql_css' );
    wp_enqueue_script( 'ql_text' );
    wp_enqueue_script( 'ql_slick' );
    wp_enqueue_script( 'ql_action' );

}
