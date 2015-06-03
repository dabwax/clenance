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

        $query = $users->find()->all();

        $this->set(compact("query"));
    }

    public function edit($id = null)
    {
        $query = $this->Users->get($id);

        if($this->request->is(['put', 'post'])) {


            if(!empty($this->request->data['password'])) {
                $this->request->data['password'] = md5($this->request->data['password']);
            } else {
                unset($this->request->data['password']);
            }

            $this->Users->patchEntity($query, $this->request->data);

            if($this->Users->save($query)) {
                $this->Flash->success("O usuário foi editado.");

                return $this->redirect(['action' => 'index']);
            }


            $this->Flash->error("Não foi possível editar o usuário.");
        }

        $this->set(compact("query"));
    }
}