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
        $this->call([
            ArtistTableSeeder::class,
            MusicTableSeeder::class,
            AlbumTableSeeder::class,
            AlbumMusicaSeeder::class,
        ]);
    }
}
