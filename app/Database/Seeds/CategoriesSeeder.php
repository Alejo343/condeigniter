<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $currentTime = date('Y-m-d H:i:s');

        $data = [
            ['id' => 1, 'name' => 'Electrodomesticos', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['id' => 2, 'name' => 'Ropa', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['id' => 3, 'name' => 'Libros', 'created_at' => $currentTime, 'updated_at' => $currentTime],
            ['id' => 4, 'name' => 'Bebidas', 'created_at' => $currentTime, 'updated_at' => $currentTime],
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}
