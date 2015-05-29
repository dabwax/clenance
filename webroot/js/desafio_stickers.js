$(document).ready(function() {

    // Array Remove - By John Resig (MIT Licensed)
    Array.prototype.remove = function(from, to) {
      var rest = this.slice((to || from) + 1 || this.length);
      this.length = from < 0 ? this.length + from : from;
      return this.push.apply(this, rest);
    };

    // Confirma que estamos na página de etapa 2
    if($("body").hasClass("desafio-etapa_2")) {

        var stickersFila = [];

        function adicionarFormulario(dados) {
            var total = parseInt($(".referencia-sticker-total").val());
            var i = total + 1;

            // Atualiza o total de stickers usados
            $(".referencia-sticker-total").val(i);

            // Adiciona os campos necessários para o sticker
            var campos = ['filename', 'width', 'height', 'rotatex', 'rotatey', 'rotatez'];

            $.each(campos, function(index, campo) {
                adicionarCampo(campo, total, i, dados);
            });

            // Inclui o sticker por cima da imagem do desafio
            adicionarStickerImagem(i, dados);
        }

        function adicionarStickerImagem(i, dados) {
            var template = $.templates("#stickerImgTmpl");

            dados['i'] = i;

            var app = {
                dados: [
                    dados
                ]
            };

            var html = template.render(app);
            $(".container-imagem-etapa2").append(html);

            $(".container-imagem-etapa2").find(".container-sticker-" + i).fadeIn(500);

            $(".container-sticker-" + i).resizable({
                aspectRatio: false,
                stop: function(event, ui){
                    $(".sticker-" + i + "-width").val(ui.size.width);
                    $(".sticker-" + i + "-height").val(ui.size.height);
                }
            }).rotatable({

                stop: function(event, ui){
                    console.log(ui);
                    $(".sticker-" + i + "-rotatez").val(ui.angle.current);
                }
            }).draggable({
                containment: $(".container-imagem-etapa2"),

                stop: function(event, ui){
                    $(".sticker-" + i + "-rotatex").val(ui.position.left);
                    $(".sticker-" + i + "-rotatey").val(ui.position.top);
                }
            });
        }

        function adicionarCampo(campo, total, i, dados) {
            // Gera o novo atributo name para o sticker
            var name = "stickers[" + i + "][sticker_" + campo + "]";

            // Clona o campo de referencia,
            // remove a classe de referencia,
            // adiciona uma classe unica,
            // remove o ID,
            // atualiza o nome e atualiza o valor
            var campo = $(".referencia-sticker-" + campo).clone()
            .removeClass("referencia-sticker-" + campo)
            .addClass("sticker-" + i + "-" + campo)
            .prop("id", "")
            .prop("name", name)
            .val(dados[campo]);

            $(".campos-stickers").append(campo);
        }

        function callbackStickersAdicionado(dados) {
            adicionarFormulario(dados);
        }
        $("body").on("mouseenter", ".container-sticker", function() {
            $(this).addClass("visivel");
        });

        $("body").on("mouseleave", ".container-sticker", function() {
            $(this).removeClass("visivel");
        });

        // Evento de clique no botão de remover o sticker
        $("body").on("click", ".btn-remover-sticker", function() {
            var i = $(this).data("i");

            $(this).parent().fadeOut(500);
            stickersFila = jQuery.grep(stickersFila, function(value) {
              return value.i != i;
            });

            var total = $(".referencia-sticker-total").val();

            $(".referencia-sticker-total").val(total - 1);

            $(".sticker-" + i + "-width").remove();
            $(".sticker-" + i + "-height").remove();
            $(".sticker-" + i + "-rotatex").remove();
            $(".sticker-" + i + "-rotatey").remove();
            $(".sticker-" + i + "-rotatez").remove();
        });

        // Evento de clique no sticker
        $(".btn-sticker").on("click", function() {
            var imagem = $(this).find("img");

            var filename = $(imagem).attr("src");
            var width = $(imagem).attr("width");
            var height = $(imagem).attr("height");

            var dados = {
                filename: filename,
                width: width,
                height: height
            };

            // Adiciona a fila
            stickersFila.push(dados);

            callbackStickersAdicionado(dados);
        });
    } // FIM!

});