<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="loader flex align-center justify-center"><h2>QUADRO <span>[Calidad y Servicio]</span></h2></div>
    <!-- Navegación -->
    <header>
      <nav id="nav">
        <article class="container top padding">
          <a href="historia.html" class="hide-for-small">Nuestra Historia</a>
          <a href="index.html" class="logo"><h1>QUADRO<span>[<span id="tagline">Calidad y Servicio</span>]</span></h1></a>
          <section class="icons">
            <article class="buscador b-bottom">
              <input type="text" tabindex="1" placeholder="Busca aquí">
              <button type="button" name="Buscador"><img src="images/Search.svg" alt=""></button>
            </article>
            <a href="account.html"><img src="images/Account.svg" alt=""></a>
            <a href="servicioalcliente.html" class="sac-icon"><img src="images/Info.svg" alt=""></a>
            <a href="carrito.html" class="carrito"><img src="images/Bag.svg" alt=""></a>
          </section>
        </article>
        <article class="container bottom justify-center">
          <button class="m-dropdown show-for-small">Compra <span class="t">&#9660;</span></button>
          <div class="links">
            <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
            <a href="historia.html" class="show-for-small historia-movil">Nuestra Historia</a>
          </div>
        </article>
      </nav>
    </header>
