$(document).ready(function() {

    $(".btn-efeito").on("click", function() {
        var img_selecionada = $(this).find("img").attr("src");
        var efeito = $(this).data("efeito");

        $(".campo-efeito").val(efeito);
        $(".crop_me").attr("src", img_selecionada);
    });
});