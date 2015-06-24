$(document).ready(function() {

  $(".conteudo-tooltip").on("click", function() {
    $(".btn-tooltip").removeClass("ativo");
    $(".conteudo-tooltip, .tracejado").addClass("hide");
  });

  $("img.lazy").lazyload();

  /* Snippet para altura 100% - basta usar a classe .height-100 */
  var alturaRodape = 110;
  var isMobile = $("body").data("is-mobile");

  function resizeHeight() {
    if(!isMobile) {
      $(".height-100").css("height", ($(window).height() - alturaRodape) + "px");
    }
  }

  resizeHeight();

  $( window ).resize(function() {
    resizeHeight();
  });
  /* Fim - snippet para altura 100% */

  $(".btn-fancybox").fancybox({
    autoSize        :  false,
    'padding'       : '1',
    'margin'        : '2',
    'autoScale'     : false,
    'width'         : '100%',
    'height'        : '100%',
    'type'          : 'iframe',
    'autoPlay'      : false,
    'playSpeed'     : 10500,
    closeBtn        : false,
    iframe : {
       scrolling : 'no'
    }
  });

  $(".campo-cropx").val(0);
        $(".campo-cropy").val(0);
        $(".campo-cropw").val(500);
        $(".campo-croph").val(500);

    if(!isMobile) {
  $('img.crop_me').jWindowCrop({
    targetWidth:500,
    targetHeight:500,
    onChange: function(result) {
        $(".campo-cropx").val(result.cropX);
        $(".campo-cropy").val(result.cropY);
        $(".campo-cropw").val(result.cropW);
        $(".campo-croph").val(result.cropH);
    }
});
}

  $(".btn-tooltip").click(function() {
    $(".btn-tooltip").removeClass("ativo");
    $(this).addClass("ativo");
    $(".conteudo-tooltip, .tracejado").addClass("hide");
    $(this).parent().find(".conteudo-tooltip, .tracejado").removeClass("hide");
    var div = $(this).parent().find(".conteudo-tooltip");

    setTimeout(function() {
    $("html, body").animate({ scrollTop: $(div).offset().top - 150 }, 1000);
  }, 1000);

  });

  $(".conteudo-tooltip .btn").click(function() {
    $(".btn-tooltip").removeClass("ativo");
    $(".conteudo-tooltip, .tracejado").addClass("hide");
  });

    $(".container-imagem").imgLiquid({
      fill: true
    });

    $(".validar-formulario").validate();

    $('.regulamento-container').perfectScrollbar();

    $('#navlist').lavalamp();

    $(".phone", "body")
      .mask("(99) 9 9999 999?9")
      .bind("blur", function () {
        // force revalidate on blur.

        var frm = $(this).parents("form");
        // if form has a validator
        if ($.data( frm[0], 'validator' )) {
          var validator = $(this).parents("form").validate();
          validator.settings.onfocusout.apply(validator, [this]);
        }
      });

});