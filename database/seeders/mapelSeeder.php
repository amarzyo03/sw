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
                'singkatan' => 'PAI',
                'guru' => 'guru1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pendidikan Pancasila',
                'singkatan' => 'PANC',
                'guru' => 'guru2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bahasa Indonesia',
                'singkatan' => 'INDO',
                'guru' => 'guru3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'singkatan' => 'PJOK',
                'guru' => 'guru4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sejarah',
                'singkatan' => 'SEJ',
                'guru' => 'guru5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Seni Budaya',
                'singkatan' => 'SBD',
                'guru' => 'guru6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bahasa Jawa',
                'singkatan' => 'JWA',
                'guru' => 'guru7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
