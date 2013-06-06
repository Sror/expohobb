(function ($) {
  $(document).ready(function(){
    deplegableMenuEfects();
    initSocialNetworks();
    initPuginsForms();
    removePreviewImages();  
    initModals();
  });
  function removePreviewImages(){
    $('#small_image_marquee').change(function (){ 
      $('#preview_small_image').remove();
    });
    $('#big_image_marquee').change(function (){ 
      $('#preview_big_image').remove();
    });
    $('#image_revista').change(function (){ 
     $('#preview_image').remove();
    });
  }
  function initPuginsForms(){
    $(function() {
      $("#edicion").datepicker();
      $("#edicion").datepicker( "option", "dateFormat", "yy-mm-dd");
    });
  }

  function deplegableMenuEfects(){
    $('.deplegablemenu').hide();
    $("nav a").click(function(){
      $("nav a").removeClass('select');
      $(this).addClass('select');
      $('.deplegablemenu').hide();
    });
    $("a[title='Exposiciones']").click(function(){
      $('.deplegablemenu').show();
    });
    $(".deplegablemenu").mouseleave(function(){
      $('.deplegablemenu').hide();
      $("nav a").removeClass('select');
    });
  }

  function initSocialNetworks(){
    $('#redes-sociales a').fadeTo('slow', 0.5);
    $('#redes-sociales a').hover(function() {
      $(this).fadeTo('slow', 1.0);
    }, function() {
      $(this).fadeTo('slow', 0.5);
    });
  }

  function initModals(){
    $('#eliminar_marquee').magnificPopup({
      type: 'inline',
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,   
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom',
      alignTop: true,
      fixedContentPos: true
    });

    $('#btn_cancelar').live('click',function(){
      $.magnificPopup.close();
    });
  }
})(jQuery);