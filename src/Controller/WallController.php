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
    }
}