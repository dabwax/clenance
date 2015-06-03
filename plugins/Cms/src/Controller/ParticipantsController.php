<?php
namespace Cms\Controller;

use Cms\Controller\AppController;
use Cake\ORM\Entity;
use Cms\Model\Entity\User;
use Cms\Model\Entity\Participant;
use Cake\ORM\TableRegistry;
use MetzWeb\Instagram\Instagram;

class ParticipantsController extends AppController
{

    public function instagram()
    {
        $instagram = new Instagram('25b61709b0464997bde34d1757901d56');
        $tag = "avene";
        $media = $instagram->getTagMedia($tag);
        $limit = 5;
        $size = 128;

        $this->set("images", $media->data);

        $participants = $this->Participants->find('list', ['keyField' => 'slug', 'valueField' => 'id'])->all();
        $participants = $participants->toArray();

        $this->set(compact("participants"));

        if($this->request->is("post")) {
            $url = $this->request->data['attachment_cropped'];

            $imagename= basename($url);

            file_put_contents(WWW_ROOT . "uploads" . DS . "participants" . DS . $imagename, file_get_contents($url));

            $table = TableRegistry::get("Participants");
            $p = $this->Participants->newEntity();

            $p->name = $this->request->data['name'];
            $p->slug = $this->request->data['slug'];
            $p->approved = $this->request->data['approved'];
            $p->likes = $this->request->data['likes'];
            $p->attachment_cropped = $imagename;
            $p->tos = 1;

            $table->save($p);

            $this->Flash->success("O participante foi adicionado e aprovado.");

            return $this->redirect(['action' => 'instagram']);
        }
    }

    public function approve($status, $id)
    {
        $table = TableRegistry::get("Participants");
        $p = $this->Participants->get($id);

        $p->approved = $status;

        $table->save($p);

        if($status == 0) {
            $label = "reprovado";
        } else if($status == 1) {
            $label = "aprovado";
        }

        $this->Flash->success("O participante foi $label.");

        return $this->redirect(['action' => 'index']);
    }

    public function index()
    {
        $participants = TableRegistry::get('Participants');

        $query = $participants->find()->all();

        $this->set(compact("query"));
    }

    public function edit($id)
    {
        $query = $this->Participants->get($id);

        if($this->request->is(['put', 'post'])) {

            $this->Participants->patchEntity($query, $this->request->data);

            if($this->Participants->save($query)) {
                $this->Flash->success("O participante foi editado.");

                return $this->redirect(['action' => 'index']);
            }


            $this->Flash->error("Não foi possível editar o participante.");
        }

        $this->set(compact("query"));
    }

    public function delete($id)
    {
        $participant = $this->Participants->get($id);
        if ($this->Participants->delete($participant)) {
            $this->Flash->success('O participante foi removido.');

            return $this->redirect(['action' => 'index']);
        }
    }
}