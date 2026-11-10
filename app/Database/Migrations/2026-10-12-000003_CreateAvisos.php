<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Avisos de velación. Solo los "publicado" se ven en el sitio público.
class CreateAvisos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre_difunto' => ['type' => 'VARCHAR', 'constraint' => 150],
            'fecha_velacion' => ['type' => 'DATE'],
            'hora_velacion'  => ['type' => 'TIME'],
            'lugar'          => ['type' => 'VARCHAR', 'constraint' => 150],
            'direccion'      => ['type' => 'VARCHAR', 'constraint' => 255],
            'estado'         => ['type' => 'ENUM', 'constraint' => ['publicado', 'retirado'], 'default' => 'publicado'],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('avisos');
    }

    public function down()
    {
        $this->forge->dropTable('avisos');
    }
}
