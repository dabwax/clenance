<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ParticipantsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}