<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdutoHasVenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pro_ven' => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
                'null' => false,
            ],
            'produto_idproduto' => [
                'type'       => 'INTEGER',
                'null' => true,
            ],
            'venda_idvenda' => [
                'type'       => 'INTEGER',
                'null' => true,
            ],
    ]);
    $this->forge->addForeignKey('produto_idproduto', 'produto', 'id');
    $this->forge->addForeignKey('venda_idvenda', 'venda', 'id');
    $this->forge->addKey('id_pro_ven', true);
    $this->forge->createTable('produto_has_venda');
    }

    public function down()
    {
        //
    }
}
