<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            [
                'status_nikah' => 'Belum Kawin',
                'status_keluarga' => 'Kepala Keluarga',
                'status_warga' => 'Tinggal',
                'id_penduduk' => '1',
            ],
            [
                'status_nikah' => 'Kawin',
                'status_keluarga' => 'Anggota Keluarga',
                'status_warga' => 'Tinggal',
                'id_penduduk' => '2',
            ],
            [
                'status_nikah' => 'Cerai Hidup',
                'status_keluarga' => 'Anggota Keluarga',
                'status_warga' => 'Tinggal',
                'id_penduduk' => '3',
            ],
            [
                'status_nikah' => 'Cerai Mati',
                'status_keluarga' => 'Kepala Keluarga',
                'status_warga' => 'Meninggal',
                'id_penduduk' => '4',
            ],
        ]);
    }
}
