<?php   
  if(isset($_GET['q'])){
    include_once 'sesion.php';
    include_once 'includes.php';
    $q=$_GET['q'];
    $revista = new Revista();
    $revista = $revista->getRevista($q);
  }else{
    header( "Location:revistas.php");	
  }
?>
<!DOCTYPE html>
<head>
<title><?php echo $revista['title'];?> | Expohobby</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!-- CSS -->
<link href="css/estilo.css" type="text/css" rel="stylesheet">
<link href="css/modals.css" type="text/css" rel="stylesheet">
<link href="css/jquery.ui.all.css" type="text/css" rel="stylesheet">
<!-- CSS -->
<!-- JS -->
<script type='text/javascript' src='slider/js/comment-reply.js?ver=20090102'></script>
<script type='text/javascript' src='slider/js/jquery/jquery.js?ver=1.7.1'></script>
<script type='text/javascript' src='js/general.js'></script>
<script type='text/javascript' src="js/jquery.ui.core.js"></script>
<script type='text/javascript' src="js/jquery.ui.widget.js"></script>
<script type='text/javascript' src="js/magnific-popup.js"></script>
<script type='text/javascript' src="js/jquery.ui.datepicker.js"></script>
<script type='text/javascript' src="js/jquery.cookie.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<!-- JS -->
<meta property="og:title" content="<?php echo $revista['title'];?> | Expohobby" />
<meta property="og:description" content="<?php echo $revista['edition'];?>, <?php echo $revista['description'];?>. " />
<meta property="og:image" content="<?php echo $revista['image'];?>" />
<meta http-equiv="title" content="<?php echo $revista['title'];?>"> 
    <meta name="DC.Creator" content="www.emafilms.com.ar"> 
    <meta name="keywords" content="revista, Revistas, digital, paso a paso, EXPOHOBBY Deco Digital ">
    <meta http-equiv="keywords" content="revista, Revistas, digital, paso a paso, EXPOHOBBY Deco Digital ">
    <meta name="description" content="<?php echo $revista['description'];?>">
    <meta http-equiv="description" content="<?php echo $revista['description'];?>"> 
    <meta http-equiv="DC.Description" content="<?php echo $revista['description'];?>"> 
    <meta name="author" content="Expohobby">
    <meta name="DC.Creator" content="Estudio multimedia EB "> 
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
  	<div id="cont-section2">
		<article class="con-swf">
            <header>
              <h2><?php echo $revista['title'];?></h2>
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
            </header>
            <section>
              <?php if (isset($_SESSION['mail'])): ?>  
              	<div class="descripcion-swf">
                  <p><span><?php echo $revista['edition'];?></span></p>
                  <?php echo $revista['description'];?>
                </div>
                  <div class="cont-arch">
                  	<iframe 
                      name="Joomag_embed_56b6d485-04ea-4288-b1f6-c3769ceb55e7"
                      style="width:750px;height:500px" 
                      width="750px" 
                      height="500px" 
                      hspace="0" 
                      vspace="0"
                      frameborder="0"  
                      src="<?php echo $revista['swf'];?>">
                  </iframe>
                  </div>
                  <div class="cont-btn-pdf">
                   <a class="btn-classic" href="<?php echo $revista['pdf'];?>" target="_blank" title="Descargar <?php echo $revista['title'];?> en formato PDF"> Descargar <?php echo $revista['title'];?> en formato PDF</a>
                  </div>
              <?php else: ?>
                  <div id="modal_registration" class="modal_registration">
                  <h3>Revista Expohobby</h3>
                    <p>Para poder acceder a nuestras revistas usted debera estar ingresar un mail valido</p>
                    <div id="form_registro_email">
                      <input id="registration_mail" type="email" onblur="" name="registration_mail" required="required" class="input_text_mail input_text" />
                      <input id="revista_id" type="hidden" name="revista_id" class="input_text_mail input_text" value="<?php echo $_GET['q'];?>"/>
                      <input id="btn_registrar_mail" class="btn-classic" type="submit" value="Enviar" name="btn_registrar_mail" />
                    </div>
                  </div>
              <?php endif; ?>
            </section>
        </article>
    </div>
   </div>
  <footer>
    <?php include_once 'footer.php'; ?>
  </footer>
</body>
</html>