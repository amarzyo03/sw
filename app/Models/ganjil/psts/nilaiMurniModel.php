<?php

namespace App\Models\ganjil\psts;

use App\Models\siswaModel;
use Illuminate\Database\Eloquent\Model;

class nilaiMurniModel extends Model
{
    protected $table        = 'ganjil_psts_nilai_murni';
    protected $primaryKey   = 'id';
    protected $guarded      = ['id', 'created_at', 'updated_at'];

    public function siswa()
    {
        return $this->belongsTo(siswaModel::class, 'siswa_id', 'id');
    }
}
