<?php

namespace App\Http\Controllers;

use App\Models\siswaModel;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search     = $request->search;
        $data       = siswaModel::where('nama', 'like', "%{$search}%")->paginate(6);
        $laki       = siswaModel::where('jenis_kelamin', 'l')->count();
        $perempuan  = siswaModel::where('jenis_kelamin', 'p')->count();

        return view('siswa.index', compact('data', 'laki', 'perempuan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        if ($foto) {
            $fotoName = time() . '_' . $request->nama . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('img'), $fotoName);
            $fotoValue = $fotoName;
        } else {
            $fotoValue = null;
        }

        $data = [
            'nisn'              => strtolower($request->nisn),
            'nis'               => strtolower($request->nis),
            'nik'               => strtolower($request->nik),
            'nama'              => strtolower($request->nama),
            'jenis_kelamin'     => strtolower($request->jenis_kelamin),
            'tempat_lahir'      => strtolower($request->tempat_lahir),
            'tanggal_lahir'     => $request->tanggal_lahir,
            'agama'             => strtolower($request->agama),
            'telp'              => strtolower($request->telp),
            'alamat'            => strtolower($request->alamat),
            'foto'              => strtolower($fotoValue),
        ];

        siswaModel::create($data);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = siswaModel::find($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = siswaModel::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $foto = $request->file('foto');
        $siswa = siswaModel::find($id);

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
        $siswa->nik             = strtolower($request->nik);
        $siswa->nama            = strtolower($request->nama);
        $siswa->jenis_kelamin   = strtolower($request->jenis_kelamin);
        $siswa->tempat_lahir    = strtolower($request->tempat_lahir);
        $siswa->tanggal_lahir   = $request->tanggal_lahir;
        $siswa->agama           = strtolower($request->agama);
        $siswa->telp            = strtolower($request->telp);
        $siswa->alamat          = strtolower($request->alamat);
        $siswa->foto            = strtolower($fotoValue);
        $siswa->save();

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = siswaModel::find($id);
        $siswa->delete();

        if ($siswa->foto && file_exists(public_path('img/' . $siswa->foto))) {
            unlink(public_path('img/' . $siswa->foto));
        }

        return redirect()->route('siswa.index');
    }
}
