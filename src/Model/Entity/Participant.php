<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;
use Cake\Routing\Router;

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


            $newpath = WWW_ROOT . 'uploads/participants/' . $filename;
            $newpath2 = WWW_ROOT . 'uploads/participants/efeito1_' . $filename;
            $newpath3 = WWW_ROOT . 'uploads/participants/efeito2_' . $filename;
            $newpath4 = WWW_ROOT . 'uploads/participants/efeito3_' . $filename;
            $newpath5 = WWW_ROOT . 'uploads/participants/efeito4_' . $filename;
            $newpath6 = WWW_ROOT . 'uploads/participants/efeito5_' . $filename;
            $newpath7 = WWW_ROOT . 'uploads/participants/efeito6_' . $filename;

            // Efetua o upload
            move_uploaded_file($upload['tmp_name'], $newpath);

            require_once WWW_ROOT . 'vendor/wideimage/WideImage.php';
            require_once WWW_ROOT . 'vendor/instagraph/lib/Instagraph/Instagraph.php';


            \WideImage::load($newpath)->resize(500, 500, 'outside')->saveToFile($newpath);

            $instagraph = new \Instagraph;
            $instagraph->setInput($newpath);
            $instagraph->setOutput($newpath2);
            $instagraph->process('gotham');

            $instagraph->setOutput($newpath3);
            $instagraph->process('nashville');

            $instagraph->setOutput($newpath4);
            $instagraph->process('lomo');

            $instagraph->setOutput($newpath5);
            $instagraph->process('kelvin');

            $instagraph->setOutput($newpath6);
            $instagraph->process('tiltShift');

            $instagraph->setOutput($newpath7);
            $instagraph->process('toaster');

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

/**
 * Função utilizada para efetuar o crop na imagem do participante.
 *
 * @param  [string] $efeito [Qual efeito foi utilizado - efeito1, efeito2, etc]
 * @param  [integer] $x      [Posição X do crop]
 * @param  [integer] $y      [Posição Y do crop]
 * @param  [integer] $w      [Largura do crop]
 * @param  [integer] $h      [Altura do crop]
 * @return [string]         [Nome da imagem croppada]
 */
    public function crop_user_image($efeito, $x, $y, $w, $h)
    {

            require_once WWW_ROOT . 'vendor/wideimage/WideImage.php';

            $filename = $this->attachment;

            if(!empty($efeito) && $efeito != "nenhum") {
                $filename = $efeito . "_" . $filename;
            }

            $newfilename = 'crop_' . $filename;

            $path = WWW_ROOT . 'uploads/participants/' . $filename;
            $newpath = WWW_ROOT . 'uploads/participants/' . $newfilename;

            \WideImage::load($path)->crop($x, $y, $w, $h)->saveToFile($newpath);

            // Atualiza o campo de anexo
            $participants = TableRegistry::get('Participants');

            $this->attachment_effect = $efeito;
            $this->attachment_cropped = $newfilename;

            $participants->save($this);

            return $newfilename;
    }

/**
 * Função utilizada para recuperar todos os stickers disponíveis.
 * Utilizado na etapa 2 do desafio.
 *
 * @return [void]
 */
    public function getStickers()
    {
        // Puxa todos os arquivos da pasta de stickers
        $path = WWW_ROOT . 'img/stickers/';
        $files = array_diff(scandir($path), array('..', '.', 'bkp'));

        // Por questões de organização
        sort($files);

        $tmp = array();

        // Itera as imagens disponíveis
        foreach($files as $f) {
            // Caminho no sistema da imagem
            $imagepath = $path . $f;
            // Recupera as dimensões da imagem
            $imagesize = getimagesize($imagepath);

            // Salva os dados da imagem
            $tmp[] = array(
                'filename' => $f,
                'path' => Router::url('/img/stickers/' . $f),
                'width' => $imagesize[0],
                'height' => $imagesize[1],
            );
        }

        // Transforma a variável temporária na definitiva
        $files = $tmp;

        // Retorna os stickers
        return $files;
    }
}