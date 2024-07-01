<?php

namespace Database\Seeders;

use App\Models\Profile;
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
        $user = [
            'name' => 'user',
            'email' => 'user@mail.ru',
            'password' => Hash::make(123123123),
        ];

        $user = User::firstOrCreate([
            'email' => $user['email']
        ], [
            'name' => 'user',
            'password' => Hash::make(123123123),
        ]);

        Profile::firstOrCreate([
            'user_id' => $user->id
        ]);

        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
            PostSeeder::class,
        ]);
    }
}
