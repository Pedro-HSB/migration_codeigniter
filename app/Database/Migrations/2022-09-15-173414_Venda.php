<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Venda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'forma' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'quan' => [
                'type'           => 'INTEGER',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('venda');
    }

    public function down()
    {
        //
    }
}
