<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Solicitudes de información que llegan del formulario de contacto.
class CreateSolicitudes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'telefono'   => ['type' => 'VARCHAR', 'constraint' => 20],
            'correo'     => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'mensaje'    => ['type' => 'TEXT'],
            'estado'     => ['type' => 'ENUM', 'constraint' => ['pendiente', 'atendida'], 'default' => 'pendiente'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('solicitudes');
    }

    public function down()
    {
        $this->forge->dropTable('solicitudes');
    }
}
