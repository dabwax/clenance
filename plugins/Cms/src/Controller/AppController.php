<?php

namespace Cms\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public $session;
    public $controllers_permitidos = [
        'Auth'
    ];
    public $actions_permitidas = [
        'login'
    ];

    public function initialize()
    {
        parent::initialize();

        // Carrega alguns componentes
        $this->loadComponent('Flash');

        // Deixa o componente de sessão ativado
        $this->session = $this->request->session();

        // Envia os dados do usuário logado pra view
        $this->sendUserLoggedDataToView();

        // Verifica quais actions podem ser visitas sem estar logado
        $this->publicPrivateActions();
    }

    public function publicPrivateActions() {
        $user = $this->session->read("user");
        $controller_atual = $this->request->params['controller'];
        $action_atual = $this->request->params['action'];
        $pode_acessar = true;

        if(!in_array($action_atual, $this->actions_permitidas)) {
            $pode_acessar = false;
        } else {
            $pode_acessar = true;
        }

        if(!in_array($controller_atual, $this->controllers_permitidos)) {
            $pode_acessar = false;
        } else {
            $pode_acessar = true;
        }

        if(!empty($user)) {
            $pode_acessar = true;
        }

        if(!$pode_acessar) {
            $this->Flash->error("Você não tem permissão para acessar esta página.");

            return $this->redirect(['controller' => 'auth', 'action' => 'login']);
        }
    }

    public function sendUserLoggedDataToView()
    {
        $user = $this->session->read("user");

        if(!empty($user)) {
            $this->set(compact("user"));
        } else {
            $this->set("user", false);
        }
    }

}
