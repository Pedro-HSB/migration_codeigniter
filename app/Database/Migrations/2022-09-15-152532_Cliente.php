<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cliente extends Migration
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
                'unique'     => true,
                'null' => false,
            ],
            'sobrenome' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => false,
            ],
            'data_nasc' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'senha' => [
                'type'       => 'VARCHAR',
                'constraint' => '8',
                'null' => false,
            ],
            'cpf' => [
                'type' => 'CHAR',
                'constraint' => '11',
                'null' => false,
            ],
            'numero' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
            'complemento' => [
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '45',
                'null' => false,
            ],
            'telefone' => [
                'type'       => 'CHAR',
                'constraint' => '10',
                'unique'     => true,
                'null' => false,
            ],
            'celular' => [
                'type'       => 'CHAR',
                'constraint' => '11',
                'null' => false,
            ],
            'cli_cartao' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
            'endereco_idendereco' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
        ]);
        $this->forge->addForeignKey('cli_cartao', 'cartao', 'id');
        $this->forge->addForeignKey('endereco_idendereco', 'endereco', 'id');
        $this->forge->addKey('id', true);
        $this->forge->createTable('cliente');
    }

    public function down()
    {
        //
    }
}
