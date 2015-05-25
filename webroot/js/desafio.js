$(document).ready(function() {

    $(".btn-proximo").on("click", function() {
        var dataURL = document.querySelector('.imagem canvas').toDataURL();
        $(".imagem_base64").val(dataURL);

        return true;
    });

    Caman.Filter.register("hipster", function(vignette) {
        if (vignette == null) {
          vignette = true;
        }
        this.brightness(31);
        this.hue(89);
        this.contrast(-21);
        this.saturation(17);
        this.exposure(-27);
        this.sepia(40);
        if (vignette) {
          return this.vignette("40%", 30);
        }
    });

    Caman.Filter.register("hippie", function(vignette) {
        if (vignette == null) {
          vignette = true;
        }
        this.brightness(14);
        this.vibrance(-1);
        this.contrast(4);
        this.saturation(100);
        this.exposure(-27);
        if (vignette) {
          return this.vignette("40%", 30);
        }
    });

    $(".img-pequena").each(function(index, element) {
        var selecionado = $(element).data("filtro");

        console.log(selecionado);
        Caman(element, function () {

            this[selecionado]();
            this.render();
        });
    });

    Caman(".imagem img", function () {
        this.render();
    });

    $(".btn-efeito").on("click", function() {
        $(".imagem canvas").remove();
        $(".imagem img").remove();

        var clone_img = $(".img-original").clone();
        var btn = $(this);

        $(clone_img).removeClass("hide");

        $(".imagem").html(clone_img);

        Caman(".imagem img", function () {
            var selecionado = $(btn).attr("id");

            $(".filtro_atual").val(selecionado);

        this[selecionado]();
        this.render();
    });

    });
});