<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Estoque extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'quant' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
            'posicao' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('estoque');
    }

    public function down()
    {
        //
    }
}
