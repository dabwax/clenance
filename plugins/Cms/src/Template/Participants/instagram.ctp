<table class="table table-datatable">
    <thead>
        <tr>
            <th>Likes</th>
            <th>Data de Envio</th>
            <th>Foto</th>
            <th>Usuário</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($images as $i) : if(empty($participants[$i->user->username])) { ?>
        <tr>
            <td>
                <?php echo $i->likes->count; ?>
            </td>
            <td>
                <span class="hide"><?php $date = DateTime::createFromFormat('U', $i->created_time); echo $date->format("YmdHis"); ?></span>
                <?php $date = DateTime::createFromFormat('U', $i->created_time); echo $date->format("d/m/Y H:i:s"); ?>
            </td>
            <td><img src="<?php echo $i->images->thumbnail->url; ?>" /></td>
            <td>
                <?php echo $i->user->username; ?>
            </td>
            <td>
                <?php echo $i->user->full_name; ?>
            </td>
            <td>
                <?php $url = $i->images->standard_resolution->url; ?>
                <?php echo $this->Form->create("Participant"); ?>
                <?php echo $this->Form->input("likes", ['value' => $i->likes->count, 'type' => 'hidden']); ?>
                <?php echo $this->Form->input("approved", ['value' => 1, 'type' => 'hidden']); ?>
                <?php echo $this->Form->input("name", ['value' => $i->user->full_name, 'type' => 'hidden']); ?>
                <?php echo $this->Form->input("slug", ['value' => $i->user->username, 'type' => 'hidden']); ?>
                <?php echo $this->Form->input("attachment_cropped", ['value' => $url, 'type' => 'hidden']); ?>
                <button type="submit" class="btn btn-xs btn-success">Aprovar</button>
                <?php echo $this->Form->end(); ?>
            </td>
        </tr>
    <?php } endforeach; ?>
    </tbody>
</table>