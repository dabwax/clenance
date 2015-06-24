$(document).ready(function() {

    $(".form-control.phone").blur(function() {

        var mensagem = 'Coloque uma foto bem bonita!';

        $(".campo-anexo").notify(mensagem, {
            position: "bottom",
            className: "success",
            showAnimation: "fadeIn",
            showDuration: 400,
              hideAnimation: 'fadeOut',
              // hide animation duration
              hideDuration: 200,
        });

    });

    $(".campo-anexo input").on("change", function() {

        var mensagem = 'Receba novidades da Avène por e-mail!';

        $(".campo-newsletter").notify(mensagem, {
            position: "bottom left",
            className: "info",
            showAnimation: "fadeIn",
            showDuration: 400,
              hideAnimation: 'fadeOut',
              // hide animation duration
              hideDuration: 200,
        });


        var mensagem = 'Não se esqueça de aceitar os termos de uso!';

        $.notify(mensagem, {
            position: "top left",
            className: "success",
            showAnimation: "fadeIn",
            showDuration: 400,
              hideAnimation: 'fadeOut',
              // hide animation duration
              hideDuration: 200,
        });

    });

    $(".campo-newsletter label").on("click", function() {


    });

    $(".btn-efeito").on("click", function() {
        var img_selecionada = $(this).find("img").attr("src");
        var efeito = $(this).data("efeito");

        $(".campo-efeito").val(efeito);
        $(".crop_me").attr("src", img_selecionada);

        $("html, body").animate({ scrollTop: $(document).height() }, 1000);

        return false;
    });
});

$(window).load(function() {

        $(".width-imagem").val($(".crop_me").width());
        $(".height-imagem").val($(".crop_me").height());

});