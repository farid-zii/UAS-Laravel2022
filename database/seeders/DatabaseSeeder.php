<?php

namespace Database\Seeders;

use App\Models\Spesialis;
use App\Models\Ruangan;
use App\Models\Dokter;
use App\Models\Penyakit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        Spesialis::create([
    		'kode' => 'SPBDH',
            'nama' => 'Bedah'
    	]);

        Spesialis::create([
    		'kode' => 'SPTHT',
            'nama' => 'Telinga Hidung Tenggorokan'
    	]);

        Ruangan::create([
    		'nama' => 'Sakura',
            'kelas' => 'VIP'
    	]);

        Ruangan::create([
    		'nama' => 'Mawar',
            'kelas' => 'Ekonomi'
    	]);

        Dokter::create([
            'nip'=>'198809112000012002',
            'nama'=>'Budi',
            'jk'=>'L',
            'spesialis_id'=>'1',
            'alamat'=>'padang'
        ]);

        Penyakit::create([
            'nama'=>'Demam',
            'gejala'=>'Batuk, Badan Hangat',
            'tipe'=>'Tidak Berbahaya',
        ]);

    }
}
