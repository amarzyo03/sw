<?php

namespace App\Http\Controllers;

use App\Models\ganjilNilaiMurniModel;
use Illuminate\Http\Request;

class ganjilNilaiMurniController extends Controller
{
    public function index()
    {
        $data = ganjilNilaiMurniModel::with('siswa')->get();
        return view('ganjil.nilai_murni', compact('data'));
    }
}
