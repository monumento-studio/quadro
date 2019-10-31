<?php get_header(); ?>

<div class="pagina-contenedora">


    <!-- Header -->
    <section class="cat-title container">
      <article class="w33">
        <h2><?php single_term_title(); ?></h2>
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
        <?php echo do_shortcode( '[br_filter_single filter_id=192]' ); ?>
        <?php do_action( 'woocommerce_before_shop_loop' ); ?>
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
    while ( $loop->have_posts() ) : $loop->the_post();


    $imagen_1 = get_field('imagen_1');
    $imagen_2 = get_field('imagen_2');

    ?>


    <article class="producto w50 padding b-bottom">
      <a href="<?php the_permalink(); ?>">
        <picture class="intrinsic intrinsic--square">
          <img class="intrinsic-item hover" srcset="<?php echo $imagen_2['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>">
    			<img class="intrinsic-item" srcset="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>">
        </picture>
        <h3><?php the_title(); ?></h3>
        <p>MXN <?php echo wc_price( wc_get_price_including_tax( $product ) ); ?></p>
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


		<section class="flex w100">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'product' ); ?>

		<?php endwhile; // end of the loop. ?>



</section>



    <div class="stt">
      <div class="arrow-up"></div>
    </div>

    </div>

    <!-- Footer -->
<?php get_footer(); ?>

<script>

jQuery(document).ready(function($) {

  $('section.container.filtros ul.filtroscss').hide();

  $('section.container.filtros h3.widget-title span').append("<span class='t'>▼</span>");

  $('section.container.filtros h3').on('click',function(){
      $('section.container.filtros ul.filtroscss').toggle();
  });

  });

</script>
