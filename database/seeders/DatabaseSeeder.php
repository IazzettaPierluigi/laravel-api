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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ProjectSeeder::class,
            //faccio seed dedicata altrimenti rilancia 'projectseeder' creando altri 10 dati
            TypeSeeder::class,

            //altra seed dedicata
            TechnologySeeder::class
        ]);
    }
}
