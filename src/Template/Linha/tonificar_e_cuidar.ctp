<?php
    $this->assign("title", "Tonificar e Cuidar - Linha Completa");
?>


<div class="container">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="bolinhas">
                <a href="<?php echo $this->Url->build(['action' => 'higienizar']); ?>" class="animated fadeInDown"><span>1</span> <p>Higienizar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'tonificar_e_cuidar']); ?>" class="tonificar_e_cuidar animated fadeInDown ativo"><span>2</span> <p>Tonificar <br> e Cuidar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'proteger']); ?>" class="animated fadeInDown"><span>3</span> <p>Proteger</p></a>
            </div> <!-- .bolinhas -->

            <div class="clearfix"></div>

            <div class="box-dica-dermatologista">
                <h2 class="chamada">
                    <?php echo $this->Html->image("bonequinha.png"); ?>
                    <strong>Dica do Dermatologista</strong>
                </h2>
                <div class="box-branco text-justify">

                    <p>A tonificação e o cuidado da pele após higiene diária é considerada uma etapa importante na rotina de cuidados diários.</p>
<p>A principal função do tônico é finalizar a higiene facial contribuindo com sua ação adstringente, muitas vezes seborreguladora dada a sua composição especialmente formulada para manter as peles oleosas e acneicas sob controle, com aparência refrescante e saudável o dia todo.</p>
<p>O cuidado da pele após higiene diário em como principal função de uniformizar a pele, fechar os poros, controlar a oleosidade ao longo do dia e fixar a maquiagem por mais tempo.</p>
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
                        <h1 class="titulo-marca animated fadeInUp" style="font-size: 34px;">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp" style="margin-bottom: 20px;">Loção matificante</h3>
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
                        <h1 class="titulo-marca animated fadeInUp" style="font-size: 34px;">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp" style="margin-bottom: 20px;">Emulsão seborreguladora matificante</h3>
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

            <?php echo $this->Html->image("produtos_2.png", ['class' => 'img-responsive img-linha-cleanance img-produtos-2 pull-right', 'style' => 'margin-top: 62px; margin-bottom: 70px !important;']); ?>

            <div class="clearfix"></div>

        </div>

    </div> <!-- .row -->
</div> <!-- .container -->