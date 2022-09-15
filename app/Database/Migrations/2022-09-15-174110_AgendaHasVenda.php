<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgendaHasVenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_agen_ven' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'agenda_idage' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
            'venda_idven' => [
                'type'           => 'INTEGER',
                'null' => true,
            ],
        ]);
        $this->forge->addForeignKey('venda_idven', 'venda', 'id');
        $this->forge->addForeignKey('agenda_idage', 'agenda', 'id');
        $this->forge->addKey('id_agen_ven', true);
        $this->forge->createTable('agenda_has_venda');
    }

    public function down()
    {
        //
    }
}
