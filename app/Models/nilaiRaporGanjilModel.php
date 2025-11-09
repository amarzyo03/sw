<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilaiRaporGanjilModel extends Model
{
    protected $table = 'nilai_rapor_ganjil';
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function siswa()
    {
        return $this->belongsTo(siswaModel::class, 'siswa_id', 'id');
    }

    public function mapel()
    {
        return $this->belongsTo(mapelModel::class, 'mapel_id', 'id');
    }
}
