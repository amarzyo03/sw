<?php

namespace Database\Seeders;

use App\Models\presensiModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class presensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 36; $i++) {
            presensiModel::insert([
                'siswa_id'  => $i,
                'sakit'     => 0,
                'izin'      => 0,
                'alpa'      => 0
            ]);
        }
    }
}
