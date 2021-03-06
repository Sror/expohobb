<!DOCTYPE html>
<?php include_once 'sesion.php'; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Empresa | Expohobby</title>
    <?php include_once 'head.php'; ?>
    <meta property="og:title" content="Que es Expohobby?" />
    <meta property="og:description" content="Es una empresa dedicada a la difusion  del mundo del arte y la decoracion, desarrollando distintas actividades como exposiciones, cursos, revistas, newsletteria y demas herramientas que promueven las obras de los mas diversos y reconocidos exponentes del rubro. El objetivo de expohobby es seguir en el camino de la expansión para poder dar a conocer los trabajos de pequeños artesanos como así también de grandes empresas." />
    <meta property="og:image" content="/upload_images/revista.jpg" /> 
    <meta http-equiv="title" content="Que es Expohobby?"> 
    <meta name="DC.Creator" content="www.emafilms.com.ar"> 
    <meta name="keywords" content="expo,  manualidades,  manual,  arte, decoración, fiesta, decoupage, vintage, country, scrap, decoración de tortas, demostraciones, clases paso a paso">
    <meta http-equiv="keywords" content="expo,  manualidades,  manual,  arte, decoración, fiesta, decoupage, vintage, country, scrap, decoración de tortas, demostraciones, clases paso a paso ">
    <meta name="description" content="Es una empresa dedicada a la difusion  del mundo del arte y la decoracion, desarrollando distintas actividades como exposiciones, cursos, revistas, newsletteria y demas herramientas que promueven las obras de los mas diversos y reconocidos exponentes del rubro.">
    <meta http-equiv="description" content="Es una empresa dedicada a la difusion  del mundo del arte y la decoracion, desarrollando distintas actividades como exposiciones, cursos, revistas, newsletteria y demas herramientas que promueven las obras de los mas diversos y reconocidos exponentes del rubro."> 
    <meta http-equiv="DC.Description" content="Es una empresa dedicada a la difusion  del mundo del arte y la decoracion, desarrollando distintas actividades como exposiciones, cursos, revistas, newsletteria y demas herramientas que promueven las obras de los mas diversos y reconocidos exponentes del rubro."> 
    <meta name="author" content="Expohobby">
    <meta name="DC.Creator" content=" Expohobby "> 
    <meta name="vw96.objectype" content="Document">
    <meta name="resource-type" content="Document"> 
    <meta name="distribution" content="all"> 
    <meta name="robots" content="all"> 
    <meta name="revisit" content="30 days">  
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
    <div class="sombra2"></div>
    <div class="contredesysecc">
   		<p class="Cseccion"> Estas en > Empresa</p>
         <div class="cont-redes">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style ">
                  <a class="addthis_button_preferred_1"></a>
                  <a class="addthis_button_preferred_2"></a>
                  <a class="addthis_button_preferred_3"></a>
                  <a class="addthis_button_preferred_4"></a>
                  <a class="addthis_button_compact"></a>
                  <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51d0a20b5fc67a28"></script>
                <!-- AddThis Button END -->
              </div>
       </div>
      <div class="separdorC"></div>
      
      <section class="empresa">

        <article class="artempres">
            <header>
              <h2>Qu&eacute; es <span>Expohobby</span>?</h2>
            </header>
            <img class="imgEmpre" alt="expohobby" src="upload_images/revista.jpg">
            <section>
              <div class="des_emp">
              
                <p><span>E</span>s una empresa dedicada a la difusión  del mundo del arte y la decoración, desarrollando distintas actividades como exposiciones, cursos, revistas, newsletteria y demás herramientas que promueven las obras de los mas diversos y reconocidos exponentes del rubro. El objetivo de <span class="expspan">expohobby</span> es seguir en el camino de la expansión para poder dar a conocer los trabajos de pequeños artesanos como así también de grandes empresas.</p>
              </div>
            </section>
        </article>
        <div class="sombra4"></div> 
      </section>
     
      <div class="separdor"></div>
      
     <?php
        $publicidad = new Publicidad();
        print $publicidad->viewPublicidad('chica');
      ?>

    </div>
  </div>
  <footer>
    <?php include_once 'footer.php'; ?>
  </footer>
</body>
</html>