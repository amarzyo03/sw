<?php

namespace App\Http\Controllers;

use App\Models\genapNilaiMurniModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class genapNilaiMurniController extends Controller
{
    public function index()
    {
        $data = genapNilaiMurniModel::with('siswa')->get();
        return view('genap.nilai_murni', compact('data'));
    }

    public function export()
    {
        $data = [
            'title'     => 'Nilai Murni - Genap',
            'kop'       => 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/kop.png'))),
            'siswa'     => genapNilaiMurniModel::with('siswa')->get()
        ];

        $pdf = Pdf::loadView('genap.nilai_murni_export', $data);
        return $pdf->stream('genap_nilai_murni.pdf');
    }
}
