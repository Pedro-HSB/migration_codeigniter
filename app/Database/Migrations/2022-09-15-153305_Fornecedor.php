<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fornecedor extends Migration
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
                'constraint' => '45',
                'null' => false,
            ],
            'cnpj' => [
                'type' => 'VARCHAR',
                'constraint' => '14',
                'null' => false,
            ],
            'numero' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'telcontato1' => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
                'null' => false,
            ],
            'telcontato2' => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
                'null' => false,
            ],
            'endereco_idendereco' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
        ]);
        $this->forge->addForeignKey('endereco_idendereco', 'endereco', 'id');
        $this->forge->addKey('id', true);
        $this->forge->createTable('fornecedor');
    }

    public function down()
    {
        //
    }
}
