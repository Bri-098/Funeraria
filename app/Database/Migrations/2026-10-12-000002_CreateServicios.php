<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Catálogo de servicios (velación, cremación, inhumación, previsión).
class CreateServicios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre'      => ['type' => 'VARCHAR', 'constraint' => 150],
            'slug'        => ['type' => 'VARCHAR', 'constraint' => 160], // para la URL /servicios/{slug}
            'tipo'        => ['type' => 'VARCHAR', 'constraint' => 30],
            'descripcion' => ['type' => 'TEXT', 'null' => true],
            'incluye'     => ['type' => 'TEXT', 'null' => true],
            'orden'       => ['type' => 'INT', 'constraint' => 11, 'default' => 0],
            'activo'      => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 1],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('slug');
        $this->forge->createTable('servicios');
    }

    public function down()
    {
        $this->forge->dropTable('servicios');
    }
}
