<?php

namespace App\Http\Controllers\ganjil\rapor;

use App\Http\Controllers\Controller;
use App\Models\mapelModel;
use App\Models\nilaiRaporGanjilModel;
use App\Models\siswaModel;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    protected $mapel;
    protected $siswa;
    protected $nilai;

    public function __construct()
    {
        $this->mapel = new mapelModel();
        $this->siswa = new siswaModel();
        $this->nilai = new nilaiRaporGanjilModel();
    }

    public function index()
    {
        $mapel      = $this->mapel->whereNotIn('singkatan', ['pdk1', 'pdk2', 'pdk3', 'pdk4'])->get();
        $siswa      = $this->siswa->all();
        $allNilai   = $this->nilai->with('siswa', 'mapel')->get();
        $nilaiPivot = [];

        foreach ($siswa as $s) {
            $row = [
                'nama' => $s->nama,
                'nis' => $s->nis,
                'nisn' => $s->nisn,
                'total_nilai' => 0
            ];

            $total = 0;

            foreach ($mapel as $mpl) {
                $n = $allNilai->firstWhere(fn($x) => $x->siswa_id == $s->id && $x->mapel_id == $mpl->id);
                $nilai = $n->nilai ?? 0;
                $row[$mpl->nama] = $nilai;
                $total += $nilai;
            }

            $row['total_nilai'] = $total;
            $nilaiPivot[] = $row;
        }

        $totalNilaiArray = array_column($nilaiPivot, 'total_nilai');

        foreach ($nilaiPivot as $key => $row) {
            $rank = 1 + count(array_filter($totalNilaiArray, fn($v) => $v > $row['total_nilai']));
            $nilaiPivot[$key]['peringkat'] = $rank;
        }

        return view('ganjil.rapor.nilai.index', compact('siswa', 'mapel', 'nilaiPivot'));
    }

    public function create($id)
    {
        $mapel = $this->mapel->findOrFail($id);
        $siswa = $this->siswa->all();

        return view('ganjil.rapor.nilai.create', compact('siswa', 'mapel'));
    }

    public function store(Request $request)
    {
        $mapel_id   = $request->mapel_id;
        $siswa_id   = $request->siswa_id;
        $nilai_list = $request->nilai;

        foreach ($siswa_id as $index => $id) {
            if (!empty($nilai_list[$index])) {
                nilaiRaporGanjilModel::create([
                    'siswa_id' => $id,
                    'mapel_id' => $mapel_id,
                    'nilai' => $nilai_list[$index]
                ]);
            }
        }

        return redirect()->to('nilai-rapor-ganjil');
    }
}
