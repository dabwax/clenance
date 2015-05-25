<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;

class Participant extends Entity
{
    /**
     * Função utilizada para fazer upload do campo de anexo.
     *
     * @param  int $participant_id O ID do participante que fez o upload
     * @param  [type] $upload O array do campo do arquivo
     * @return boolean true O upload funcionou
     * @return boolean false O upload deu merda.
     */
    public function uploadAttachment($participant_id, $upload) {
        if($upload['error'] == 0 && !empty($upload)) {
            // Atalho para o nome do arquivo temporário
            $ext = pathinfo($upload['name'], PATHINFO_EXTENSION);
            $name = pathinfo($upload['name'], PATHINFO_FILENAME);
            $filename = $participant_id . '_' . Inflector::slug($name) . '.' . $ext;

            // Efetua o upload
            move_uploaded_file($upload['tmp_name'], WWW_ROOT . 'uploads/participants/' . $filename);

            // Atualiza o campo de anexo
            $participants = TableRegistry::get('Participants');
            $participant = $participants->get($participant_id);

            $participant->attachment = $filename;

            $participants->save($participant);

            return $filename;
        }

        // algo deu errado
        return false;
    }
}