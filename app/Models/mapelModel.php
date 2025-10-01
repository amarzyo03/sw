<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mapelModel extends Model
{
    protected $table = 'mapel';
    protected $primaryKey = 'id';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
