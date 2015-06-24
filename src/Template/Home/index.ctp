<div class="container">
    <div class="row">

            <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12">

                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12" style="position: relative;">

                        <span class="grupo-coracoes hidden-sm hidden-xs">
                            <span class="coracao-1 pulse2"></span>
                            <span class="coracao-2 pulse2"></span>
                            <span class="coracao-3 pulse2"></span>
                        </span>

                        <span class="grupo-coracoes grupo-coracoes2 hidden-sm hidden-xs">
                            <span class="coracao-1 pulse2"></span>
                            <span class="coracao-2 pulse2"></span>
                            <span class="coracao-3 pulse2"></span>
                        </span>

                        <span class="grupo-coracoes grupo-coracoes3 hidden-sm hidden-xs">
                            <span class="coracao-1 pulse2"></span>
                            <span class="coracao-2 pulse2"></span>
                        </span>

                        <span class="grupo-coracoes grupo-coracoes4 hidden-sm hidden-xs">
                            <span class="coracao-2 pulse2"></span>
                            <span class="coracao-3 pulse2"></span>
                        </span>

                            <span class="coracoes-3">
                                <a href="<?php echo $this->Url->build(['controller' =>'linha', 'action' => 'higienizar']); ?>" style="width: 100%; height: 100%; position: absolute; left: 0px; top: 0px; z-index: 999; text-decoration: none;">
                                    <p>Conheça os <br> lançamentos de <br> <strong>Cleanance</strong></p>
                                </a>
                            </span>

                        <div class="clearfix"></div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h1 class="titulo-marca animated fadeInUp">Cleanance</h1>
                        <h2 class="subtitulo-marca animated fadeInUp">Higieniza, purifica e combate</h2>
                        <h3 class="subtitulo-marca animated fadeInUp">a oleosidade na origem</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="<?php echo $this->Url->build('/img/imagem-nova-home.png'); ?>" class="img-produtos-home animated fadeIn img-responsive" alt="">
                    </div>
                </div>

            </div>

            <div class="col-xs-12 col-lg-5 col-md-5">

            <div class="col-bem-vindo height-100">
                    <p class="animated fadeIn">Estamos comemorando a chegada de novos produtos da linha Cleanance com o grande desafio de fotos:</p>

                    <img src="<?php echo $this->Url->build('/img/cleanance.png'); ?>" alt="Eu Amo Cleanance" class="img-responsive img-eu-amo-clenance animated fadeIn">

                    <p class="animated fadeIn">Compartilhe seus momentos incríveis com a gente. Para participar é fácil:</p>

                    <div class="row">

                        <div class="col-xs-12 col-sm-6 text-center col-md-6 col-lg-6">
                            <div class="animated fadeIn text-center">
                                <img src="<?php echo $this->Url->build('/img/bola-home-1.jpg'); ?>" class="img-responsive img-bolas-home" style="margin: 0 auto;" alt="">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 text-center col-md-6 col-lg-6">
                            <div class="animated fadeIn text-center">
                                <img src="<?php echo $this->Url->build('/img/bola-home-2.jpg'); ?>" class="img-responsive img-bolas-home" style="margin: 0 auto;" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-12 text-center" style="padding-bottom: 30px;">
                            <a href="<?= $this->Url->build(['controller' => 'desafio', 'action' => 'index']); ?>" class="btn btn-primary btn-participe animated fadeIn" style="margin-bottom: 10px;">Participe</a>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div> <!-- .col-bem-vindo -->

            </div>
    </div>
</div>
