<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function nilai()
    {
        return $this->hasMany(nilaiModel::class);
    }
}
