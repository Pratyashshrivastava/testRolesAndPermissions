<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            ['group_id' => 1, 'permission_id' => 1, 'name' => 'Admin Permission 1', 'slug' => 'admin.permission1'],
            ['group_id' => 1, 'permission_id' => 2, 'name' => 'Admin Permission 2', 'slug' => 'admin.permission2'],
            ['group_id' => 2, 'permission_id' => 3, 'name' => 'User Permission 1', 'slug' => 'user.permission1'],
            // Add more permissions as needed
        ];

        // Insert data into the group_permissions table
        DB::table('group_permissions')->insert($permissions);
    }
}