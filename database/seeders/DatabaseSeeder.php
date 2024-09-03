<?php

namespace Database\Seeders;

use App\Models\kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin@gmail.com',
            'name' => 'habib',
            'password' => Hash::make('admin123')
        ]);
        kategori::create([
            'Name' => 'series 15',
        ]);
    }
}
