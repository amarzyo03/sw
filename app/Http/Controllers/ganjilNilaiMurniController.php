<?php

namespace App\Http\Controllers;

use App\Models\ganjilNilaiMurniModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ganjilNilaiMurniController extends Controller
{
    public function index()
    {
        $data = ganjilNilaiMurniModel::with('siswa')->get();
        return view('ganjil.nilai_murni', compact('data'));
    }

    public function export()
    {
        $data = [
            'title'     => 'Nilai Murni - Ganjil',
            'kop'       => 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/kop.png'))),
            'siswa'     => ganjilNilaiMurniModel::with('siswa')->get()
        ];

        $pdf = Pdf::loadView('ganjil.nilai_murni_export', $data);
        return $pdf->stream('ganjil_nilai_murni.pdf');
    }
}
