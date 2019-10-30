<?php get_header(); ?>

<div class="pagina-contenedora">


    <!-- Header -->
    <section class="cat-title container">
      <article class="w33">
        <h2><?php the_title(); ?></h2>
        <p><?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();


    // Display optional category description
     if ( category_description() ) : ?>
     <?php echo category_description(); ?>
    <?php endif;



    endwhile;
endif;
?></p>
      </article>

      <!-- Filtros -->
      <section class="container filtros flex padding">
        <article class="w50 filtro">
          <button class="m-dropdown">Filtros <span class="t">&#9660;</span></button>
        </article>
        <article class="w50 filtro">
          <button class="m-dropdown">Acomodar por: <span class="t">&#9660;</span></button>
        </article>
      </section>
    </section>

    <!-- Highlights -->
    <section class="container flex mobile-column">

    <?php


$term = get_queried_object();
$term_name = $term->name;

  $args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => $term_name
        ),
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'destacado'
        )

    ),

    );
  $loop = new WP_Query( $args );
  if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post(); ?>


    <article class="producto w50 padding b-bottom">
      <a href="producto.html">
        <picture class="intrinsic intrinsic--square">
          <img class="intrinsic-item hover" srcset="images/p01h.jpg" alt="">
          <img class="intrinsic-item" srcset="images/h01.jpg" alt="">
        </picture>
        <h3><?php the_title(); ?></h3>
        <p>MXN $0.00</p>
      </a>
    </article>



      <?php
    endwhile;
  } else {
    echo __( 'No products found' );
  }
  wp_reset_postdata();
?>


</section>




    <!-- Productos -->



      <?php
      // Check if there are any posts to display
      if ( have_posts() ) :

      // The Loop
      while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>


      <?php endwhile;

      else: ?>
      <p>Sorry, no posts matched your criteria.</p>


      <?php endif; ?>







    <div class="stt">
      <div class="arrow-up"></div>
    </div>

    </div>

    <!-- Footer -->
<?php get_footer(); ?>
