<?php

namespace App\Http\Controllers\ganjil\psts;

use App\Http\Controllers\Controller;
use App\Models\ganjil\psts\nilaiMurniModel;
use Illuminate\Http\Request;

class nilaiMurniController extends Controller
{
    public function index()
    {
        $data = nilaiMurniModel::with('siswa')->get();
        return view('ganjil.psts.nilai_murni', compact('data'));
    }

    public function export()
    {
        //
    }
}
