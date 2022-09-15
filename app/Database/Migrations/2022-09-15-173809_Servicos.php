<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Servicos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
            ],
            'descricao' => [
                'type'           => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('servicos');
    }

    public function down()
    {
        //
    }
}
