$(document).ready(function() {

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