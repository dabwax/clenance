<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#reprovados" aria-controls="home" role="tab" data-toggle="tab">Reprovados</a></li>
    <li role="presentation"><a href="#aprovados" aria-controls="profile" role="tab" data-toggle="tab">Aprovados</a></li>
  </ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="reprovados">

        <table class="table table-datatable">
            <thead>
                <tr>
                    <th>Data de Envio</th>
                    <th>Foto</th>
                    <th>Likes / Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $p) : ?>
                <?php if($p->approved == 0) : ?>
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
                        <span class="label label-default"><?php echo $p->likes; ?></span> <?php echo $p->name; ?>
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

                        <a href="<?php echo $this->Url->build(['action' => 'delete', $p->id]); ?>" onclick="if(!confirm('Você tem certeza disto? Esta ação é permanente!')) { return false; }" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>

  </div>
  <div role="tabpanel" class="tab-pane fade" id="aprovados">

    <table class="table table-datatable">
            <thead>
                <tr>
                    <th>Data de Envio</th>
                    <th>Foto</th>
                    <th>Likes / Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $p) : ?>
                <?php if($p->approved == 1) : ?>
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
                        <span class="label label-default"><?php echo $p->likes; ?></span> <?php echo $p->name; ?>
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

                        <a href="<?php echo $this->Url->build(['action' => 'delete', $p->id]); ?>" onclick="if(!confirm('Você tem certeza disto? Esta ação é permanente!')) { return false; }" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>

  </div>
</div>