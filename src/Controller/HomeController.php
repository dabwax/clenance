<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\View\UrlHelper\UrlHelper;
use Cake\Routing\Router;

/**
 *  Controller referente a página inicial.
 *
 * @author lhas <henrique@bblender.com.br>
 */
class HomeController extends AppController
{

    public function index($participant_id = null)
    {

        if(!empty($participant_id)) {
            $participantsTable = TableRegistry::get('Participants');
            $participant = $participantsTable->get($participant_id);

            if(!empty($participant)) {
                $this->set("og_locale", "pt_BR");

                $this->set("og_url", Router::url(null, true));
                $this->set("og_title", "Eu já declarei meu amor por Cleanance! E você?");
                $this->set("og_site_name", "Eu já declarei meu amor por Cleanance! E você?");
                $this->set("og_description", "Participe do Desafio de fotos #euamocleanance e concorra a um dos 5 kits de produtos Cleanance!");
                $this->set("og_image", Router::url("/uploads/participants/" . $participant->attachment_cropped, true));
                $this->set("og_image_type", "image/jpeg");
                $this->set("og_image_width", 500);
                $this->set("og_image_height", 500);
            }
        }
    }

}