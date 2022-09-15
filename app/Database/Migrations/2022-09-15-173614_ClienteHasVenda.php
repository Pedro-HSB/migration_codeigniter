<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ClienteHasVenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cli_ven' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'venda_idvenda' => [
                'type'       => 'INTEGER',
                'null' => false,
            ],
            'cliente_idcliente' => [
                'type'           => 'INTEGER',
                'null' => false,
            ],
        ]);
        $this->forge->addForeignKey('venda_idvenda', 'venda', 'id');
        $this->forge->addForeignKey('cliente_idcliente', 'cliente', 'id');
        $this->forge->addKey('id_cli_ven', true);
        $this->forge->createTable('cliente_has_venda');   
    }

    public function down()
    {
        //
    }
}
