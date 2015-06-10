<?php
namespace Cms\Controller;

use Cms\Controller\AppController;
use Cake\ORM\TableRegistry;

class StatisticsController extends AppController
{

    public function index()
    {
        $participants = TableRegistry::get('Participants');

        $query = $participants->find()->all();

        $total_de_curtidas = 0;
        $total_de_imagens_pelo_site = 0;
        $total_de_imagens_pelo_instagram = 0;
        $total_geral = 0;

        foreach($query as $p) {
            $total_de_curtidas = $total_de_curtidas + $p->likes;

            if(empty($p->slug)) {
                $total_de_imagens_pelo_site++;
            } else {
                $total_de_imagens_pelo_instagram++;
            }

            $total_geral++;
        }

        $this->set(compact("total_de_curtidas", "total_de_imagens_pelo_site", "total_de_imagens_pelo_instagram", "total_geral"));
    }
}