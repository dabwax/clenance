<?php
    $this->assign("title", "Linha Completa");
?>


<div class="container">
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="bolinhas">
                <a href="<?php echo $this->Url->build(['action' => 'higienizar']); ?>" class="animated fadeInDown"><span>1</span> <p>Higienizar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'tonificar_e_cuidar']); ?>" class="animated fadeInDown"><span>2</span> <p>Tonificar <br> e Cuidar</p></a>
                <a href="<?php echo $this->Url->build(['action' => 'proteger']); ?>" class="animated fadeInDown"><span>3</span> <p>Proteger</p></a>
            </div> <!-- .bolinhas -->

            <div class="clearfix"></div>

            <h2 class="chamada">Conheça a linha completa de <strong>Cleanance</strong></h2>
            <p class="sub-chamada">Clique em cada etapa e saiba mais sobre os <br> produtos da linha Cleanance.</p>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs pull-right">
            <div class="mt30">
                <h1 class="titulo-marca animated fadeInUp">Cleanance</h1>
                <h2 class="subtitulo-marca animated fadeInUp">Higieniza, purifica e combate</h2>
                <h3 class="subtitulo-marca animated fadeInUp">a oleosidade na origem</h3>
            </div>
        </div>

    </div> <!-- .row -->
    <div class="row">

        <div class="col-lg-12 text-center">
            <?php echo $this->Html->image("imagens_produtos_1_pagina.png", ["class" => "img-responsive-on-mobile"]); ?>
        </div>
    </div>
</div> <!-- .container -->