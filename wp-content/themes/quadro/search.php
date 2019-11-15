

    <?php get_header();

    //Template Name: Template Bolsa de Trabajo

     ?>

        <!-- Header -->
        <section class="cat-title sac container black">
          <article class="w50"><h3><?php printf( __( 'Resultados de busqueda para: %s', 'shape' ), '<em>[' . get_search_query() . ']</em>' ); ?></h3></article>
        </section>

        <!-- Textos -->
        <section class="container flex mobile-column">

            <?php while ( have_posts() ) : the_post(); ?>

              <?php wc_get_template_part( 'content', 'product' ); ?>

            <?php endwhile; // end of the loop. ?>



        </section>

    <?php get_footer(); ?>
