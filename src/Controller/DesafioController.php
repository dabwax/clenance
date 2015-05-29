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
                $this->Flash->success("A sua foto está linda! Agora, você irá embelezar ela como quiser.");

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

        // Le os dados do participante
        $participant = $session->read("last_participant");
        $participantEntity = new Participant($participant);

        // Envia pra view
        $this->set(compact("participant", "effects"));

        // Se houver requisição POST
        if($this->request->is("post")) {
            // Armazena qual a ação ele escolheu (voltar ou próximo)
            $acao = $this->request->data['acao'];

            // Se for voltar
            if($acao == "voltar") {
                // Deleta os dados do participante
                $session->delete('last_participant');

                // Redireciona para a página inicial do desafio
                return $this->redirect( ['action' => 'index'] );

            }

            // Se for próximo
            if($acao == "proximo") {

                // Armazena o efeito selecionado e qual a posição de crop
                $efeito = $this->request->data['efeito'];
                $x = $this->request->data['cropX'];
                $y = $this->request->data['cropY'];
                $w = $this->request->data['cropW'];
                $h = $this->request->data['cropH'];

                // Efetua o crop na imagem
                $participantEntity->crop_user_image($efeito, $x, $y, $w, $h);

                // Envia o usuário para a etapa 2
                return $this->redirect( ['action' => 'etapa_2'] );

            }
        }
    }

    public function etapa_2()
    {
        // Le os dados do participante
        $session = $this->request->session();
        $participant = $session->read("last_participant");
        $participantsTable = TableRegistry::get('Participants');
        $participant = $participantsTable->get($participant['id']);

        // Armazena todos os stickers disponíveis
        $stickers = $participant->getStickers();

        // Envia pra view
        $this->set(compact("participant", "stickers"));

        // Se houver requisição POST
        if($this->request->is("post")) {
            // Armazena a ação (voltar ou próximo)
            $acao = $this->request->data['acao'];

            // Se for voltar, vai para a etapa 1
            if($acao == "voltar") {

                return $this->redirect( ['action' => 'etapa_1'] );
            }

            // Se for para próximo, vai para a etapa 3
            if($acao == "proximo") {

                return $this->redirect( ['action' => 'etapa_3'] );

            }
        }
    }

}