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
            UserTableSeeder::class,
            /*
             * Para alimentar a base de dados com os dados do Spotify faça o login e utilize o fetch do spotify
             * Caso nao queira descomente as chamadas abaixo e crie com dados do Faker
             *
             * MusicTableSeeder::class,
             * AlbumTableSeeder::class,
             * AlbumMusicaSeeder::class,
             * */
        ]);
    }
}
