<?php
    $this->assign("title", "Proteger - Linha Completa");
?>


<div class="container">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="bolinhas">
                <a href="<?php echo $this->Url->build(['action' => 'higienizar']); ?>" class="animated fadeInDown"><span>1</span> <p>Higienizar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'tonificar_e_cuidar']); ?>" class="animated fadeInDown"><span>2</span> <p>Tonificar <br> e Cuidar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'proteger']); ?>" class="animated fadeInDown ativo"><span>3</span> <p>Proteger</p></a>
            </div> <!-- .bolinhas -->

            <div class="clearfix"></div>

            <div class="box-dica-dermatologista">
                <h2 class="chamada">
                    <?php echo $this->Html->image("bonequinha.png"); ?>
                    <strong>Dica do Dermatologista</strong>
                </h2>
                <div class="box-branco">
                    <p>Os efeitos da radiação UV, tanto UVA quanto UVB, já são bem conhecidos de todos nós. Eles podem variar de uma queimadura ao câncer de pele.</p>

                    <p>Ao escolher um filtro solar deve-se levar em consideração a fórmula mais adequada ao seu tipo de pele, além do fator de proteção solar (FPS), idealmente acima de 30 em nosso território. Peles mais fotossensíveis ou em tratamento cosmético podem necessitar de um FPS mais alto.</p>

                    <p>É importante lembrar que o filtro solar deve ser reaplicado adequadamente (2g/cm²) de 3 em 3 horas, sempre sobre a pele seca.</p>

                    <p>Tomando todos estes cuidados você com certeza estará protegida. Só não se esqueça do mais importante: agende com regularidade uma visita ao seu dermatologista. Sem dúvida ele é o melhor amigo da sua pele!</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-sm-8 clearfix-on-mobile pos-r">

            <div class="tooltip-produto tooltip-higienizar-6">
                <a class="btn-tooltip"></a>

                <span class="tracejado animated fadeInDown hide"></span>

                <div class="conteudo-tooltip animated fadeInDown hide">
                    <a href="#" class="btn"><i class="fa fa-times"></i></a>
                    <div class="nome-produto laranja">
                        <h1 class="titulo-marca animated fadeInUp">Avène Solar Toque Seco</h1>
                        <h3 class="subtitulo-marca animated fadeInUp">FPS 30 e FPS 50+</h3>
                    </div> <!-- .nome-produto -->

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Ampla proteção UVB e UVA <br>
                        Tripla ação antibrilho. <br>
                        <em>Seborregula, seborreduz e matifica.</em>
                        Dupla ação antioxidante. <br>
                        Previne o fotoenvelhecimento. <br>
                        Combate o fotodano. <br>
                        <strong>Sem cor</strong> <br>
                        TEXTURA TOQUE SECO <br>
                        Oil-free para pele brasileira.
                    </p>

                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <div class="tooltip-produto tooltip-higienizar-7">
                <a class="btn-tooltip"></a>

                <span class="tracejado animated fadeInDown hide"></span>

                <div class="conteudo-tooltip animated fadeInDown hide">
                    <a href="#" class="btn"><i class="fa fa-times"></i></a>
                    <div class="nome-produto laranja">
                        <h1 class="titulo-marca animated fadeInUp">Avène Solar Toque Seco</h1>
                        <h3 class="subtitulo-marca animated fadeInUp">FPS 30 e FPS 50+</h3>
                    </div> <!-- .nome-produto -->

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Ampla proteção UVB e UVA <br>
                        Tripla ação antibrilho. <br>
                        <em>Seborregula, seborreduz e matifica.</em>
                        Dupla ação antioxidante. <br>
                        Previne o fotoenvelhecimento. <br>
                        Combate o fotodano. <br>
                        <strong>Com cor, uniformiza a pele e disfarça as pequenas imperfeições.</strong> <br>
                        TEXTURA TOQUE SECO <br>
                        Oil-free para pele brasileira.
                    </p>

                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <div class="tooltip-produto tooltip-higienizar-8">
                <a class="btn-tooltip"></a>

                <span class="tracejado animated fadeInDown hide"></span>

                <div class="conteudo-tooltip animated fadeInDown hide">
                    <a href="#" class="btn"><i class="fa fa-times"></i></a>
                    <div class="nome-produto">
                        <h1 class="titulo-marca animated fadeInUp">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp">Solar</h3>
                    </div> <!-- .nome-produto -->

                    <div class="clearfix"></div>

                    <p>
                        <strong>Mais que uma textura, um fotoprotetor antiacne.</strong>
                    </p>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Ampla proteção UVB e UVA <br>
                        Nova fórmula antiacne e antioleosidade <br>
                        Antioxidante de longa duração <br>
                        NOVA TEXTURA ULTRA ABSORVENTE
                    </p>

                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <?php echo $this->Html->image("produtosLaranja.png", ['class' => 'img-responsive img-linha-cleanance pull-right']); ?>

        </div>

    </div> <!-- .row -->
</div> <!-- .container -->