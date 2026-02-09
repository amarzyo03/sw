<?php

namespace App\Http\Controllers;

use App\Models\genapNilaiMurniModel;
use Illuminate\Http\Request;

class genapNilaiMurniController extends Controller
{
    public function index()
    {
        $data = genapNilaiMurniModel::with('siswa')->get();
        return view('genap.nilai_murni', compact('data'));
    }
}
