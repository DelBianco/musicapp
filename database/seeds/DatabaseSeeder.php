<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Cria 5 Artistas
        factory(\App\Artist::class, 5)->create()->each(function ($artist) {
            // Para cada artista cria 10 Musicas
            factory(\App\Music::class, 10)->create(['artist_id'=>$artist->id]);
        });
    }
}
