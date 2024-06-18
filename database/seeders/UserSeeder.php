<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        User::create([
            'name' => 'Mohamed Omar',
            'email' => 'mofayeq10@gmail.com',
            'password' => \Hash::make('123456789'),
        ]);


        User::create([
            'name' => 'Ahmed Omar',
            'email' => 'Ahmed10@gmail.com',
            'password' => \Hash::make('987654321'),
        ]);
    }
}
