
<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">
                <div class="row">

                    <div class="col-xs-12 col-sm-4 col-lg-4 text-center">


                    <img src="<?php echo $this->Url->build('/img/cleanance.png'); ?>" alt="Eu Amo Cleanance" class="img-responsive img-eu-amo-clenance animated fadeIn" style="margin-top: 0px;">

                        <p style="
    margin-top: 10px;
    margin-bottom: 0px;
    font-size: 14px;
">Envie sua foto customizada pelo <span style="color: #0099A8;">hotsite</span></p>

                        <?php echo $this->Html->image("desafio_index1.png", ['class' => 'img-responsive', 'style' => 'margin-top: 0px; width: 100%;']); ?>

                        <p style="margin-top: 0px; font-size: 14px; margin-bottom: 0px;'">ou compartilhe no Instagram usando <span style="color: #0099A8;">#EuAmoCleanance</span>.</p>
                        <p style="margin-top: 4px; margin-bottom: 0px; font-size: 14px;">Já registrou seu momento especial? <br>
Agora é só enviar e personalizar seu click.</p>
                        <a href="<?php echo $this->Url->build(['action' => 'index2']); ?>" class="btn btn-primary btn-participe">Participar</a>

                    </div>

                    <div class="col-xs-12 col-sm-8 col-lg-8" style='padding-bottom: 60px;'>

                        <div id='euamocleanance-video'></div>

                        <script type='text/javascript'>
                            jwplayer('euamocleanance-video').setup({
                                file: 'https://s3-sa-east-1.amazonaws.com/euamocleanance/animacao_euamocleananceFINAL1.mp4',
                                image: '//www.longtailvideo.com/content/images/jw-player/lWMJeVvV-876.jpg',
                                title: 'Eu Amo Cleanance',
                                width: '100%',
                                <?php if($is_mobile == "false") : ?>
                                height: 500,
                                <?php endif; ?>
                                aspectratio: '4:3',
                                autostart: 'true',
                                logo: false
                            });
                        </script>

                    </div>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>