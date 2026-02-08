<?php

namespace App\Http\Controllers;

use App\Models\ganjilRaporModel;
use Illuminate\Http\Request;

class ganjilRaporController extends Controller
{
    public function index()
    {
        $data = ganjilRaporModel::with('siswa')->get();
        return view('ganjil.psas.rapor', compact('data'));
    }
}
