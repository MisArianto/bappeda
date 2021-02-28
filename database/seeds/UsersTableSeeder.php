<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Mis Arianto',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => \Hash::make('12345678'),
            'status' => '1',
            'level' => 'admin',
            'fb' => 'Mis Arianto',
            'ig' => 'rian_haqqa',
            'bio' => 'cinta pemograman',
            'image' => 'foto.jpg'
        ]);
    }
}
