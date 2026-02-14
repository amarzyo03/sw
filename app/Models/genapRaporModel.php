<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genapRaporModel extends Model
{
    protected $table        = 'genap_rapor';
    protected $primaryKey   = 'id';
    protected $guarded      = ['id', 'created_at', 'updated_at'];

    public function siswa()
    {
        return $this->belongsTo(siswaModel::class, 'siswa_id', 'id');
    }
}
