<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumMusicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $musicas = \App\Music::all();
        $albums = \App\Album::all();


        // Adiciona um grupo para cada pessoa
        foreach ($musicas as $musica) {
            DB::table('album_musica')->insert([
                'album_id'	=> rand(1,count($albums)),
                'musica_id'	=> $musica->id
            ]);
        }
    }
}
