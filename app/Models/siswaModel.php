<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function ganjil_nilai_murni()
    {
        return $this->hasMany(ganjilNilaiMurniModel::class, 'siswa_id', 'id');
    }

    public function ganjil_rapor()
    {
        return $this->hasMany(ganjilRaporModel::class, 'siswa_id', 'id');
    }

    public function genap_nilai_murni()
    {
        return $this->hasMany(genapNilaiMurniModel::class, 'siswa_id', 'id');
    }

    public function genap_rapor()
    {
        return $this->hasMany(genapRaporModel::class, 'siswa_id', 'id');
    }

    public function presensi()
    {
        return $this->hasMany(presensiModel::class, 'siswa_id', 'id');
    }
}
