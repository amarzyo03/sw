<?php

namespace App\Models;

use App\Models\ganjil\psts\nilaiMurniModel;
use Illuminate\Database\Eloquent\Model;

class siswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function nilaiRaporGanjil()
    {
        return $this->hasMany(nilaiRaporGanjilModel::class, 'siswa_id', 'id');
    }

    public function ganjil_psts_nilai_murni()
    {
        return $this->hasMany(nilaiMurniModel::class, 'siswa_id', 'id');
    }
}
