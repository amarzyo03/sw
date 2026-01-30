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
     * 
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $data = presensiModel::with('siswa')->get();
        return view('presensi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        foreach ($request->id as $i => $id) {
            presensiModel::where('id', $id)->update([
                'sakit' => $request->sakit[$i],
                'izin'  => $request->izin[$i],
                'alpa'  => $request->alpa[$i],
            ]);
        }

        return redirect()->route('presensi.index');
    }
}
