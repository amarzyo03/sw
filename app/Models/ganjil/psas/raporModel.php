<?php

namespace App\Models\ganjil\psas;

use App\Models\siswaModel;
use Illuminate\Database\Eloquent\Model;

class raporModel extends Model
{
    protected $table        = 'ganjil_psas_rapor';
    protected $primaryKey   = 'id';
    protected $guarded      = ['id', 'created_at', 'updated_at'];

    public function siswa()
    {
        return $this->belongsTo(siswaModel::class, 'siswa_id', 'id');
    }
}
