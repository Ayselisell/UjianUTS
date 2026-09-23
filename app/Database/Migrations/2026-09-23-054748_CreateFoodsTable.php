<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFoodsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'unique'     => true,
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'origin' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Minangkabau, Sumatera Barat',
            ],
            'spice_level' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'Pedas Sedang',
            ],
            'rating' => [
                'type'       => 'DECIMAL',
                'constraint' => '3,1',
                'default'    => 4.8,
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'is_featured' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('foods');
    }

    public function down()
    {
        $this->forge->dropTable('foods');
    }
}
