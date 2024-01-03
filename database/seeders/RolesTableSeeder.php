<?php

namespace Database\Seeders;

use App\Models\Admin\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => '2023-08-10 14:00:26',
                'updated_at' => '2023-08-10 14:00:26',
            ],
            [
                'id'         => 2,
                'title'      => 'Customer',
                'created_at' => '2023-08-10 14:00:26',
                'updated_at' => '2023-08-10 14:00:26',
            ],

            [
                'id'         => 3,
                'title'      => 'User',
                'created_at' => '2023-08-10 14:00:26',
                'updated_at' => '2023-08-10 14:00:26',
            ],
            [
                'id'         => 4,
                'title'      => 'Super Admin',
                'created_at' => '2023-08-10 14:00:26',
                'updated_at' => '2023-08-10 14:00:26',
            ],
            [
                'id'         => 5,
                'title'      => 'Super User',
                'created_at' => '2023-08-10 14:00:26',
                'updated_at' => '2023-08-10 14:00:26',
            ],
            
        ];

        Role::insert($roles);
    }
}