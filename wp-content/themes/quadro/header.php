<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- <div class="loader flex align-center justify-center"><h2>QUADRO <span>[Calidad y Servicio]</span></h2></div> -->
    <!-- Navegación -->
    <header>
      <nav id="nav">
        <article class="container top padding">

          <?php $link_en_header = get_field('link_en_header', 'option'); ?>


          <a href="<?php echo $link_en_header['url']; ?>" class="hide-for-small"><?php echo $link_en_header['title']; ?></a>
          <?php

                      if( has_custom_logo() ){
                        the_custom_logo();
                      }else{
                        ?> <a href="<?php echo home_url( '/' ); ?>"><h1><?php bloginfo( 'name' ); ?> <?php
                      }

                      ?><span>[<span id="tagline">Calidad y Servicio</span>]</span></h1></a>
          <section class="icons">
            <article class="buscador b-bottom">
              <form role="search" method="get" id="searchform" class="searchform f-search float-left" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                      <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Escribe Algo" />
                      <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" placeholder="Type Anything" />
              </form>
            </article>
            <a href="account.html"><svg width="16px" height="18px" viewBox="0 0 16 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 52.6 (67491) - http://www.bohemiancoding.com/sketch -->
                <title>Account</title>
                <g id="Iconos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Icons" transform="translate(-24.000000, 0.000000)" stroke="#000000">
                        <path d="M31.5104167,8.8125 C29.3530544,8.8125 27.6041667,7.0636123 27.6041667,4.90625 C27.6041667,2.7488877 29.3530544,1 31.5104167,1 C33.667779,1 35.4166667,2.7488877 35.4166667,4.90625 C35.4166667,7.0636123 33.667779,8.8125 31.5104167,8.8125 Z M25,17.4930556 C25,13.6577448 28.1091337,10.5486111 31.9444444,10.5486111 C35.7797552,10.5486111 38.8888889,13.6577448 38.8888889,17.4930556 L25,17.4930556 Z" id="Account"></path>
                    </g>
                </g>
            </svg></a>
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Servicio al cliente' ) ) ); ?>" class="sac-icon"><svg width="19px" height="19px" viewBox="0 0 19 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 52.6 (67491) - http://www.bohemiancoding.com/sketch -->
                <title>Info</title>
                <g id="Iconos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Icons" transform="translate(-48.000000, 0.000000)">
                        <g id="Info" transform="translate(49.000000, 1.000000)">
                            <circle id="Oval-Copy-5" stroke="#000000" cx="8.33333333" cy="8.33333333" r="8.33333333"></circle>
                            <text id="?-copy" font-family="FoundersGrotesk-Medium, Founders Grotesk" font-size="10" font-weight="400" letter-spacing="-0.24" fill="#000000">
                                <tspan x="5.76166667" y="11">?</tspan>
                            </text>
                        </g>
                    </g>
                </g>
            </svg></a>
            <a href="<?php echo wc_get_cart_url(); ?>" class="carrito"><svg width="16px" height="19px" viewBox="0 0 16 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 52.6 (67491) - http://www.bohemiancoding.com/sketch -->
                <title>Bag</title>
                <g id="Iconos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Icons" transform="translate(-76.000000, 0.000000)">
                        <g id="Bag" transform="translate(76.000000, 0.000000)">
                            <path d="M11.6111111,5.0745241 L11.6111111,3 C11.6111111,1.61928813 10.491823,0.5 9.11111111,0.5 L6.77777778,0.5 C5.3970659,0.5 4.27777778,1.61928813 4.27777778,3 L4.27777778,5.42553355 C4.96634752,5.18213788 5.69663943,5.05555556 6.44444444,5.05555556 L11.1111111,5.05555556 C11.2786199,5.05555556 11.4453705,5.06190226 11.6111111,5.0745239 Z" id="Combined-Shape-Copy-2" stroke="#000000"></path>
                            <rect id="Rectangle-Copy" stroke="#000000" fill="#FFFFFF" x="0.5" y="4.66666667" width="14.8888889" height="12.8888889" rx="1"></rect>
                            <text id="2-copy" font-family="FoundersGrotesk-Medium, Founders Grotesk" font-size="10" font-weight="400" letter-spacing="-0.24" fill="#D10000">
                                <tspan x="5.72666667" y="14"><?php echo WC()->cart->get_cart_contents_count(); ?></tspan>
                            </text>
                        </g>
                    </g>
                </g>
            </svg></a>
          </section>
        </article>
        <article class="container bottom justify-center">
          <button class="m-dropdown show-for-small">Compra <span class="t">&#9660;</span></button>
          <div class="links">
            <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
            <a href="<?php echo $link_en_header['url']; ?>" class="show-for-small historia-movil"><?php echo $link_en_header['alt']; ?></a>
          </div>
        </article>
      </nav>
    </header>
