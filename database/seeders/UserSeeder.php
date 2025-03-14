<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Admin',
            'email' => 'admin@mailinator.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => '1',
            'remember_token' => Str::random(10),
        ]);
    }
}
