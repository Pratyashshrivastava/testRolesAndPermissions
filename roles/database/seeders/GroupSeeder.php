<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            ['name' => 'Admin'],
            ['name' => 'User'],
            ['name' => 'Counselor'],
            // Add more groups as needed
        ];

        // Insert data into the groups table
        DB::table('groups')->insert($groups);
    }
}