<?php

use Illuminate\Database\Seeder;

class TugasPokokTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tugas_pokok_fungsis')->insert([
            'content' => 'Masukkan Content di sini'
        ]);
    }
}
