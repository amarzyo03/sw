<?php

namespace App\Http\Controllers;

use App\Models\ganjil\psas\raporModel;
use App\Models\ganjil\psts\nilaiMurniModel;
use App\Models\nilaiMurniPSTSGanjilModel;
use Illuminate\Http\Request;
use App\Models\siswaModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userSiswaController extends Controller
{
    public function login()
    {
        if (session()->has('siswa_id')) {
            return redirect()->to('/user-siswa/dashboard');
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

            return redirect()->to('/user-siswa/dashboard');
        } else {
            return back()->with('error', 'Username atau Password salah!');
        }
    }

    public function logout()
    {
        Session::forget(['siswa_id', 'siswa_username']);
        return redirect()->to('/user-siswa/login');
    }

    // ############################### //
    public function dashboard() // dashboard siswa
    {
        $id = session('siswa_id');
        $siswa = siswaModel::findOrFail($id);
        return view('user-siswa.dashboard', compact('siswa'));
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

    public function ganjil_psts_nilai_murni() // nilai murni psts ganjil siswa
    {
        $id = session('siswa_id');
        $jml_siswa = siswaModel::count();
        $data = nilaiMurniModel::where('siswa_id', $id)->get();
        return view('user-siswa.ganjil_psts_nilai_murni', compact('jml_siswa', 'data'));
    }

    public function ganjil_psas_rapor() // rapor psas ganjil siswa
    {
        $id = session('siswa_id');
        $jml_siswa = siswaModel::count();
        $data = raporModel::where('siswa_id', $id)->get();
        return view('user-siswa.ganjil_psas_rapor', compact('jml_siswa', 'data'));
    }
}
