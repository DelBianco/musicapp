<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Artist::class, 3)->create();

        $albums = \App\Album::all();

        // Adiciona um grupo para cada pessoa
        foreach ($albums as $album) {
            DB::table('albums')->insert([
                'album_id'	=> rand(1,5),
                'musica_id'	=> $musica->id,
            ]);
        }
    }
}
