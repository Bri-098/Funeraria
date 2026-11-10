<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Mensajes de condolencia. Nacen "pendiente" y el admin los aprueba o rechaza.
class CreateCondolencias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'aviso_id'   => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'autor'      => ['type' => 'VARCHAR', 'constraint' => 100],
            'mensaje'    => ['type' => 'TEXT'],
            'estado'     => ['type' => 'ENUM', 'constraint' => ['pendiente', 'aprobada', 'rechazada'], 'default' => 'pendiente'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        // Llave foránea: si se borra un aviso, se borran sus condolencias.
        $this->forge->addForeignKey('aviso_id', 'avisos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('condolencias');
    }

    public function down()
    {
        $this->forge->dropTable('condolencias');
    }
}
