<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Textos editables del sitio (trámites, nosotros, privacidad).
class CreatePaginas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'clave'      => ['type' => 'VARCHAR', 'constraint' => 30], // tramites | nosotros | privacidad
            'titulo'     => ['type' => 'VARCHAR', 'constraint' => 150],
            'contenido'  => ['type' => 'TEXT', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('clave');
        $this->forge->createTable('paginas');
    }

    public function down()
    {
        $this->forge->dropTable('paginas');
    }
}
