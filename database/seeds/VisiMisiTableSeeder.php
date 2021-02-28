<?php

use Illuminate\Database\Seeder;

class VisiMisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('visi_misis')->insert([
            'content' => 'Masukkan Content di sini'
        ]);
    }
}
