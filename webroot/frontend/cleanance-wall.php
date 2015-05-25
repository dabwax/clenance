<?php require_once "header.php"; ?>

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
                        63
                    </div> <!-- .numeracao -->
                    <p class="numeracao-p">
                        Pessoas estão declarando seu amor por Cleanance!
                    </p>
                </div> <!-- .col-lg-3 -->

                </div> <!-- .row -->

                <div class="row">

                    <?php for($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-md-3">
                        <div class="registro-cleanance-wall">
                            <a href="interna-cleanance-wall.php">
                            <img src="http://placehold.it/300x300" class="img-responsive" alt="">
                            <div class="pull-left">
                                <p>Fulana</p>
                            </div>

                            <div class="pull-right">
                                <p class="etc">
                                <i class="fa fa-heart-o"></i> 83 <i class="fa fa-comment-o"></i> 21
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
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>

                </div> <!-- .row -->
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>

</form>

<?php require_once "footer.php"; ?>