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
                    Envie também sua foto ou compartilhe no seu Instagram usando <span style="color: #0099A8;">#EuAmoCleanance</span>.</p>
                </div> <!-- .col-lg-6 -->

                <div class="col-lg-3 col-md-4" style="padding-top: 20px;">
                    <div class="numeracao">
                        <?php echo sizeof($query); ?>
                    </div> <!-- .numeracao -->
                    <p class="numeracao-p">
                        Pessoas estão declarando seu amor por Cleanance!
                    </p>
                </div> <!-- .col-lg-3 -->

                </div> <!-- .row -->

                <div class="row">

                    <?php foreach($participants as $p) { ?>
                    <div class="col-md-3">
                        <div class="registro-cleanance-wall" style="height: 320px;">
                            <a href="<?php echo $this->Url->build(['action' => 'visualizar', $p->id]); ?>">
                            <div class="container-imagem">
                                <?php echo $this->Html->image("/uploads/participants/" . $p->attachment); ?>
                            </div>
                            <div class="pull-left">
                                <p><?php echo $p->name; ?></p>
                            </div>

                            <div class="pull-right">
                                <p class="etc">
                                <i class="fa fa-heart-o"></i> <?php echo $p->likes; ?> <i class="fa fa-comment-o"></i> <?php echo $p->comments_count; ?>
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