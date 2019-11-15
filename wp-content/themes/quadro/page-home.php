<?php //Template Name: Template Home ?>

<?php get_header();

$descuento_1 = get_field('descuento_1');
$texto_descuento_1 = get_field('texto_descuento_1');
$descuento_2 = get_field('descuento_2');
$texto_descuento_2 = get_field('texto_descuento_2');
$imagen_custom = get_field('imagen_custom');
$texto_custom = get_field('texto_custom');



?>




    <?php if( $descuento_1 == 'active' ): ?>

      <!-- Banner Promocional -->
      <section class="container promo">
        <article>
          <?php echo $texto_descuento_1; ?>
        </article>
      </section>

    <?php endif; ?>



    <!-- Slider de Colecciones -->
    <section class="container colecciones b-bottom">

    <?php
        if( have_rows('slider_colecciones') ):
        // loop through the rows of data
            while ( have_rows('slider_colecciones') ) : the_row();
            //vars
            $texto_slider = get_sub_field('texto_slider');
            $imagen_slider = get_sub_field('imagen_slider');
            ?>

            <article class="slide mobile-column flex justify-between">
              <div class="left w50 flex justify-center padding">
                <div class="flex justify-center align-center flex-column">
                  <?php echo $texto_slider; ?>
                </div>
              </div>

              <div class="right w50 flex padding">
                <picture class="intrinsic intrinsic--square">
                  <source media="(min-width: 500px)" srcset="<?php echo $imagen_slider['url'] ?>">
                  <img class="intrinsic-item" srcset="<?php echo $imagen_slider['url'] ?>" alt="<?php echo $imagen_slider['alt'] ?>">
                </picture>
              </div>
            </article>



        <?php
        endwhile;

        else :

            // no rows found

        endif;
    ?>

  </section>






    <!-- Intro Categorías -->
<section class="container intro-categorias flex justify-between mobile-column">
    <?php
        if( have_rows('modulo_de_categoria') ):
        // loop through the rows of data
            while ( have_rows('modulo_de_categoria') ) : the_row();
            //vars
            $imagen_1_categoria = get_sub_field('imagen_1_categoria');
            $imagen_2_categoria = get_sub_field('imagen_2_categoria');
            $texto_categoria = get_sub_field('texto_categoria');
            $link_categoria = get_sub_field('link_categoria');

            ?>

            <article class="intro-categoria w50 padding b-bottom">

              <a href="<?php echo $link_categoria['url']; ?>">

                <picture class="intrinsic intrinsic--4x3">
                  <img class="intrinsic-item hover" srcset="<?php echo $imagen_2_categoria['url']; ?>" alt="">
                  <img class="intrinsic-item" srcset="<?php echo $imagen_1_categoria['url']; ?>" alt="<?php echo $imagen_1_categoria['alt']; ?>">
                </picture>

                  <?php echo $texto_categoria; ?>
                  <span class="button"><?php echo $link_categoria['title']; ?></span>

              </a>

            </article>



        <?php
        endwhile;

        else :

            // no rows found

        endif;
    ?>

    </section>



    <!-- Diseñador -->

<section class="container disenador flex justify-between mobile-column">

    <?php
        if( have_rows('disenadores') ):
        // loop through the rows of data
            while ( have_rows('disenadores') ) : the_row();
            //vars
            $imagen_disenador = get_sub_field('imagen_disenador');
            $texto_disenador = get_sub_field('texto_disenador');
            $link_a_disenador = get_sub_field('link_a_disenador');
            ?>

            <article class="intro-disenador w33 padding b-bottom">
              <a href="<?php echo $link_a_disenador['url'] ?>">
                <picture class="intrinsic intrinsic--square">
                  <source media="(min-width: 500px)" srcset="<?php echo $imagen_disenador['url']; ?>">
                  <img class="intrinsic-item" srcset="<?php echo $imagen_disenador['url']; ?>" alt="<?php echo $imagen_disenador['alt']; ?>">
                </picture>
                <?php echo $texto_disenador; ?>
              </a>
            </article>


        <?php
        endwhile;

        else :

            // no rows found

        endif;
    ?>

  </section>


  <?php if( $descuento_2 == 'active' ): ?>

    <!-- Oferta -->
    <section class="container oferta-banner flex justify-between mobile-column">
        <?php echo $texto_descuento_2; ?>
    </section>

  <?php endif; ?>



    <!-- Servicio al cliente -->
    <section class="container intro-sac flex justify-between mobile-column">
      <article class="w50 padding b-bottom">
        <picture class="intrinsic intrinsic--square">
          <source media="(min-width: 500px)" srcset="<?php echo $imagen_custom['url']; ?>">
          <img class="intrinsic-item" srcset="<?php echo $imagen_custom['url']; ?>" alt="<?php echo $imagen_custom['alt']; ?>">
        </picture>
      </article>

      <article class="w50 flex justify-center padding b-bottom">
        <div class="flex justify-center align-center flex-column padding2x">
          <?php echo $texto_custom; ?>
        </div>
      </article>
    </section>

    <section class="newsletter">
      <button class="close">&times;</button>
      <article class="nl-form">
        <h3><span>[Newsletter]</span></h3>
        <p>Suscríbete a nuestro newsletter para recibir notificaciones sobre nuestras promociones</p>
        <input type="text" placeholder="Correo" tabindex="2">
        <button type="submit" name="button" class="button" tabindex="3">Regístrate</button>
      </article>
    </section>

    <?php get_footer(); ?>

    <script>

    jQuery(document).ready(function($) {


      $('body').append('<div class="loader flex align-center justify-center"><h2>QUADRO <span>[Calidad y Servicio]</span></h2></div>');


      function news(){
        $('.newsletter').addClass('show2');
        $('.container, #nav').addClass('blur');
      }

      function loader(){
        $('.loader h2').css({
          "opacity" : "1",
          "-webkit-transform" : "translateY(0)",
          "-moz-transform" : "translateY(0)",
          "-o-transform" : "translateY(0)",
          "transform" : "translateY(0)"
        });
      }

      function loaderMain(){
        $('.loader').css({
          "opacity" : "0"
        });
      }

      function loaderHide(){ $('.loader').hide(); }

      setTimeout(loader,1000);
      setTimeout(loaderMain,4000);
      setTimeout(loaderHide,4500);
      setTimeout(news,10000);

      $('.close').click(function(){
        $('.newsletter').removeClass('show2');
        $('.container, #nav').removeClass('blur');
      });


      });



    </script>
