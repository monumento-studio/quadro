<?php get_header();

//Template Name: Template Bolsa de Trabajo

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

        <?php
            if( have_rows('puestos') ):
            // loop through the rows of data
                while ( have_rows('puestos') ) : the_row();
                //vars
                $puesto = get_sub_field('puesto');
                ?>

                <a href="<?php echo $puesto['url']; ?>" target="<?php echo $puesto['target']; ?>"><?php echo $puesto['title']; ?></a>




            <?php
            endwhile;

            else :

                // no rows found

            endif;
        ?>

      </article>
    </section>

<?php get_footer(); ?>
