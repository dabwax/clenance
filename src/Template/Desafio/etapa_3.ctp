<?php echo $this->Form->create("Participant", ['class' => 'formulario validar-formulario', 'type' => 'file']); ?>

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-5">
                        <?php echo $this->Html->image("eu-amo-clenance.jpg", ['class' => 'img-responsive', 'style' => 'margin: 0 auto;']); ?>

                        <div class="clearfix"></div>

                        <ul class="posicoes col-lg-3">
                            <li>1</li>
                            <li>2</li>
                            <li class="atual">3</li>
                        </ul>

                        <p class="col-lg-9">Finalize e publique sua foto.</p>

                        <ul class="lista-final">
                            <li>
                                <a href="<?php echo $this->Url->build(['action' => 'publicar']); ?>">Publicar</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $this->Url->build(['controller' => 'home', 'action' => 'index', $participant->id], true); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank">Compartilhar</a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Url->build(['action' => 'salvar']); ?>" target="_blank">Salvar</a>
                            </li>
                        </ul>

                        <div class="clearfix"></div>

                    </div> <!-- lateral -->

                    <div class="principal col-lg-7 text-center">

                        <div class="container-imagem-etapa2">
                            <?php
                            echo $this->Html->image('/uploads/participants/' . $participant->attachment_cropped, ['style' => 'width: 100%;', 'class' => 'img-responsive']); ?>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>

<?php echo $this->Form->end(); ?>