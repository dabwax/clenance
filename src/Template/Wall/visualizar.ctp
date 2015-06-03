<form action="" method="POST" class="formulario">

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">

                <div class="row">

                    <div class="col-md-6">
                        <div class="registro-cleanance-wall">
                            <div class="container-imagem" style="height: 500px;">
                                <?php echo $this->Html->image("/uploads/participants/" . $p->attachment_cropped, ['class' => 'img-responsive']); ?>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 center-on-mobile">

                        <div class="informacoes-usuario">
                            <div class="row">

                                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 center-on-mobile">
                                    <p class="usuario center-on-mobile"><?php echo $p->name; ?></p>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="curtidas">
                            <div class="row">
                                <div class="col-lg-3 text-center">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                                <div class="col-lg-9">
                                    <h2><?php echo $p->likes; ?> curtidas</h2>

                                    <?php echo $this->Form->create("Participant"); ?>
                                    <?php echo $this->Form->input("id", ['value' => $p->id, 'type' => 'hidden']); ?>
                                    <button type="submit" class="btn btn-block btn-lg btn-primary" style="margin-top: 20px;">clique aqui para curtir</a>
                                    <?php echo $this->Form->end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- .row -->
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>

</form>