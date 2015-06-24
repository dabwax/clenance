<?php
    $this->assign("title", "Proteger - Linha Completa");
?>


<div class="container">
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="bolinhas">
                <a href="<?php echo $this->Url->build(['action' => 'higienizar']); ?>" class="animated fadeInDown"><span>1</span> <p>Higienizar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'tonificar_e_cuidar']); ?>" class="tonificar_e_cuidar animated fadeInDown"><span>2</span> <p>Tonificar <br> e Cuidar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'proteger']); ?>" class="animated fadeInDown ativo"><span>3</span> <p>Proteger</p></a>
            </div> <!-- .bolinhas -->

            <div class="clearfix"></div>

            <div class="box-dica-dermatologista">
                <h2 class="chamada">
                    <?php echo $this->Html->image("bonequinha.png"); ?>
                    <strong>Dica do Dermatologista</strong>
                </h2>
                <div class="box-branco text-justify">
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
                        <h1 class="titulo-marca animated fadeInUp" style="font-size: 24px; font-weight: bold;">Avène Solar <br> Toque Seco</h1>
                        <h3 class="subtitulo-marca animated fadeInUp" style="font-size: 22px; margin-bottom: 20px;">FPS 30 e FPS 50+</h3>
                    </div> <!-- .nome-produto -->

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Ampla proteção UVB e <span style="padding: 4px; border: 1px solid #666; border-radius: 78%;">UVA</span> <br>
                        Tripla ação antibrilho. <br>
                        <em>Seborregula, seborreduz e matifica.</em> <br> <br>
                        Dupla ação antioxidante. <br>
                        <em> Previne o fotoenvelhecimento. <br>
                        Combate o fotodano. <br></em>
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
                        <h1 class="titulo-marca animated fadeInUp" style="font-size: 24px; font-weight: bold;">Avène Solar <br> Toque Seco</h1>
                        <h3 class="subtitulo-marca animated fadeInUp" style="font-size: 22px; margin-bottom: 20px;">FPS 30 e FPS 50+</h3>
                    </div> <!-- .nome-produto -->

                    <div class="clearfix"></div>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Ampla proteção UVB e <span style="padding: 4px; border: 1px solid #666; border-radius: 78%;">UVA</span> <br>
                        Tripla ação antibrilho. <br>
                        <em>Seborregula, seborreduz e matifica.</em> <br>
                        <br>
                        <em>
                        Dupla ação antioxidante. <br>
                        Previne o fotoenvelhecimento. <br></em>
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
                        <h1 class="titulo-marca animated fadeInUp" style="font-size: 34px;">Cleanance</h1>
                        <h3 class="subtitulo-marca animated fadeInUp" style="margin-bottom: 20px;">Solar</h3>
                    </div> <!-- .nome-produto -->

                    <div class="clearfix"></div>

                    <p>
                        <strong>Mais que uma textura, um fotoprotetor antiacne.</strong>
                    </p>

                    <strong class="titulo-azul">Benefícios</strong>

                    <p>
                        Ampla proteção UVB e <span style="padding: 4px; border: 1px solid #666; border-radius: 78%;">UVA</span> <br>
                        Nova fórmula antiacne e antioleosidade <br>
                        Antioxidante de longa duração <br>
                        NOVA TEXTURA ULTRA ABSORVENTE
                    </p>

                </div> <!-- .conteudo-tooltip -->
            </div> <!-- .tooltip-produto -->

            <?php echo $this->Html->image("produtos-solaire.png", ['class' => 'img-responsive img-linha-cleanance pull-right img-toque-seco']); ?>

            <div class="grupo-legendas">
                <span class="legenda-1" style="color: #EA6F0C;">Uniformizante</span>
            </div>

        </div>

    </div> <!-- .row -->
</div> <!-- .container -->