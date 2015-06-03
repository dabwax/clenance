$(document).ready(function() {

  $(".btn-fancybox").fancybox({
    type: "iframe",
    maxWidth: 500,
    height: 500,
    autoSize: false
  });

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

  $(".btn-tooltip").click(function() {
    $(".btn-tooltip").removeClass("ativo");
    $(this).addClass("ativo");
    $(".conteudo-tooltip, .tracejado").addClass("hide");
    $(this).parent().find(".conteudo-tooltip, .tracejado").removeClass("hide");
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