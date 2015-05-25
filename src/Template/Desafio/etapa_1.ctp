<?php echo $this->Form->create("Participant", ['class' => 'formulario validar-formulario', 'type' => 'file']); ?>

<?php echo $this->Form->input("filtro_atual", ['type' => 'hidden', 'value' => 'nenhum', 'class' => 'filtro_atual'] ); ?>
<?php echo $this->Form->input("imagem_base64", ['type' => 'hidden', 'value' => '', 'class' => 'imagem_base64'] ); ?>

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-5">
                        <?php echo $this->Html->image("eu-amo-clenance.jpg", ['class' => 'img-responsive', 'style' => 'margin: 0 auto;']); ?>

                        <div class="clearfix"></div>

                        <ul class="posicoes col-lg-3">
                            <li class="atual">1</li>
                            <li class="">2</li>
                            <li class="">3</li>
                        </ul>

                        <p class="col-lg-9">Inclua um dos filtros que deixarão seu momento ainda mais especial:</p>

                        <div class="clearfix"></div>

                        <ul id="filters">
                            <?php foreach($effects as $s => $e) : ?>
                            <li> <a href="javascript:;" class="btn-efeito btn-efeito-<?php echo strtolower($s); ?>" id="<?php echo $s; ?>">
                                <?php echo $this->Html->image('/uploads/participants/' . $participant['attachment'], ['style' => 'width: 100%; height: 150px;', 'class' => 'img-pequena', 'data-filtro' => $s]); ?>
                                <span>  <?php echo $e; ?> </span>
                                </a> </li>
                        <?php endforeach; ?>
                        </ul>

                    </div> <!-- lateral -->

                    <div class="principal col-lg-7 text-center">

                        <?php echo $this->Html->image('/uploads/participants/' . $participant['attachment'], ['style' => 'width: 100%;', 'class' => 'img-original hide']); ?>

                        <div class="imagem">
                            <?php echo $this->Html->image('/uploads/participants/' . $participant['attachment'], ['style' => 'width: 100%;']); ?>
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