<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'id' => 1,
            'name' => 'ADRIAN',
            'email' => 'adrianmakamine@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $user = User::create([
            'id' => 2,
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
