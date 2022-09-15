<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cartao extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'cliente' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'numero' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cartao');
    }

    public function down()
    {
        //
    }
}
