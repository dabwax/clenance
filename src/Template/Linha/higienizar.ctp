<?php
    $this->assign("title", "Higienizar - Linha Completa");
?>


<div class="container">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="bolinhas">
                <a href="<?php echo $this->Url->build(['action' => 'higienizar']); ?>" class="animated fadeInDown ativo"><span>1</span> <p>Higienizar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'tonificar_e_cuidar']); ?>" class="tonificar_e_cuidar animated fadeInDown"><span>2</span> <p>Tonificar <br> e Cuidar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'proteger']); ?>" class="animated fadeInDown"><span>3</span> <p>Proteger</p></a>
            </div> <!-- .bolinhas -->

            <div class="clearfix"></div>

            <div class="box-dica-dermatologista">
                <h2 class="chamada">
                    <?php echo $this->Html->image("bonequinha.png"); ?>
                    <strong>Dica do Dermatologista</strong>
                </h2>
                <div class="box-branco text-justify">
                    <p>O objetivo de higienizar diariamente a pele é remover da superfície cutânea impurezas como sebo, suor, descamação e bactérias, além dos resíduos ambientais e cosméticos.</p>

                    <p>A higiene deve ser realizada pelo menos duas vezes ao dia, de manhã e a noite. Nas peles oleosas e acneicas o uso de produtos desincrustante duas vezes por semana traz benefícios desde que utilizadas com gentileza!</p>
                </div>

            </div>
        </div>

        <div class="col-lg-8 col-sm-8 clearfix-on-mobile pos-r">

            <div class="tooltip-produto tooltip-higienizar-1">
                <a class="btn-tooltip"></a>

                <span class="tracejado animated fadeInDown hide"></span>

                <div class="conteudo-tooltip animated fadeInDown hide">
                    <a href="#" class="btn"><i class="fa fa-times"></i></a>
                    <div class="nome-produto">
                        <h1 class="titulo-marca animated fadeInUp" style="font-size: 34px;">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp" style="margin-bottom: 20px;">Sabonete dermatológico desincrustante</h3>
                    </div> <!-- .nome-produto -->
                    <?php echo $this->Html->image("com-enxague.png", ['class' => 'pull-right']); ?>

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Higieniza e desobstrui os poros <br>
                        Controla a oleosidade <br>
                        Reduz as imperfeições (brilho, poros <br> dilatados e entupidos).
                    </p>

                    <strong class="titulo-azul">Modo de Uso</strong>

                    <p>
                        Massagear e enxaguar abundantemente. <br>
                        ESPUMA DELICADA E CREMOSA
                    </p>
                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <div class="tooltip-produto tooltip-higienizar-2">
                <a class="btn-tooltip"></a>

                <span class="tracejado animated fadeInDown hide"></span>

                <div class="conteudo-tooltip animated fadeInDown hide">
                    <a href="#" class="btn"><i class="fa fa-times"></i></a>
                    <div class="nome-produto" style="width: 43%;">
                        <h1 class="titulo-marca animated fadeInUp" style="font-size: 34px;">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp" style="margin-bottom: 20px;">Água purificante <br> demaquitante</h3>
                    </div> <!-- .nome-produto -->
                    <?php echo $this->Html->image("sem-enxague.png", ['class' => 'pull-right']); ?>

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Higiene demaquilante sem enxague <br>
                        Elimina as impurezas e a maquiagem, incluindo produtos aprova d'água. <br>
                        Regula a produção de óleo
                    </p>

                    <strong class="titulo-azul">Modo de Uso</strong>

                    <p>
                        Aplicar no rosto com ajuda de um algodão<br>
                        ESPUMA DELICADA E CREMOSA
                    </p>
                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <div class="tooltip-produto tooltip-higienizar-3">
                <a class="btn-tooltip"></a>

                <span class="tracejado animated fadeInDown hide"></span>

                <div class="conteudo-tooltip animated fadeInDown hide">
                    <a href="#" class="btn"><i class="fa fa-times"></i></a>

                    <div class="nome-produto">
                        <h1 class="titulo-marca animated fadeInUp" style="font-size: 34px;">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp" style="margin-bottom: 20px;">Gel de limpeza</h3>
                    </div> <!-- .nome-produto -->
                    <?php echo $this->Html->image("com-enxague.png", ['class' => 'pull-right']); ?>

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Higieniza, purifica suavemente sem provocar oleosidade reacional. Ação seborreguladora reforçada. <br> Sem sabão.
                    </p>

                    <strong class="titulo-azul">Modo de Uso</strong>

                    <p>
                        Aplicar no rosto previamente molhado, <br>
                        Massagear e enxaguar abundantemente <br>
                        TEXTURA LEVE E FÁCIL DE ENXAGUAR
                    </p>

                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <?php echo $this->Html->image("produtos_linha_cleanance.png", ['class' => 'img-responsive img-linha-cleanance img-higienizar hidden-xs hidden-sm']); ?>
            <?php echo $this->Html->image("produtos_linha_cleanance-selo.png", ['class' => 'img-responsive img-linha-cleanance img-higienizar hidden-md hidden-lg']); ?>

            <div class="grupo-legendas">
                <span class="legenda-1">Pele Oleosa e acneica</span>
                <span class="legenda-2">Pele Oleosa</span>
            </div>

        </div>

    </div> <!-- .row -->
</div> <!-- .container -->