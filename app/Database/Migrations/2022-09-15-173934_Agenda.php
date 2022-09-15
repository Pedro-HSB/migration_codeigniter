<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'data_2' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'horario' => [
                'type'           => 'TIME',
                'null' => true,
            ],
            'servicos_idservicos' => [
                'type'           => 'INTEGER',
                'constraint' => '30',
                'null' => true,
            ],
        ]);
        $this->forge->addForeignKey('servicos_idservicos', 'servicos', 'id');
        $this->forge->addKey('id', true);
        $this->forge->createTable('agenda');
    }

    public function down()
    {
        //
    }
}
