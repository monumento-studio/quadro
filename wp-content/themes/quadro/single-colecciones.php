<?php

get_header();

//Template Name: Template Colecciones

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

 ?>

    <!-- Header -->
    <section class="cat-title col-banner container">
      <!-- Imagen Banner -->
      <section class="container cat-banner" style="background-image: url('<?php echo $url; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;"></section>
      <article class="w50">
        <?php while (have_posts()) : the_post();/* Start loop */ ?>
                <?php the_content(); ?>
        <?php endwhile; /* End loop */ ?>
      </article>

    </section>

    <section class="container flex mobile-column">



      <?php
          if( have_rows('productos') ):
          // loop through the rows of data
              while ( have_rows('productos') ) : the_row();
              //vars
              $imagen_1_del_producto = get_sub_field('imagen_1_del_producto');
              $imagen_2_del_producto = get_sub_field('imagen_2_del_producto');
              $titulo = get_sub_field('titulo');
              $precio = get_sub_field('precio');
              $link_del_producto = get_sub_field('link_del_producto');
              ?>


              <article class="producto w25 padding b-bottom">
                <a href="<?php echo $link_del_producto['url']; ?>">
                  <picture class="intrinsic intrinsic--square">
                    <img class="intrinsic-item hover" srcset="<?php echo $imagen_2_del_producto['url']; ?>" alt="<?php echo $imagen_2_del_producto['alt']; ?>">
                    <img class="intrinsic-item" srcset="<?php echo $imagen_1_del_producto['url']; ?>" alt="<?php echo $imagen_1_del_producto['alt']; ?>">
                  </picture>
                  <h4><?php echo $titulo; ?></h4>
                  <p><?php echo $precio; ?></p>
                </a>
              </article>



          <?php
          endwhile;

          else :

              // no rows found

          endif;
      ?>



      
    </section>

  <?php get_footer(); ?>
