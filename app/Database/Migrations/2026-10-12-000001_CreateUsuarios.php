<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Tabla de usuarios: solo existe el administrador (sin registro público).
class CreateUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nombre'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'email'      => ['type' => 'VARCHAR', 'constraint' => 150],
            'password'   => ['type' => 'VARCHAR', 'constraint' => 255], // hash de password_hash()
            'rol'        => ['type' => 'VARCHAR', 'constraint' => 20, 'default' => 'admin'],
            'status'     => ['type' => 'TINYINT', 'constraint' => 1, 'default' => 1], // 1 = activo
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('email'); // no se repiten correos
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
