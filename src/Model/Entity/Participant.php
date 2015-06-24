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
 * Função utilizada para efetuar o crop na imagem do participante.
 *
 * @param  [string] $efeito [Qual efeito foi utilizado - efeito1, efeito2, etc]
 * @param  [integer] $x      [Posição X do crop]
 * @param  [integer] $y      [Posição Y do crop]
 * @param  [integer] $w      [Largura do crop]
 * @param  [integer] $h      [Altura do crop]
 * @return [string]         [Nome da imagem croppada]
 */
    public function resize_user_image($efeito, $w, $h)
    {

            require_once WWW_ROOT . 'vendor/wideimage/WideImage.php';

            $filename = $this->attachment;

            if(!empty($efeito) && $efeito != "nenhum") {
                $filename = $efeito . "_" . $filename;
            }

            $newfilename = 'crop_' . $filename;

            $path = WWW_ROOT . 'uploads/participants/' . $filename;
            $newpath = WWW_ROOT . 'uploads/participants/' . $newfilename;

            \WideImage::load($path)->resize($w, $h)->saveToFile($newpath);

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

/**
 * Salva os stickers selecionados na posição desejada.
 *
 * @param  [type] $data Dados dos stickers: ['stickers' => ['sticker_filename' => 'etc....', 'sticker_width', 'sticker_height', 'sticker_rotatex', 'sticker_rotatey']]
 * @return [type]       [description]
 */
    public function saveStickers($data) {

        require_once WWW_ROOT . 'vendor/wideimage/WideImage.php';

        $stickers = $data['stickers'];

        unset($stickers[0]);

        foreach($stickers as $s) {

            $attachment_cropped = $this->attachment_cropped;
            $image = \WideImage::loadFromFile(WWW_ROOT . 'uploads' . DS . 'participants' . DS . $attachment_cropped);

            $attachment_sticker = str_replace('/clenance/', '/', $s['sticker_filename']);

            // Carrega o Mobile Detect
            require_once WWW_ROOT . 'vendor' . DS . 'Mobile-Detect' . DS . 'Mobile_Detect.php';

            $detect = new \Mobile_Detect;

            if( $detect->isMobile() || $detect->isTablet() ){
                $is_mobile = true;
            } else {
                $is_mobile = false;
            }

            if(!$is_mobile) {
                $sticker = \WideImage::loadFromFile(WWW_ROOT . $attachment_sticker)->resize($s['sticker_width'] - 10, $s['sticker_height'] - 10, 'fill');
            } else {
                $sticker = \WideImage::loadFromFile(WWW_ROOT . $attachment_sticker)->resize(80);
            }

            if(!empty($s['sticker_rotatez'])) {
                $sticker = $sticker->rotate(floatval(rad2deg($s['sticker_rotatez'])));
            }

            $explode = explode(".", $attachment_cropped);
            $ext = end($explode);

            if(strtolower($ext) == "png") {
                $quality = 9;
            } else {
                $quality = 90;
            }

            $new = $image->merge($sticker, $s['sticker_rotatex'] + 5, $s['sticker_rotatey'] + 5)->saveToFile(WWW_ROOT . 'uploads/participants/' . $attachment_cropped, $quality);
        } // fim - stickers

        return true;
    }
}