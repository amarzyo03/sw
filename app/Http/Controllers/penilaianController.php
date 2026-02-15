<?php

namespace App\Http\Controllers;

use App\Models\ganjilNilaiMurniModel;
use App\Models\ganjilRaporModel;
use App\Models\genapNilaiMurniModel;
use App\Models\genapRaporModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class penilaianController extends Controller
{
    // Penilaian nilai murni ganjil
    public function ganjil_nilai_murni()
    {
        $title = 'NILAI MURNI';
        $smt = 'GANJIL';
        $link_export = 'ganjil.nilai-murni-export';
        $data = ganjilNilaiMurniModel::with('siswa')->get();

        return view('penilaian.index', compact(
            'data',
            'title',
            'smt',
            'link_export'
        ));
    }

    public function ganjil_nilai_murni_export()
    {
        $data = [
            'title'     => 'Nilai Murni - Ganjil',
            'kop'       => 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/kop.png'))),
            'siswa'     => ganjilNilaiMurniModel::with('siswa')->get()
        ];

        $pdf = Pdf::loadView('penilaian.export', $data);
        return $pdf->stream('ganjil_nilai_murni.pdf');
    }

    // Penilaian nilai murni genap
    public function genap_nilai_murni()
    {
        $title = 'NILAI MURNI';
        $smt = 'GENAP';
        $link_export = 'genap.nilai-murni-export';
        $data = genapNilaiMurniModel::with('siswa')->get();

        return view('penilaian.index', compact(
            'data',
            'title',
            'smt',
            'link_export'
        ));

        return view('penilaian.index', compact('data'));
    }

    public function genap_nilai_murni_export()
    {
        $data = [
            'title'     => 'Nilai Murni - Genap',
            'kop'       => 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('img/kop.png'))),
            'siswa'     => genapNilaiMurniModel::with('siswa')->get()
        ];

        $pdf = Pdf::loadView('genap.nilai_murni_export', $data);
        return $pdf->stream('genap_nilai_murni.pdf');
    }

    // Penilaian rapor ganjil
    public function ganjil_rapor()
    {
        $title = 'RAPOR';
        $smt = 'GANJIL';
        $link_export = 'ganjil.rapor';
        $data = ganjilRaporModel::with('siswa')->get();

        return view('penilaian.index', compact(
            'data',
            'title',
            'smt',
            'link_export'
        ));
    }

    public function genap_rapor()
    {
        $title = 'RAPOR';
        $smt = 'GENAP';
        $link_export = 'genap.rapor';
        $data = genapRaporModel::with('siswa')->get();

        return view('penilaian.index', compact(
            'data',
            'title',
            'smt',
            'link_export'
        ));
    }
}
