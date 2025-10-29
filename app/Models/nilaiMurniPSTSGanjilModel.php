<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilaiMurniPSTSGanjilModel extends Model
{
    protected $table = 'nilai_murni_psts_ganjil';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function siswa()
    {
        return $this->belongsTo(siswaModel::class, 'siswa_id', 'id');
    }
}
