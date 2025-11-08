<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class mapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mapel')->insert([
            [
                'nama' => 'Pendidiakn Agama dan Budi Pekerti',
                'singkatan' => 'agm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pendidikan Pancasila',
                'singkatan' => 'panc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bahasa Indonesia',
                'singkatan' => 'indo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'singkatan' => 'pjok',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sejarah',
                'singkatan' => 'sej',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Seni Budaya',
                'singkatan' => 'sbd',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bahasa Jawa',
                'singkatan' => 'jwa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Matematika',
                'singkatan' => 'mtk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bahasa Inggris',
                'singkatan' => 'ingg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Informatika',
                'singkatan' => 'inf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Projek Ilmu Pengetahuan Alam dan Sosial',
                'singkatan' => 'pipas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Profesi dan Kewirausahaan di Bidang TJKT',
                'singkatan' => 'pdk1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dasar-dasar TJKT',
                'singkatan' => 'pdk2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Media dan Jaringan Telekomunikasi',
                'singkatan' => 'pdk3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Proses Bisnis di Bidang TJKT',
                'singkatan' => 'pdk4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Koding dan Kecerdasan Artifisial',
                'singkatan' => 'kka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dasar-dasar Keahlian',
                'singkatan' => 'ddk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
