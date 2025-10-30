<?php

namespace App\Http\Controllers;

use App\Models\mapelModel;
use Illuminate\Http\Request;

class mapelController extends Controller
{
    protected $mapel;

    public function __construct()
    {
        $this->mapel = new mapelModel();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->mapel->all();
        return view('mapel.index', compact('data'));
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
        $data = [
            'nama'      => strtolower($request->nama),
            'singkatan' => strtolower($request->singkatan)
        ];

        $this->mapel->create($data);
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
        $mapel = $this->mapel->findOrFail($id);
        return view('mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mapel = $this->mapel->findOrFail($id);
        $mapel->nama = $request->nama;
        $mapel->singkatan = $request->singkatan;
        $mapel->save();

        return redirect()->route('mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mapel = $this->mapel->findOrFail($id);
        $mapel->delete();

        return redirect()->route('mapel.index');
    }
}
