<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Raca extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'raca' => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
                'null' => true,
            ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('raca');
    }

    public function down()
    {
        //
    }
}
