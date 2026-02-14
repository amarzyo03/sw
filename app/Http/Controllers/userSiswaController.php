<?php

namespace App\Http\Controllers;


use App\Models\ganjilNilaiMurniModel;
use App\Models\ganjilRaporModel;
use App\Models\genapNilaiMurniModel;
use App\Models\genapRaporModel;
use App\Models\presensiModel;
use Illuminate\Http\Request;
use App\Models\siswaModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userSiswaController extends Controller
{
    public function login()
    {
        if (session()->has('siswa_id')) {
            return redirect()->route('siswa.dashboard');
        }

        return view('user-siswa.login');
    }

    public function attempLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $siswa = siswaModel::where('username', $request->username)->first();

        if ($siswa && Hash::check($request->password, $siswa->password)) {
            // simpan ke session manual
            Session::put('siswa_id', $siswa->id);
            Session::put('siswa_username', $siswa->username);

            return redirect()->route('siswa.dashboard');
        } else {
            return back()->with('error', 'Username atau Password salah!');
        }
    }

    public function logout()
    {
        Session::forget(['siswa_id', 'siswa_username']);
        return redirect()->route('siswa.login');
    }

    // ############################### //
    public function dashboard() // dashboard siswa
    {
        $id = session('siswa_id');
        $siswa = siswaModel::findOrFail($id);
        $presensi = presensiModel::where('siswa_id', $id)->first();

        $jml_hari = Carbon::create(2025, 7, 7)->diffInDays(Carbon::now());
        $jml_absen = $presensi->sakit + $presensi->izin + $presensi->alpa;
        $hadir = $jml_hari - $jml_absen;
        $persen_hadir = round(($hadir / $jml_hari) * 100, 2);



        return view('user-siswa.dashboard', compact('siswa', 'presensi', 'persen_hadir'));
    }

    public function show() // profil siswa
    {
        $id = session('siswa_id');
        $siswa = siswaModel::findOrFail($id);
        return view('user-siswa.show', compact('siswa'));
    }

    public function edit() // edit profil siswa
    {
        $id = session('siswa_id');
        $siswa = siswaModel::findOrFail($id);
        return view('user-siswa.edit', compact('siswa'));
    }

    public function update(Request $request) // update profil siswa
    {
        $foto = $request->file('foto');
        $id = session('siswa_id');
        $siswa = siswaModel::findOrFail($id);

        if ($foto) {
            if ($siswa->foto && file_exists(public_path('img/' . $siswa->foto))) {
                unlink(public_path('img/' . $siswa->foto));
            }

            $fotoName = time() . '_' . $request->nama . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('img'), $fotoName);
            $fotoValue = $fotoName;
        } else {
            $fotoValue = $siswa->foto;
        }

        $siswa->nisn            = strtolower($request->nisn);
        $siswa->nis             = strtolower($request->nis);
        $siswa->nama            = strtolower($request->nama);
        $siswa->jenis_kelamin   = strtolower($request->jenis_kelamin);
        $siswa->tempat_lahir    = strtolower($request->tempat_lahir);
        $siswa->tanggal_lahir   = $request->tanggal_lahir;
        $siswa->agama           = strtolower($request->agama);
        $siswa->telp            = strtolower($request->telp);
        $siswa->alamat          = strtolower($request->alamat);
        $siswa->foto            = strtolower($fotoValue);
        $siswa->save();

        return redirect()->to('/user-siswa/show');
    }


    // ############################### //
    public function ganjil_nilai_murni() // nilai murni psts ganjil siswa
    {
        $id = session('siswa_id');
        $jml_siswa = siswaModel::count();
        $data = ganjilNilaiMurniModel::where('siswa_id', $id)->get();

        $judul = 'LAPORAN NILAI MURNI';
        $penilaian = 'PENILAIAN SUMATIF TENGAH SEMESTER (PSTS) GANJIL';
        $tahun_ajaran = 'TAHUN AJARAN 2025/2026';

        return view('user-siswa.penilaian', compact(
            'jml_siswa',
            'data',
            'judul',
            'penilaian',
            'tahun_ajaran'
        ));
    }

    public function genap_nilai_murni() // nilai murni psts ganjil siswa
    {
        $id = session('siswa_id');
        $jml_siswa = siswaModel::count();
        $data = genapNilaiMurniModel::where('siswa_id', $id)->get();

        $judul = 'LAPORAN NILAI MURNI';
        $penilaian = 'PENILAIAN SUMATIF TENGAH SEMESTER (PSTS) GENAP';
        $tahun_ajaran = 'TAHUN AJARAN 2025/2026';

        return view('user-siswa.penilaian', compact(
            'jml_siswa',
            'data',
            'judul',
            'penilaian',
            'tahun_ajaran'
        ));
    }

    public function ganjil_rapor() // rapor psas ganjil siswa
    {
        $id = session('siswa_id');
        $jml_siswa = siswaModel::count();
        $data = ganjilRaporModel::where('siswa_id', $id)->get();

        $judul = 'RAPOR BAYANGAN';
        $penilaian = 'PENILAIAN SUMATIF AKHIR SEMESTER (PSAS) GANJIL';
        $tahun_ajaran = 'TAHUN AJARAN 2025/2026';

        return view('user-siswa.penilaian', compact(
            'jml_siswa',
            'data',
            'judul',
            'penilaian',
            'tahun_ajaran'
        ));
    }

    public function genap_rapor() // rapor psas genap siswa
    {
        $id = session('siswa_id');
        $jml_siswa = siswaModel::count();
        $data = genapRaporModel::where('siswa_id', $id)->get();

        $judul = 'RAPOR BAYANGAN';
        $penilaian = 'PENILAIAN SUMATIF AKHIR SEMESTER (PSAS) GENAP';
        $tahun_ajaran = 'TAHUN AJARAN 2025/2026';

        return view('user-siswa.penilaian', compact(
            'jml_siswa',
            'data',
            'judul',
            'penilaian',
            'tahun_ajaran'
        ));
    }
}
