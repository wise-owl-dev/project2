<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin User',
            'email'=>'15161394@itoaxaca.edu.mx',
            'password'=>bcrypt('adminpassword'),
            'is_admin'=>1,
        ]);
    }
}
