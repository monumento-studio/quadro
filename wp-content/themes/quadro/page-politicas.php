<?php get_header();

//Template Name: Template Politicas

$texto = get_field('texto');

 ?>

    <!-- Header -->
    <section class="cat-title sac container black">
      <article class="w50">
        <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
?>      </article>
    </section>

    <!-- Textos -->
    <section class="container intro-categorias flex justify-between mobile-column">
      <article class="padding2x w100 b-bottom trabajo">

        <?php echo $texto; ?>

      </article>
    </section>

<?php get_footer(); ?>
