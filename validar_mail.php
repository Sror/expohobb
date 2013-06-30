<!DOCTYPE html>
<?php include_once 'sesion.php'; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include_once 'head.php'; ?>
</head>
<body>
  <div id="fb-root"></div>
  <script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  <header>
    <?php include_once 'logo.php'; ?>
    <?php include_once 'main_menu.php'; ?>
  </header>
  <div id="cont-all">

    <div class="cont-slider">
      <?php include('slider/fotosprincipales.php'); ?>
    </div>

    <div id="cont-section">
      <div class="separdor"></div>
      <section>
      <?php
        include_once 'includes.php';
        $user = new Usuario();
        if($user->validar_mail($_GET['mail'], $_GET['codigo']) == 'ok'){
          $_SESSION['mail'] = $_GET['mail'];
          echo '
            <script>
              (function ($) {
                $.cookie("expohobby_revista", ' . $_GET['mail'] . ');
              })(jQuery);
            </script>
          ';
          echo '<h3>Gracias</h3>';
          echo '<p>Ya puede acceder nuestros contenidos.</p>';
          echo '<a href="revistas.php" title="Ir a revistas">Ir a Revistas</a>';
        } else {
          echo '<h3>Error</h3>';
          echo '<p>Error en la validacion, vuelva a intantarlo.</p>';
        }
      ?>
      <div class="separdor"></div>
      <aside class="publicidad">
        <div class="cont-img-publ">
          <img alt="imag" border="0" src="imagenes/imgnone.jpg" width="139"></div>
        <div class="cont-img-publ">
          <a href="#">
            <img alt="imag" border="0" src="imagenes/imgnone.jpg" width="139"></a>
        </div>
        <div class="cont-img-publ">
          <img alt="imag" border="0" src="imagenes/imgnone.jpg" width="139"></div>
        <div class="cont-img-publ">
          <a href="#">
            <img alt="imag" border="0" src="imagenes/imgnone.jpg" width="139"></a>
        </div>
        <div class="cont-img-publ">
          <img alt="imag" border="0" src="imagenes/imgnone.jpg" width="139" height="83"></div>
        <div class="cont-img-publ">
          <a href="#">
            <img alt="imag" border="0" src="imagenes/imgnone.jpg" width="139"></a>
        </div>
      </aside>

    </div>
  </div>
  <footer>
    <?php include_once 'footer.php'; ?>
  </footer>
</body>
</html>