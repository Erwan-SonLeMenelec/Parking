<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 10 utilisateurs vont être crées
         \App\Models\User::factory(10)->create();

//         // 1 utilisateur va être créer avec
//         \App\Model\User::factory()->create([
//             'prenom' => 'Test',
//             'email' => 'test@example.com',
//         ]);
    }
}
