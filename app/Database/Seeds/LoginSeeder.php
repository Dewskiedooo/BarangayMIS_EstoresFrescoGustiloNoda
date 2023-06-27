<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LoginSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => 1,
            'username' => 'admin',
            'password' => 'admin',
        ];

        $this->db->table('login')->insert($data);
    }
}