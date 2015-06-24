<?php echo $this->Form->create("Participant", ['class' => 'formulario validar-formulario', 'type' => 'file']); ?>

<?php echo $this->Form->input("efeito", ['type' => 'hidden', 'value' => 'nenhum', 'class' => 'campo-efeito'] ); ?>
<?php echo $this->Form->input("cropX", ['type' => 'hidden', 'value' => '0', 'class' => 'campo-cropx'] ); ?>
<?php echo $this->Form->input("cropY", ['type' => 'hidden', 'value' => '0', 'class' => 'campo-cropy'] ); ?>
<?php echo $this->Form->input("cropW", ['type' => 'hidden', 'value' => '0', 'class' => 'campo-cropw'] ); ?>
<?php echo $this->Form->input("cropH", ['type' => 'hidden', 'value' => '0', 'class' => 'campo-croph'] ); ?>
<?php echo $this->Form->input("width-imagem", ['type' => 'hidden', 'value' => 0, 'class' => 'width-imagem']); ?>
<?php echo $this->Form->input("height-imagem", ['type' => 'hidden', 'value' => 0, 'class' => 'height-imagem']); ?>

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-5" style="padding-bottom: 40px;">
                        <?php echo $this->Html->image("cleanance.png", ['class' => 'img-responsive', 'style' => 'margin: 0 auto;']); ?>

                        <div class="clearfix"></div>

                        <ul class="posicoes col-lg-3" style="margin-top: 30px;">
                            <li class="atual">1</li>
                            <li class="">2</li>
                            <li class="">3</li>
                        </ul>

                        <p class="col-lg-9 text-justify" style="margin-top: 25px;">Inclua um dos filtros que deixarão seu momento ainda mais especial</p>

                        <div class="clearfix"></div>

                        <ul id="filters">
                            <li>
                                <a href="javascript:;" class="btn-efeito" data-efeito="efeito1">
                                    <?php echo $this->Html->image('/uploads/participants/efeito1_' . $participant['attachment'], ['style' => 'width: 100%; height: 180px;', 'class' => 'img-pequena']); ?>
                                    <!--<span>Gotham </span>
-->                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn-efeito" data-efeito="efeito2">
                                    <?php echo $this->Html->image('/uploads/participants/efeito2_' . $participant['attachment'], ['style' => 'width: 100%; height: 180px;', 'class' => 'img-pequena']); ?>
                                    <!--<span>Nashville </span>
-->                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn-efeito" data-efeito="efeito3">
                                    <?php echo $this->Html->image('/uploads/participants/efeito3_' . $participant['attachment'], ['style' => 'width: 100%; height: 180px;', 'class' => 'img-pequena']); ?>
                                    <!--<span>Lomo </span>
-->                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn-efeito" data-efeito="efeito4">
                                    <?php echo $this->Html->image('/uploads/participants/efeito4_' . $participant['attachment'], ['style' => 'width: 100%; height: 180px;', 'class' => 'img-pequena']); ?>
                                    <!--<span>Kelvin </span>
-->                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn-efeito" data-efeito="efeito5">
                                    <?php echo $this->Html->image('/uploads/participants/efeito5_' . $participant['attachment'], ['style' => 'width: 100%; height: 180px;', 'class' => 'img-pequena']); ?>
                                    <!--<span>Toaster </span>
-->                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="btn-efeito" data-efeito="efeito6">
                                    <?php echo $this->Html->image('/uploads/participants/efeito6_' . $participant['attachment'], ['style' => 'width: 100%; height: 180px;', 'class' => 'img-pequena']); ?>
                                    <!--<span>Tilt Shift </span>-->
                                </a>
                            </li>
                        </ul>

                    </div> <!-- lateral -->

                    <div class="principal col-lg-7 col-xs-12 col-sm-12 text-center">

                    <h2 class="chamada visible-sm visible-xs visible-md text-center" style="top: -26px; font-size: 33px !important;">Resultado Final</h2>

                            <?php echo $this->Html->image('/uploads/participants/' . $participant['attachment'], ['style' => '', 'class' => 'crop_me']); ?>

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