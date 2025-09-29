<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penilaianGanjilController extends Controller
{
    public function index()
    {
        return view('penilaian-ganjil.index');
    }
}
