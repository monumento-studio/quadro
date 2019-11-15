<?php get_header(); ?>

<div class="container pagina-contenedora">

  <?php while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

  <?php endwhile; ?>

</div>

    <!-- Footer -->
<?php get_footer(); ?>
