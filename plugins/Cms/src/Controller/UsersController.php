<?php
namespace Cms\Controller;

use Cms\Controller\AppController;
use Cake\ORM\Entity;
use Cms\Model\Entity\User;
use Cake\ORM\TableRegistry;

class UsersController extends AppController
{

    public function index()
    {
        $users = TableRegistry::get('Users');
        $usersEntity = new User();

        $query = $users->find()->all();

        $this->set(compact("query"));
    }
}