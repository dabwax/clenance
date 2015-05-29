<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Participant;

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
        $participantEntity = new Participant($participant);

        $this->set(compact("participant", "effects"));

        if($this->request->is("post")) {
            $acao = $this->request->data['acao'];
            $session = $this->request->session();

            if($acao == "voltar") {
                $session->delete('last_participant');

                return $this->redirect( ['action' => 'index'] );

            }
            if($acao == "proximo") {

                $efeito = $this->request->data['efeito'];
                $x = $this->request->data['cropX'];
                $y = $this->request->data['cropY'];
                $w = $this->request->data['cropW'];
                $h = $this->request->data['cropH'];

                $participantEntity->crop_user_image($efeito, $x, $y, $w, $h);

                return $this->redirect( ['action' => 'etapa_2'] );

            }
        }
    }

    public function etapa_2()
    {
        $session = $this->request->session();
        $participant = $session->read("last_participant");

        $participantsTable = TableRegistry::get('Participants');

        $participant = $participantsTable->get($participant['id']);

        $this->set(compact("participant"));

        if($this->request->is("post")) {
            $acao = $this->request->data['acao'];

            if($acao == "voltar") {
                $session->delete('efeito');

                return $this->redirect( ['action' => 'etapa_1'] );

            }
            if($acao == "proximo") {

                return $this->redirect( ['action' => 'etapa_3'] );

            }
        }
    }

}