<table class="table table-datatable">
    <thead>
        <tr>
            <th>Data de Envio</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Curtidas</th>
            <th>Aprovado?</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($query as $p) : ?>
        <tr>
            <td>
            <span class="hide">
            <?php echo $p->created->getTimestamp(); ?>
            </span>
            <?php echo $p->created->format("d/m/Y H:i:s"); ?>
            </td>
            <td>
            <?php echo $this->Html->image("/uploads/participants/" . $p->attachment_cropped, ['class' => 'img-thumbnail', 'style' => 'width: 120px;']); ?>
            </td>
            <td>
            <?php echo $p->name; ?>
            </td>
            <td>
            <?php echo $p->likes; ?> likes
            </td>
            <td>
            <?php echo ($p->approved == 1) ? "<span class='label label-success'>Aprovado</span>" : "<span class='label label-danger'>Reprovado</span>"; ?>
            </td>
            <td>
                <?php if($p->approved == 0) : ?>
                <a href="<?php echo $this->Url->build(['action' => 'approve', 1, $p->id]); ?>" onclick="if(!confirm('Você tem certeza disto? Esta ação é permanente!')) { return false; }" class="btn btn-success btn-xs">
                    <i class="fa fa-star"></i>
                </a>
                <?php endif; ?>

                <?php if($p->approved == 1) : ?>
                <a href="<?php echo $this->Url->build(['action' => 'approve',  0, $p->id]); ?>" onclick="if(!confirm('Você tem certeza disto? Esta ação é permanente!')) { return false; }" class="btn btn-warning btn-xs">
                    <i class="fa fa-star"></i>
                </a>
                <?php endif; ?>

               <!-- <a href="<?php echo $this->Url->build(['action' => 'edit', $p->id]); ?>" class="btn btn-default btn-xs">
                    <i class="fa fa-pencil"></i>
                </a>-->
                <a href="<?php echo $this->Url->build(['action' => 'delete', $p->id]); ?>" onclick="if(!confirm('Você tem certeza disto? Esta ação é permanente!')) { return false; }" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>