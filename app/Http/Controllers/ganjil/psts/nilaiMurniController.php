<?php

namespace App\Http\Controllers\ganjil\psts;

use App\Http\Controllers\Controller;
use App\Models\ganjil\psts\nilaiMurniModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class nilaiMurniController extends Controller
{
    public function index()
    {
        $data = nilaiMurniModel::with('siswa')->get();
        return view('ganjil.psts.nilai_murni', compact('data'));
    }

    public function export()
    {
        $data = [
            'siswa' => nilaiMurniModel::with('siswa')->get()
        ];

        $pdf = Pdf::loadView('ganjil.psts.nilai_murni_export', $data)->setPaper('a4', 'potrait');
        return $pdf->stream('contoh.pdf');
    }
}
