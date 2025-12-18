<?php

namespace App\Http\Controllers;

use App\Models\presensiModel;
use Illuminate\Http\Request;

class presensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = presensiModel::with('siswa')->get();
        return view('presensi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id'       => 'required|array',
            'sakit'    => 'required|array',
            'izin'     => 'required|array',
            'alpa'     => 'required|array',
        ]);

        foreach ($request->id as $i => $id) {
            presensiModel::where('id', $id)->update([
                'sakit' => $request->sakit[$i] ?? '0',
                'izin'  => $request->izin[$i] ?? '0',
                'alpa'  => $request->alpa[$i] ?? '0',
            ]);
        }

        return redirect()->back()->with('success', 'Data presensi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
