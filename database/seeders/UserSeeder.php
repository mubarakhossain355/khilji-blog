<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'     => 'Admin',
                'email'    => 'admin@example.com',
                'password' => bcrypt('secret'),
                
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => bcrypt('secret'),
               
            ],
        ]);
    }
}
