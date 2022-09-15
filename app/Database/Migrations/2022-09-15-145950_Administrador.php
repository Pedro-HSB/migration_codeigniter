<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Administrador extends Migration
{
    public function up($if_not_exists = true)
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
                'unique'     => true,
                'null' => false,
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'sobrenome' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'numero' => [
                'type' => 'INTEGER',
                'null' => false,
            ],
            'complemento' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'telefone' => [
                'type' => 'CHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'celular' => [
                'type'       => 'CHAR',
                'constraint' => '11',
                'null' => false,
            ],
            'cpf' => [
                'type'       => 'CHAR',
                'constraint' => '11',
                'unique'     => true,
                'null' => false,
            ],
            'endereco_idendereco' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
        ]);
        $this->forge->addForeignKey('endereco_idendereco', 'endereco', 'id');
        $this->forge->addKey('id', true);
        $this->forge->createTable('administrador');
    }

    public function down()
    {
        $this->forge->dropTable('administrador');
    }
}
