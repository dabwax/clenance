<div class="row">
<div class="text-center" style="position: fixed; top: 30%; width: 35%; left: 50%; margin-left: -20%; background: #FFF; padding: 22px; border-radius: 12px;">
    <?php echo $this->Html->image("logo_avene.png", ['style' => 'margin-bottom: 30px;']); ?>

    <?php echo $this->Form->create('User', ['action' => 'login', 'class' => 'validate']); ?>

            <div class="form-group">
                <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                      <?php echo $this->Form->input('email', array(
                        'label' => false,
                        'class' => 'form-control required email',
                        'div' => false,
                        'minlength' => 4,
                        'placeholder' => 'E-mail',
                        'type' => 'text'
                        ));
                        ?>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                      <?php echo $this->Form->input('password', array(
                        'label' => false,
                        'class' => 'form-control required',
                        'minlength' => 4,
                        'div' => false,
                        'placeholder' => 'Senha'
                        ));
                        ?>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit"><i class="fa fa-sign-in"></i> Entrar</button>
            </div>

            <?php echo $this->Form->end(); ?>

</div>
</div>
