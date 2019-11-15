<!-- Footer -->
<footer class="container flex justify-between mobile-column padding">
  <article class="w20">
    <?php the_field('descripcion_footer', 'option'); ?>
  </article>


  <?php if( have_rows('links_footer_1', 'option') ): ?>

      <ul>

        <?php while( have_rows('links_footer_1', 'option') ): the_row();

          $link1 = get_sub_field('link1');

          ?>

            <li><a href="<?php echo $link1['url']; ?>"><?php echo $link1['title']; ?></a></li>

          <?php endwhile; ?>

        </ul>

      <?php endif; ?>



  <!-- <ul>
    <li><a href="historia.html">Nuestra Historia</a></li>
    <li><a href="servicioalcliente.html">Servicio al cliente</a></li>
    <li><a href="envios.html">Envíos y Devoluciones</a></li>
    <li><a href="sucursales.html">Sucursales</a></li>
    <li><a href="privacidad.html">Políticas de Privacidad</a></li>
    <li><a href="bolsadetrabajo.html">Bolsa de Trabajo</a></li>
  </ul> -->


  <?php if( have_rows('links_footer_2', 'option') ): ?>

      <ul>

        <?php while( have_rows('links_footer_2', 'option') ): the_row();

          $link2 = get_sub_field('link2');

          ?>

            <li><a href="<?php echo $link2['url']; ?>"><?php echo $link2['title']; ?></a></li>

          <?php endwhile; ?>

        </ul>

      <?php endif; ?>

  <!-- <ul>
    <li><a href="recamara.html">Recámara</a></li>
    <li><a href="sala.html">Sala</a></li>
    <li><a href="comedor.html">Comedor</a></li>
    <li><a href="bano.html">Baño</a></li>
    <li><a href="iluminacion.html">Iluminación</a></li>
    <li><a href="exterior.html">Exterior</a></li>
    <li><a href="disenador.html">Diseñador</a></li>
    <li><a href="categoría.html">Oferta</a></li>
  </ul> -->


  <?php if( have_rows('links_footer_3', 'option') ): ?>

    <ul>

      <?php while( have_rows('links_footer_3', 'option') ): the_row();

        $link3 = get_sub_field('link3');

        ?>

          <li><a href="<?php echo $link3['url']; ?>"><?php echo $link3['title']; ?></a></li>

        <?php endwhile; ?>

      </ul>

    <?php endif; ?>

  <!-- <ul>
    <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
    <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
    <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
    <li><a href="https://pinterest.com" target="_blank">Pinterest</a></li>
    <li><a href="https://homify.com" target="_blank">Homify</a></li>
  </ul> -->
  <article class="form-footer">
    <input type="text" placeholder="Mail [Newsletter]" tabindex="2">
    <button type="submit" name="button" class="button" tabindex="3">Regístrate</button>
  </article>

</footer>

<?php wp_footer(); ?>

</body>
</html>
