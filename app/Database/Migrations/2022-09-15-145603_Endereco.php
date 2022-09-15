<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Endereco extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'cep' => [
                'type'       => 'VARCHAR',
                'constraint' => '8',
                'null' => false,
            ],
            'logradouro' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'bairro' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' => false,
            ],
            'cidade' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
            ],
            'estado' => [
                'type'       => 'VARCHAR',
                'constraint' => '2',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('endereco');
    }

    public function down()
    {
        $this->forge->dropTable('endereco');
    }
}
