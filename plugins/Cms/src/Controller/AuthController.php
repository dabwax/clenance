<?php
namespace Cms\Controller;

use Cms\Controller\AppController;
use Cake\ORM\Entity;
use Cms\Model\Entity\User;
use Cake\ORM\TableRegistry;

class AuthController extends AppController
{

    public function logout()
    {
        $user = $this->session->read("user");

        // Se o usuário já estiver logado
        if(!empty($user)) {
            $this->Flash->success("Você foi deslogado(a) com sucesso!");

            $this->session->delete("user");
        } else {
            $this->Flash->error("Você não encontra-se logado no momento.");
        }

        return $this->redirect(['action' => 'login']);
    }

    public function login()
    {
        $this->layout = "login";

        $user = $this->session->read("user");

        // Se o usuário já estiver logado, envia para a dashboard
        if(!empty($user)) {

            $this->Flash->success("Olá, " . $user->email . "!  Você já se encontra logado no nosso sistema.");

            return $this->redirect(['controller' => 'dashboard', 'action' => 'index']);
        }

        if($this->request->is("post")) {
            $email = $this->request->data['email'];
            $password = $this->request->data['password'];

            // Gera objetos Table e Entity
            $users = TableRegistry::get('Users');
            $usersEntity = new User();

            // Verifica se o usuário existe
            $query = $users->find()->where(['email' => $email])->first();

            // Se o usuário existir
            if($query) {

                // Se a senha bater
                if(md5($password) == $query->password) {
                     // Armazena a sessão
                     $this->session->write("user", $query);

                    $this->Flash->success("Olá, " . $query->email . "! Seja bem-vindo ao gerenciador de conteúdo do seu site.");

                    return $this->redirect(['controller' => 'dashboard', 'action' => 'index']);
                // Se a senha NÃO bater
                } else {

                    $this->Flash->error("A senha não confere para o usuário digitado. Por favor, tente novamente.");

                    return $this->redirect(['action' => 'login']);
                }

            // Se o usuário não existir
            } else {
                $this->Flash->error("Este usuário não existe.");

                return $this->redirect(['action' => 'login']);
            }

        } // fim requisição POST
    } // fim action login
}