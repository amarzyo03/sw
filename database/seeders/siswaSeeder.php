<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            'AFRILIANA NURUL KHASANAH',
            'Ajeng Dwi Wulandari',
            'ALIA WIDIASTUTI',
            'Arifin Ilham',
            'AUREL FITRI NURUL AFIFAH',
            'AYU APRILIA RAHMAWATI',
            'BILQIIS TRIO BAIHAQI SAPUTRA',
            'FADILLA ADISTYA',
            'FALIH TIBYAN',
            'FERIKO YUSUF RAHARDI',
            'FERLITA MAYASARI',
            'MAYZENA JULIYANTI',
            'MIFTAH ADI SAPUTRA',
            'MIKA APRILIANI',
            'Muhamad Candra Wijaya',
            'NAJWA DWI ALIKA',
            'NAUFAL HILMI TSAQIB',
            'NINDI NUR ASYIFA',
            'PRADITYA WIBOWO SAPUTRA',
            'PRASA KAFABILLAH',
            'PRISCA REVITA RAMADHANI',
            'Rafi Nur Apriyanto',
            'RAFKA KIRANA',
            'RAHMA GRACEA MUTAKAMILLAH',
            'SHELA AMALIA SAHRA',
            'SYAFIQ DWIKY MAULANA',
            'SYIFA SALSABILA',
            'TALITA AGHNIA ULFIA',
            'TIARA NUR AIDA',
            'TIFANI LETISIA PUTRI',
            'UNZILA HASRI ALFAJRI',
            'VEREN RIZA ANIANSYAH',
            'VIKA AULLIA SAFITRI',
            'WULIDA ANINDITA',
            'ZAKI KADAVI',
            'ZHAKIRA INDAH SEPTIANA',
        ];

        foreach ($siswa as $nama) {
            DB::table('siswa')->insert([
                'nama'     => strtolower($nama),
                'username' => strtolower(str_replace(' ', '-', $nama)),
                'password' => bcrypt('xtkj2'),
            ]);
        }
    }
}
