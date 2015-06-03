<?php

namespace Cms\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public $session;


    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');

        $this->session = $this->request->session();
    }

}
