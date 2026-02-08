<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ganjilNilaiMurniModel extends Model
{
    protected $table        = 'ganjil_nilai_murni';
    protected $primaryKey   = 'id';
    protected $guarded      = ['id', 'created_at', 'updated_at'];

    public function siswa()
    {
        return $this->belongsTo(siswaModel::class, 'siswa_id', 'id');
    }
}
