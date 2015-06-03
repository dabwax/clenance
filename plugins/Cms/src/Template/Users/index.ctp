<table class="table table-datatable">
    <thead>
        <tr>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($query as $u) : ?>
        <tr>
            <td>
            <?php echo $u->email; ?>
            </td>
            <td>
                <a href="<?php echo $this->Url->build(['action' => 'edit', $u->id]); ?>" class="btn btn-default btn-xs">
                    <i class="fa fa-pencil"></i> Editar
                </a>
                <a href="<?php echo $this->Url->build(['action' => 'delete', $u->id]); ?>" onclick="if(!confirm('Você tem certeza disto? Esta ação é permanente!')) { return false; }" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash"></i> Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>