<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Desk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Desk::factory(33)->create();
        User::factory()->create([
            'username' => 'admin',
            'first_name' => 'Add',
            'last_name' => 'Mint',
            'email' => 'admin@example.org',
            'password' => bcrypt('Ro0t_adm1n'),
            'is_approved' => 1,
            'role' => 'admin',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
