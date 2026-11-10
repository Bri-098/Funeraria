<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

// Crea el administrador inicial. Los datos salen del .env (no van en el código).
// Se ejecuta con: php spark db:seed AdminSeeder
class AdminSeeder extends Seeder
{
    public function run()
    {
        $email    = env('admin.email');
        $password = env('admin.password');

        if (! $email || ! $password) {
            echo "Faltan admin.email o admin.password en el .env\n";
            return;
        }

        // Si ya existe ese correo no lo duplicamos (así el seed se puede repetir).
        $existe = $this->db->table('usuarios')->where('email', $email)->countAllResults();
        if ($existe > 0) {
            echo "El administrador {$email} ya existe, no se hizo nada.\n";
            return;
        }

        $ahora = date('Y-m-d H:i:s');

        $this->db->table('usuarios')->insert([
            'nombre'     => env('admin.nombre', 'Administrador'),
            'email'      => $email,
            'password'   => password_hash($password, PASSWORD_DEFAULT), // nunca se guarda en texto plano
            'rol'        => 'admin',
            'status'     => 1,
            'created_at' => $ahora,
            'updated_at' => $ahora,
        ]);

        echo "Administrador {$email} creado.\n";
    }
}
