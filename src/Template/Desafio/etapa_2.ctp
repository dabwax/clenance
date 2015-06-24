<?php echo $this->Form->create("Participant", ['class' => 'formulario validar-formulario', 'type' => 'file']); ?>

<div class="campos-stickers">
    <?php echo $this->Form->input("stickers_total", ['type' => 'hidden', 'value' => 0, 'class' => 'referencia-sticker-total']); ?>
    <?php echo $this->Form->input("stickers.0.sticker_filename", ['type' => 'hidden', 'class' => 'referencia-sticker-filename']); ?>
    <?php echo $this->Form->input("stickers.0.sticker_width", ['type' => 'hidden', 'class' => 'referencia-sticker-width']); ?>
    <?php echo $this->Form->input("stickers.0.sticker_height", ['type' => 'hidden', 'class' => 'referencia-sticker-height']); ?>
    <?php echo $this->Form->input("stickers.0.sticker_rotatex", ['type' => 'hidden', 'class' => 'referencia-sticker-rotatex']); ?>
    <?php echo $this->Form->input("stickers.0.sticker_rotatey", ['type' => 'hidden', 'class' => 'referencia-sticker-rotatey']); ?>
    <?php echo $this->Form->input("stickers.0.sticker_rotatez", ['type' => 'hidden', 'class' => 'referencia-sticker-rotatez']); ?>
</div>

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-5">
                        <?php echo $this->Html->image("cleanance.png", ['class' => 'img-responsive', 'style' => 'margin: 0 auto;']); ?>

                        <div class="clearfix"></div>

                        <ul class="posicoes col-lg-3" style="margin-top: 30px;">
                            <li>1</li>
                            <li class="atual">2</li>
                            <li class="">3</li>
                        </ul>

                        <p class="col-lg-9">Selecione quantos stickers quiser</p>

                        <div class="clearfix"></div>

                        <ul class="ul-stickers">
                            <?php foreach($stickers as $s) : ?>
                            <li>
                                <a href="#" class="btn-sticker">
                                    <img src="<?php echo $s['path']; ?>" width="<?php echo $s['width']; ?>" height="<?php echo $s['height']; ?>" />
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>

                        <?php if(empty($stickers)) : ?>
                            <div class="alert alert-info">
                                Não há stickers disponíveis.
                            </div>
                        <?php endif; ?>

                    </div> <!-- lateral -->

                    <div class="principal col-lg-7 col-xs-12 col-sm-12 text-center">

                    <h2 class="chamada visible-sm visible-xs visible-md text-center" style="top: -26px; font-size: 33px !important;">Resultado Final</h2>

                        <div class="container-imagem-etapa2">
                            <?php
                            echo $this->Html->image('/uploads/participants/' . $participant->attachment_cropped, ['style' => 'width: 100%;', 'class' => 'img-responsive']); ?>
                        </div>

                        <div class="clearfix"></div>

                                <button type="submit" value="voltar" name="acao" class="btn btn-primary btn-participe">Voltar</button>
                                <button type="submit" value="proximo" name="acao" class="btn btn-primary btn-participe btn-proximo">Próximo</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>

<?php echo $this->Form->end(); ?>

<script id="stickerImgTmpl" type="text/x-jsrender">
{{for dados}}
<div class="container-sticker-{{:i}} container-sticker" style="z-index: {{:i+1}}; width: {{:width}}px; height: {{:height}}px; display: none;">
    <a href="javascript:;" class="btn-remover-sticker" data-i="{{:i}}"></a>
    <img src="{{:filename}}" width="{{:width}}" height="{{:height}}" class="rotacionar-imagem sticker-{{:i}} img-sticker" />
</div>
{{/for}}
</script>