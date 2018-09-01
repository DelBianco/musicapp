<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RedeyeVentures\GeoPattern\GeoPattern;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new GeoPattern();

        $artists = \App\Artist::all();
        // Adiciona um grupo para cada pessoa
        foreach ($artists as $artist) {
            $ano = rand(1920,2018);
            $image->setString($ano);

            DB::table('albums')->insert([
                'artist_id'	=> $artist->id,
                'cover_foto' => $image->toDataURI(),
                'year' => $ano
            ]);
        }

        // Adiciona um grupo para cada pessoa
        foreach ($artists as $artist) {
            $ano = rand(1920,2018);
            $image->setString($ano);

            DB::table('albums')->insert([
                'artist_id'	=> rand(1,$artists->count()),
                'cover_foto' => $image->toDataURI(),
                'year' => $ano
            ]);
        }
    }
}
