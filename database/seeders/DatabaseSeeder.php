<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'GMAIL',
            'email' => 'giga.giorgadze.11@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::factory()->create([
            'name' => 'REDBERRY',
            'email' => 'gigagiorgadze@redberry.ge',
            'password' => bcrypt('123456'),
        ]);
    }
}
