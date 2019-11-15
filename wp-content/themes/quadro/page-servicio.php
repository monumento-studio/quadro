<?php

get_header();


//Template Name: Template Servicio al cliente

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );


?>

    <!-- Header -->
    <section class="cat-title sac container black">
      <!-- Imagen Banner -->
      <article class="w50">
        <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
?>
      </article>
    </section>

    <!-- Textos -->



    <?php

/*
*  Loop through a Flexible Content field and display it's content with different views for different layouts
*/

while(the_flexible_field("secciones")): ?>

	<?php if(get_row_layout() == "textos"): // layout: textos

    $texto_izquierda = get_sub_field('texto_izquierda');
    $texto_derecha = get_sub_field('texto_derecha');

    ?>

    <section class="container intro-categorias flex justify-between mobile-column">
      <article class="intro-categoria w50 padding2x b-bottom">
        <?php echo $texto_izquierda; ?>
      </article>

      <article class="intro-categoria w50 padding2x b-bottom">
        <?php echo $texto_derecha; ?>
      </article>
    </section>


	<?php elseif(get_row_layout() == "imagen_texto_negro"): // layout: imagen_texto_negro

    $imagen_negro = get_sub_field('imagen_negro');
    $texto_negro = get_sub_field('texto_negro');

    ?>

    <section class="container b-bottom">
      <article class="slide mobile-column flex justify-between">
        <div class="left w50 flex justify-center padding">
          <div class="flex justify-center align-center flex-column padding2x">
            <?php echo $texto_negro; ?>
          </div>
        </div>

        <div class="right w50 flex padding">
          <picture class="intrinsic intrinsic--square">
            <source media="(min-width: 500px)" srcset="<?php echo $imagen_negro['url']; ?>">
            <img class="intrinsic-item" srcset="<?php echo $imagen_negro['url']; ?>" alt="<?php echo $imagen_negro['alt']; ?>">
          </picture>
        </div>
      </article>
    </section>

	<?php elseif(get_row_layout() == "imagen_texto_blanco"): // layout: imagen_texto_blanco

    $imagen_blanco = get_sub_field('imagen_blanco');
    $texto_blanco = get_sub_field('texto_blanco');

  ?>

  <!-- Servicio al cliente -->
  <section class="container intro-sac flex justify-between mobile-column">
    <article class="w50 padding b-bottom">
      <picture class="intrinsic intrinsic--square">
        <source media="(min-width: 500px)" srcset="<?php echo $imagen_blanco['url'] ?>">
        <img class="intrinsic-item" srcset="<?php echo $imagen_blanco['url'] ?>" alt="<?php echo $imagen_blanco['alt'] ?>">
      </picture>
    </article>

    <article class="w50 flex justify-center padding b-bottom">
      <div class="flex justify-center align-center flex-column padding2x">
        <?php echo $texto_blanco; ?>
      </div>
    </article>
  </section>

	<?php endif; ?>

<?php endwhile; ?>



<?php get_footer(); ?>
