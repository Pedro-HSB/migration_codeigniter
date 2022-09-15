<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produto extends Migration
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
                'constraint' => '60',
                'null' => false,
            ],
            'peso' => [
                'type' => 'DOUBLE',
                'null' => false,
            ],
            'sabor' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null' => false,
            ],
            'idade' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'porte_raca' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null' => false,
            ],
            'validade' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'cod_barras' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null' => false,
            ],
            'preco_ven' => [
                'type' => 'INTEGER ',
                'null' => false,
            ],
            'estoque_idestoque' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
            'raca_idraca' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
            'pet_idpet' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
        ]);
        $this->forge->addForeignKey('estoque_idestoque', 'estoque', 'id');
        $this->forge->addForeignKey('raca_idraca', 'raca', 'id');
        $this->forge->addForeignKey('pet_idpet', 'pet', 'id');
        $this->forge->addKey('id', true);
        $this->forge->createTable('produto');
    }

    public function down()
    {
        //
    }
}
