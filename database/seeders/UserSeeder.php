<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'test_admin@gmail.com',
            'password' => bcrypt('p@ssword'),
        ])->assignRole('admin');
        

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'test_vendor@gmail.com',
            'password' => bcrypt('p@ssword'),
        ])->assignRole('vendor');
    }
}
