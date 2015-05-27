<?php
    $this->assign("title", "Tonificar e Cuidar - Linha Completa");
?>


<div class="container">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="bolinhas">
                <a href="<?php echo $this->Url->build(['action' => 'higienizar']); ?>" class="animated fadeInDown"><span>1</span> <p>Higienizar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'tonificar_e_cuidar']); ?>" class="animated fadeInDown ativo"><span>2</span> <p>Tonificar <br> e Cuidar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'proteger']); ?>" class="animated fadeInDown"><span>3</span> <p>Proteger</p></a>
            </div> <!-- .bolinhas -->

            <div class="clearfix"></div>

            <div class="box-dica-dermatologista">
                <h2 class="chamada">
                    <?php echo $this->Html->image("bonequinha.png"); ?>
                    <strong>Dica do Dermatologista</strong>
                </h2>
                <div class="box-branco">
                    <p>O objetivo de higienizar diariamente a pele é remover da superfície cutânea impurezas como sebo, suor, descamação e bactérias, além dos resíduos ambientais e cosméticos.</p>

                    <p>A higiene deve ser realizada pelo menos duas vezes ao dia, de manhã e a noite. Nas peles oleosas e acneicas o uso de produtos desincrustante duas vezes por semana traz benefícios desde que utilizadas com gentileza!</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-sm-8 clearfix-on-mobile pos-r">

            <div class="tooltip-produto tooltip-higienizar-4">
                <a class="btn-tooltip"></a>

                <span class="tracejado animated fadeInDown hide"></span>

                <div class="conteudo-tooltip animated fadeInDown hide">
                    <a href="#" class="btn"><i class="fa fa-times"></i></a>
                    <div class="nome-produto">
                        <h1 class="titulo-marca animated fadeInUp">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp">Loção matificante</h3>
                    </div> <!-- .nome-produto -->

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Tripla ação matificante, purificante e adstringente. <br>
                        Ação microesfoliante. <br>
                        Fecha os poros <br>
                    </p>

                    <strong class="titulo-azul">Modo de Uso</strong>

                    <p>
                        Aplicar com algodão sobre o rosto perfeitamente limpo.
                        <br>
                        TEXTURA ULTRA SECA RICA EM PÓS MATIFICANTES
                    </p>
                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <div class="tooltip-produto tooltip-higienizar-5">
                <a class="btn-tooltip"></a>

                <span class="tracejado animated fadeInDown hide"></span>

                <div class="conteudo-tooltip animated fadeInDown hide">
                    <a href="#" class="btn"><i class="fa fa-times"></i></a>
                    <div class="nome-produto">
                        <h1 class="titulo-marca animated fadeInUp">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp">Emulsão seborreguladora matificante</h3>
                    </div> <!-- .nome-produto -->

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Efeito antibrilho imediato e duradouro <br>
                        Controla a oleosidade ao longo do dia <br>
                        Fecha os poros <br>
                        Complexo antibrilho exclusivo <br>
                        Microcápsulas absorventes
                        <br>
                        TEXTURA GELIFICADA NÃO OLEOSA DE RÁPIDA ABSORÇÃO
                    </p>

                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <?php echo $this->Html->image("produtos_linha_cleanance_3.png", ['class' => 'img-responsive img-linha-cleanance pull-right']); ?>
            <?php echo $this->Html->image("produtos_linha_cleanance_2.png", ['class' => 'img-responsive img-linha-cleanance pull-right']); ?>

        </div>

    </div> <!-- .row -->
</div> <!-- .container -->