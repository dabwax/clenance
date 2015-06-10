<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class WallController extends AppController
{
    public $helpers = [
        'Paginator' => [
            'templates' => 'paginator-bootstrap'
        ]
    ];
    public $paginate = [
        'limit' => 10,
        'order' => [
            'Participants.created' => 'desc'
        ],
        'conditions' => [
            'Participants.approved' => 1
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        $participantsTable = TableRegistry::get("Participants");
        $query = $participantsTable->find("all");
        $participants = $this->paginate($query);

        $this->set(compact("query", "participants"));
    }

    public function visualizar($id)
    {
        $this->layout = "iframe";

        $participantsTable = TableRegistry::get("Participants");
        $query = $participantsTable->find("all");
        $p = $participantsTable->find()->where(['id' => $id])->first();
        $participants = $this->paginate($query);

        $this->set(compact("query", "participants", "p"));

        if($this->request->is("post")) {
            // 0 - recuperar ip do usuário
            $ip_address = $_SERVER['REMOTE_ADDR'];

            // 1 - buscar um registro em participant_likes que o participant_id = $id e ip_address = ip do usuário
            $where = [
                'ip_address' => $ip_address,
                'participant_id' => $id
            ];

            $participantLikesTable = TableRegistry::get("ParticipantLikes");
            $tmp = $participantLikesTable->find()->where($where)->first();

            // 2 - se a busca retornar vazia, incluir o novo registro de participant_like e dar success
            if(empty($tmp)) {
                $like = $participantLikesTable->newEntity();

                $like->ip_address = $ip_address;
                $like->participant_id = $id;

                $participantLikesTable->save($like);

                $p->likes = $p->likes + 1;

                $participantsTable->save($p);

                $this->Flash->success("O seu voto foi computado com sucesso!");
            }

            // 3 - se a busca retornar preenchida, dar error apenas
            if(!empty($tmp)) {
                $this->Flash->error("Você já votou para este participante!");
            }

            return $this->redirect(['action' => 'visualizar', $id]);
        }
    }
}