<?php

namespace App\Http\Controllers;

use App\Models\genapRaporModel;
use Illuminate\Http\Request;

class genaRaporController extends Controller
{
    public function index()
    {
        $data = genapRaporModel::with('siswa')->get();
        return view('genap.rapor', compact('data'));
    }
}
