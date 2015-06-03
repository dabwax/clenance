<h2 class="titulo-painel">Editar Usuário</h2>
<hr>
<?php echo $this->Form->create($query); ?>

<?php echo $this->Form->input("id"); ?>

<div class="form-group">
    <?php echo $this->Form->input("email", ['class' => 'form-control']); ?>
</div>

<div class="form-group">
    <?php echo $this->Form->input("password", ['value' => '', 'class' => 'form-control', 'label' => 'Senha']); ?>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-block btn-primary">
        <i class="fa fa-floppy-o"></i> Salvar
    </button>
</div>

<?php echo $this->Form->end(); ?>