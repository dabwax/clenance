<?php
    $this->assign("title", "Cleanance Wall");
?>
<form action="" method="POST" class="formulario">

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">
                <div class="row">

                <div class="col-lg-2 col-md-2 text-center">
                    <img src="img/eu-amo-clenance.jpg" style="margin: 0 auto; margin-top: 32px;" alt="" class="img-responsive">
                </div> <!-- .col-lg-3 -->

                <div class="col-lg-7 col-md-6">
                    <p style="font-size: 14px;">Olhe quem já compartilhou o seu momento incrível com Cleanance. <br>
                    Envie também a sua foto ou compartilhe no seu Instagram usando <span style="color: #0099A8;">#EuAmoCleanance</span>.</p>
                </div> <!-- .col-lg-6 -->

                <div class="col-lg-3 col-md-4" style="padding-top: 20px;">
                    <div class="numeracao">
                        <?php echo $query->count(); ?>
                    </div> <!-- .numeracao -->
                    <p class="numeracao-p">
                        Pessoas estão declarando seu amor por Cleanance!
                    </p>
                </div> <!-- .col-lg-3 -->

                </div> <!-- .row -->

                <div class="row">

                    <?php foreach($participants as $p) { ?>
                    <div class="col-md-3">
                        <div class="registro-cleanance-wall" style="height: 340px;">
                            <a href="<?php echo $this->Url->build(['action' => 'visualizar', $p->id]); ?>" class="btn-fancybox">
                            <div class="container-imagem" style="overflow: hidden;">
                            <?php $timthumb = $this->Url->build('/vendor/timthumb.php'); ?>
                                <?php echo $this->Html->image($timthumb . "?w=240&src=" . $this->Url->build('/webroot/uploads/participants/' . $p->attachment_cropped, true)); ?>
                            </div>
                            <div class="pull-left" style="width: 80%;">
                                <p style="word-wrap: break-word;"><?php echo $p->name; ?></p>
                                <?php if(!empty($p->slug)) : ?>
                                <p style="font-size: 12px;">@<?php echo (!empty($p->slug)) ? $p->slug : ''; ?></p>
                            <?php endif; ?>
                            </div>

                            <div class="pull-right" style="width: 20%; text-align: right;">
                                <p class="etc">
                                <i class="fa fa-heart-o"></i> <?php echo $p->likes; ?>
                                </p>
                            </div>

                            <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="clearfix"></div>


                    <nav class="text-center">
                      <ul class="pagination">
                        <?php echo $this->Paginator->prev(); ?>
                        <?php echo $this->Paginator->numbers(); ?>
                        <?php echo $this->Paginator->next(); ?>
                      </ul>
                    </nav>

                </div> <!-- .row -->
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>

</form>