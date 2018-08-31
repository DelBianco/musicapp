<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = \App\Artist::all();
        // Adiciona um grupo para cada pessoa
        foreach ($artists as $artist) {
            DB::table('albums')->insert([
                'artist_id'	=> $artist->id,
                'cover_foto' => 'https://loremflickr.com/g/320/240/abstract',
                'year' => rand(1920,2018)
            ]);
        }
    }
}
