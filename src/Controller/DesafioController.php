<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 *  Controller referente as páginas do Desafio.
 *
 * @author lhas <henrique@bblender.com.br>
 */
class DesafioController extends AppController
{

/**
 * Página inicial.
 * @return void
 */
    public function index()
    {
        // Carrega os models necessários
        $this->loadModel("Participant");

        // Se houver alguma requisição POST
        if($this->request->is("post")) {
            // Gera objetos Table e Entity
            $participants = TableRegistry::get('Participants');
            $entity = $participants->newEntity($this->request->data());

            // Tenta salvar o entity
            $result = $participants->save($entity);

            // Se salvar
            if($result) {
                // Mensagem de sucesso
                $this->Flash->success("Parabéns! Agora você irá enviar a sua foto.");

                // Inclui o ID inserido nos dados
                $this->request->data['id'] = $result->id;

                // Efetua o upload do anexo
                $this->request->data['attachment'] = $entity->uploadAttachment($result->id, $this->request->data['attachment']);

                // Insere na sessão os dados do participante inserido
                $session = $this->request->session();
                $session->write('last_participant', $this->request->data);

                // Redireciona para primeira etapa
                return $this->redirect( ['action' => 'etapa_1'] );
            }
        } // fim - POST
    }

/**
 * 1ª Etapa do desafio.
 *
 * @return void
 */
    public function etapa_1()
    {
        $session = $this->request->session();
        $participant = $session->read("last_participant");
        $effects = [
            'sunrise' => 'Por do Sol',
            'love' => 'Amor',
            'pinhole' => 'Pinha',
            'hazyDays' => 'Dia Acelerado',
            'hipster' => 'Hipster',
            'hippie' => 'Hippie',
        ];

        $this->set(compact("participant", "effects"));

        if($this->request->is("post")) {
            $acao = $this->request->data['acao'];
            $session = $this->request->session();

            if($acao == "voltar") {
                $session->delete('last_participant');

                return $this->redirect( ['action' => 'index'] );

            }
            if($acao == "proximo") {

                $session->write('imagem_base64', $this->request->data['imagem_base64']);

                return $this->redirect( ['action' => 'etapa_2'] );

            }
        }
    }

    public function etapa_2()
    {
        $session = $this->request->session();
        $imagem_base64 = $session->read("imagem_base64");
        $participant = $session->read("last_participant");

        $filename = $participant['attachment'];

        $this->base64_to_jpeg($imagem_base64, WWW_ROOT . "uploads/participants/" . $filename);

    }

    function base64_to_jpeg($base64_string, $output_file) {
        $ifp = fopen($output_file, "wb");

        $data = explode(',', $base64_string);

        fwrite($ifp, base64_decode($data[1]));
        fclose($ifp);

        return $output_file;
    }
}