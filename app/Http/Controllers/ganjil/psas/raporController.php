<?php

namespace App\Http\Controllers\ganjil\psas;

use App\Http\Controllers\Controller;
use App\Models\ganjil\psas\raporModel;
use Illuminate\Http\Request;

class raporController extends Controller
{
    public function index()
    {
        $data = raporModel::with('siswa')->get();
        return view('ganjil.psas.rapor', compact('data'));
    }
}
