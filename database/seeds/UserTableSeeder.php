<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RedeyeVentures\GeoPattern\GeoPattern;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new GeoPattern();
        $image->setString('André Giuffrida');
        DB::table('users')->insert([
            'name' => 'André Giuffrida',
            'email' => 'andredbg@gmail.com',
            'image' => $image->toDataURI(),
            'password' => Hash::make('123mudar'),
            'roles' => json_encode(['admin','user']),
            'remember_token' => str_random(10)
        ]);
    }
}
