<?php

use Illuminate\Database\Seeder;

class StrukturOrganisasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('struktur_organisasis')->insert([
            'content' => 'Masukkan Content di sini'
        ]);
    }
}
