<?php echo $this->Form->create("Participant", ['class' => 'formulario validar-formulario', 'type' => 'file']); ?>

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-4">

                        <?php echo $this->Html->image("eu-amo-clenance.jpg", ["class" => "img-responsive", "style" => "margin: 0 auto;"]) ?>

                        <p>Preencha o formulário abaixo</p>

                            <div class="form-group">
                                <?php echo $this->Form->input("name", ['placeholder' => 'Nome', 'class' => 'form-control required', 'label' => false, 'div' => false]); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $this->Form->input("email", ['placeholder' => 'E-mail', 'class' => 'form-control required email', 'label' => false, 'div' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $this->Form->input("phone", ['placeholder' => 'Telefone', 'class' => 'form-control required phone', 'label' => false, 'div' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="form-group campo-anexo">
                                <?php echo $this->Form->input("attachment", ['class' => 'form-control required', 'label' => false, 'div' => false, 'type' => 'file']); ?>
                            </div>
                            <div class="form-group campo-newsletter">
                                <label class="checkbox" style="font-size: 12px;">
                                    <?php echo $this->Form->input("newsletter", ['type' => 'checkbox', 'label' => false]  ); ?> Aceito receber informações de Eau Thermale Avène.
                                </label>
                            </div>
                    </div>

                    <div class="col-lg-8 col-xs-12 col-sm-12">
                        <div class="regulamento2">

                            <div class="regulamento-container">

                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur condimentum sem, faucibus scelerisque risus ultrices ut. Nulla facilisi. Donec pulvinar magna vitae turpis sollicitudin ultrices. Proin feugiat leo et augue dapibus, ac pulvinar risus lacinia. Maecenas vitae risus egestas, varius nisi ut, feugiat erat. Quisque eget consequat quam. Quisque mattis interdum ex, nec eleifend velit. Donec euismod, metus eu auctor fermentum, lacus velit iaculis est, congue tincidunt mauris eros eu eros. Praesent dui lacus, tristique dictum risus eget, ultrices gravida magna. Nunc magna sem, ornare vel felis sed, aliquam tincidunt felis. Morbi bibendum aliquam mi id sollicitudin.
                                </p>

                                <p>
                                Nunc id velit vitae turpis molestie pulvinar nec et ex. Sed dapibus magna erat, ut maximus lacus tempus id. Nunc ultricies fringilla est ut congue. Donec hendrerit mattis ipsum, nec consequat sapien aliquam eu. Aenean tincidunt eros quis erat condimentum luctus. Aenean dui purus, elementum bibendum lacinia vitae, tempus non justo. Etiam consequat maximus nulla, eu hendrerit arcu tempor et. Suspendisse eleifend orci elit, at sollicitudin sapien convallis at.
                                </p>

                                <p>
                                Aenean dignissim facilisis est porttitor eleifend. Quisque auctor nisi a iaculis rutrum. In ultrices, enim ut varius lacinia, lorem nisi gravida dolor, nec vehicula neque lorem nec orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sagittis dui eget pharetra bibendum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu interdum velit. Ut vel aliquam est.
                                </p>
                                <p>
                                Ut vitae laoreet purus, a auctor sem. Fusce scelerisque leo at sapien pharetra, in fermentum purus dapibus. Ut finibus ac erat eget ornare. Aenean eget nisi vel lacus porttitor finibus efficitur auctor libero. Etiam quis viverra urna, vel suscipit est. Nullam justo mauris, iaculis ac interdum ut, vehicula sed arcu. Mauris a ex suscipit, imperdiet orci a, accumsan nunc. Nunc semper pretium est, nec vulputate dui interdum nec. Nunc laoreet pharetra felis, ut auctor massa varius non. Pellentesque et ante a ligula ultricies rutrum. Pellentesque suscipit posuere justo, in tincidunt justo condimentum vitae. Aenean et nisi et magna dapibus molestie.
                                </p>

                            </div> <!-- .regulamento-container -->
                        </div> <!-- .regulamento -->

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                                <div class="form-group campo-termos-de-uso">
                                    <label class="checkbox" style="margin-top: 18px;">
                                        <?php echo $this->Form->input("tos", ['type' => 'checkbox', 'label' => false, 'required' => true]  ); ?> Li e aceito os termos da promoção.
                                    </label>
                                </div>

                            </div> <!-- .col-lg-6 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                                <button type="submit" class="btn btn-primary btn-participe">Próximo</button>
                            </div> <!-- .col-lg-6 -->
                            </div> <!-- .row -->


                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>

<?php echo $this->Form->end(); ?>