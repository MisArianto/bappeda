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
        // $this->call(StrukturOrganisasiTableSeeder::class);
        // $this->call(TugasPokokTableSeeder::class);
        // $this->call(VisiMisiTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(PengaturanTableSeeder::class);
    }
}
