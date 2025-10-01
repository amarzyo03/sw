<?php

namespace App\Http\Controllers;

use App\Models\mapelModel;
use Illuminate\Http\Request;

class mapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = mapelModel::all();
        return view('mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        mapelModel::create($request->all());
        return redirect()->route('mapel.index');
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
        $mapel = mapelModel::findOrFail($id);
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mapel = mapelModel::findorFail($id);
        $mapel->nama = $request->nama;
        $mapel->singkatan = $request->singkatan;
        $mapel->guru = $request->guru;
        $mapel->save();

        return redirect()->route('mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        mapelModel::findOrFail($id)->delete();
        return redirect()->route('mapel.index');
    }
}
