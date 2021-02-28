<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PengaturanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$json = [
    		'header' => [
    			'email' => 'info@example.com',
    			'hp' => '+1 5589 55488 55',
    			'logo' => 'logo.png'
    		],
    		'contact' => [
    			'alamat' => 'Jl. Johari Dagang'
    		],
            'content' => [
                'video' => 'https://www.youtube.com/watch?v=U3D_1uzJJoo',
                'img_video' => 'video.jpg',
                'judul' => 'Kabupaten Kepulauan Meranti',
                'keterangan' => 'Selatpanjang adalah ibu kota Kabupaten Kepulauan Meranti, provinsi Riau, Indonesia. Kota Selatpanjang juga merupakan Ibu kota kecamatan Tebing Tinggi, kota ini terletak di bagian pesisir utara Pulau Tebingtinggi dan memiliki wilayah seluas 12,50 km dan jumlah penduduk berdasarkan Badan Pusat Statistik 2020 sebanyak 39.855 jiwa dengan kepadatan 3.188,4 jiwa/km². Kota Selatpanjang juga berjulukan sebagai Kota Sagu karena daerah ini termasuk salah satu Kawasan Pengembangan Ketahanan Pangan Nasional karena penghasil sagu terbesar di Indonesia'
            ],
    		'footer' => [
    			'keterangan' => 'keterangan apa itu bappeda',
    			'footer_name' => 'bappeda.merantikab.go.id'
    		]
    	];

        \DB::table('pengaturans')->insert([
            'uuid' => (string) Str::uuid(),
            'name' => json_encode($json)
        ]);
    }
}
