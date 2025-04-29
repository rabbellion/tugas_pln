<?php

namespace App\Http\Controllers;

use App\Models\pekerja;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pekerjas = pekerja::all();
        return response()->json($pekerjas);
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
        $validated = $request->validate([
            'id_pekerja' => 'required|unique:pekerjas,id_pekerja',
            'kategori' => 'required|in:TKN,LKT,ADM,SPM',
            'nama' => 'required|string|max:255',
        ]);

        $pekerja = Pekerja::create($validated);

        return response()->json([
            'message' => 'pekerja berhasil ditambahkan',
            'data'=> $pekerja
        ], 201);
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pekerja = Pekerja::findOrFail($id);
        return response()->json($pekerja);
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
        $pekerja = Pekerja::findOrFail($id);

        $validated = $request->validate([
            'kategori' => 'sometimes|required|in:TKN,LKT,ADM,SPM',
            'nama' => 'sometimes|requires|string|max:255',
        ]);

        $pekerja->upate($validated);

        return response()->json([
            'message' => 'Pekerja berhasil diupdate',
            'data' => $pekerja
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pekerja = Pekerja::findOrFail($id);
        $pekerja->delete();

        return response()->json([
            'message' => "Pekerja berhasil dihapus"
        ]);
    }

    public function countKategori($kategori)
    {
        $validKategori = ['TKN', 'LKT', 'ADM', 'SPM'];
        if(!in_array($kategori, $validKategori)){
            return response()->json(['error' => 'Invalid Kategori'], 400);
        }

        $count = Pekerja::where('kategori', $kategori)->count();
        return response()->json(['count' => $count]);
    }
}
