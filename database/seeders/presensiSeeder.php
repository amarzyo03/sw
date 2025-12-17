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
        $siswa_id = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36];
        foreach ($siswa_id as $id) {
            DB::table('presensi')->insert([
                'siswa_id'      => $id,
                'sakit'         => 1,
                'izin'          => 2,
                'alpa'          => 3,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }
    }
}
