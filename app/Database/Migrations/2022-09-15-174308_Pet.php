<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pet extends Migration
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
                'constraint' => '20',
                'null' => true,
            ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('pet');
    }

    public function down()
    {
        //
    }
}
