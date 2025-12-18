<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class presensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 36; $i++) {
            DB::table('presensi')->insert([
                'siswa_id' => $i,
                'sakit'    => (string) rand(0, 5),
                'izin'     => (string) rand(0, 5),
                'alpa'     => (string) rand(0, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
